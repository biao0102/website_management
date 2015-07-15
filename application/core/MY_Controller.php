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

        //登陆初始化
		private function login()
		{
			$user = $this->session->userdata('user');
			if (!$user['userid'] || !$user['username'])
			{
				$sign = $this->input->get('sign');
                if(true)
				{

                    $userdata['username'] = 'oliver';
                    $userdata['truename'] = 'zhang biao';
                    $userdata['password'] = '01cbee5496bccae6e80614e5eb8875a1';
                    $userdata['email'] = '';
                    $userdata['createtime'] = date('Y-m-d H:i:s',time());
                    $userdata['updatetime'] = date('Y-m-d H:i:s',time());

					$this->session->set_userdata('user',array('userid'=>'9','username'=>'oliver'));
					header('Location:' . BASE_URL . 'home');
				}
			}
            else
            {
				$action = trim(reset(explode("?",$_SERVER['REQUEST_URI'])),'/');
				#$this->userinfo = $this->userm->get_user_by_username($user['username']);
				defined('USERID') || define('USERID','9');
				defined('USERNAME') || define('USERNAME','oliver');
				defined('USERLV') || define('USERLV',1);
				// 权限	
				if ($action != '' && $action != 'home')
				{	
					##if ($this->userinfo['level'] != 1)
                    if(true)
					{
						if ($this->userinfo['actionrights'])
						{
							$userrights = array('1','2','3','4','5','6','7','8');
							// 过滤权限
							foreach($userrights as $k=>$v)
							{
								if(in_array($v['rightsid'],array(3,4,5)) && $this->userinfo['id'] != 1)
                                    unset($userrights[$k]);
							}
							if($userrights)
							{
								$type = 0;
								foreach($userrights as $v)
								{
									if(in_array($action,explode(",",$v['action']))) $type = 1;
								}
							}
						}
                        else
                        {
							message('你的权限被小怪兽吃掉了！请联系管理员找回权限！');
							exit;
						}
					}
				}
				
				// 获取菜单
				if ($action != '' && $action != 'home')
				{
					$menu = $this->rightsm->get_menuid_by_action($action);
					if ($menu['parentid'] == 0)
                        $activemenu = $menu['menuid'];
					if ($menu['parentid'] != 0)
                        $activemenu = $menu['parentid'];
				}
                else
                {
					$activemenu = 1;
				}

				$menulist = array();
                $menulist = $this->menum->get_menulist();

				if ($menulist)
				{
					foreach ($menulist as $k=>$v)
					{
						if ($v['parent']['menuid'] == $activemenu)
						{
							$menulist[$k]['parent']['active'] = 'active';
						}
                        else
                        {
							$menulist[$k]['parent']['active'] = '';
						}
					}
				}
				
				// 记录用户操作
				#$logFileDir = "/data/www/html/gwadmin/application/logs/userlog/";
                #$logFile = 'userlog_' . date("Ymd") . '.log';
				#$log = date('Y-m-d H:i:s') . ' - ' . USERNAME . ' - ' . $_SERVER['REQUEST_URI'] . "\n";
				#$fp = fopen($logFileDir.$logFile, 'a');
				#fwrite($fp, $log);
				#fclose($fp);

				$this->smarty->assign('baseurl',BASE_URL);
				$this->smarty->assign('userinfo',$this->userinfo);
				$this->smarty->assign('menu',$menulist);
			}
		}

	}

