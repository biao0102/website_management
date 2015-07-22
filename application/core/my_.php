<?php
	
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class My_Controller extends CI_Controller
	{

		public $db;

		function __construct()
		{
			parent::__construct();

			header("Content-type: text/html; charset=utf-8"); 
			
			$this->db01 = $this->load->database('database01',true);	
			$this->db02 = $this->load->database('database02',true);	
			$this->login();
		}

		private function login()
		{
			$user = $this->session->userdata('user');
			if (!$user['userid'] || !$user['username'])
			{
				$sign = $this->input->get('sign');
				if (!$sign)
				{
					header("Location: http://fladminsso.feiliu.com/?source=" . rawurlencode(BASE_URL . '?c=login&a=ssologin'));
				}

				$ret = file_get_contents("http://fladminsso.feiliu.com/client/check/{$sign}");
				$retinfo = json_decode($ret,1);

				if ($retinfo['code'] == 0)
				{
					$uinfo = $retinfo['userinfo'];

					$ret = $this->userm->get_user_by_username($uinfo['login_name']);

					if (!$ret)
					{
						$userdata['username'] = $uinfo['login_name'];
						$userdata['truename'] = $uinfo['name'];
						$userdata['password'] = MD5('123456');
						$userdata['email'] = $uinfo['email'];
						$userdata['createtime'] = date('Y-m-d H:i:s',time());
						$userdata['updatetime'] = date('Y-m-d H:i:s',time());

						$userid = $this->userm->insert_user($userdata);
						$username = $uinfo['login_name'];
					} else {
						$userdata['updatetime'] = date('Y-m-d H:i:s',time());
						$this->userm->update_logintime_by_username($uinfo['login_name'],$userdata);
						$userid = $ret['userid'];
						$username = $ret['username'];
					}

					$this->session->set_userdata('user',array('userid'=>$userid,'username'=>$username));
					header('Location:' . BASE_URL . 'home');
				} else {
					echo "<script>alert('登陆失败！')</script>";
					exit;
				}
			} else {

				
				$action = trim(reset(explode("?",$_SERVER['REQUEST_URI'])),'/');

				$this->userinfo = $this->userm->get_user_by_username($user['username']);

				defined('USERID') || define('USERID',$this->userinfo['userid']);
				defined('USERNAME') || define('USERNAME',$this->userinfo['username']);
				defined('USERLV') || define('USERLV',$this->userinfo['level']);

				// 权限	
				if ($action != '' && $action != 'home')
				{	
					if ($this->userinfo['level'] != 1)
					{
						if ($this->userinfo['actionrights'])
						{
							$userrights = $this->rightsm->get_rights_by_user(explode(",",$this->userinfo['actionrights']));

							// 过滤权限
							foreach($userrights as $k=>$v)
							{
								if(in_array($v['rightsid'],array(3,4,5)) && $this->userinfo['id'] != 1) unset($userrights[$k]);
							}

							if($userrights)
							{
								$type = 0;
								foreach($userrights as $v)
								{
									if(in_array($action,explode(",",$v['action']))) $type = 1;
								}
							}

							if($type == 0)
							{
								message('你的权限被小怪兽吃掉了！请联系管理员找回权限！');
								exit;
							} 
						} else {
							message('你的权限被小怪兽吃掉了！请联系管理员找回权限！');
							exit;
						}
					}
				}
				
				// 菜单
				if ($action != '' && $action != 'home')
				{
					$menu = $this->rightsm->get_menuid_by_action($action);
					if ($menu['parentid'] == 0) $activemenu = $menu['menuid'];
					if ($menu['parentid'] != 0) $activemenu = $menu['parentid'];
				} else {
					$activemenu = 1;
				}

				$menulist = array();

				if($this->userinfo['level'] == 1)
				{
					$menulist = $this->menum->get_menulist();
				} else {
					$menulist = $this->menum->get_menulist_by_user(explode(",",$this->userinfo['menurights']));
				}

				if ($menulist)
				{
					foreach ($menulist as $k=>$v)
					{
						if ($v['parent']['menuid'] == $activemenu)
						{
							$menulist[$k]['parent']['active'] = 'active';
						} else {
							$menulist[$k]['parent']['active'] = '';
						}
					}
				}
				
				// 记录用户操作
				$logFileDir = "/data/www/html/gwadmin/application/logs/userlog/";
				$logFile = 'userlog_' . date("Ymd") . '.log';
				$log = date('Y-m-d H:i:s') . ' - ' . USERNAME . ' - ' . $_SERVER['REQUEST_URI'] . "\n";
				$fp = fopen($logFileDir.$logFile, 'a');
				fwrite($fp, $log);
				fclose($fp); 


				$this->smarty->assign('baseurl',BASE_URL);
				$this->smarty->assign('userinfo',$this->userinfo);
				$this->smarty->assign('menu',$menulist);
			}
		}

	}

