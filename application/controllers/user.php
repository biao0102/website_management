<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

        //user login
        public function login()
        {
            $p_username=$this->input->post('username');
            $p_password=md5($this->input->post('password'));

            $userinfo=$this->userm->get_user_by_username($p_username);
            $username=$userinfo['username'];
            $password=$userinfo['password'];
            $userid=$userinfo['userid'];
            $level=$userinfo['level'];

            //账号密码正确
            if($p_password==$password  && $p_username==$username)
            {
                //填充session信息
                //$user = array('userid'=> $userid,'username'=> $username);
                $user=$userinfo;
                $this->session->set_userdata('user',$user);
                $user = $this->session->userdata('user');


                //根据获取的用户信息  设定环境变量
                defined('USERID') || define('USERID',$userid);
                defined('USERNAME') || define('USERNAME',$username);
                defined('USERLV') || define('USERLV',$level);

                //获取菜单列表
                $menulist = $this->menum->get_menulist();
                $this->smarty->assign('baseurl',BASE_URL);
                $this->smarty->assign('userinfo',$userinfo);
                $this->smarty->assign('menu',$menulist);

                //跳转到主页面
                $this->smarty->display('home.tpl');
            }
            else
            {
                //重新登陆
                $this->smarty->display('login.tpl');
            }

        }

        //用户列表
		public function lists()
		{
			$keyword = $this->input->get('keyword');
			$userlist = $this->userm->get_userlist($keyword);
			$this->smarty->assign('userlist',$userlist);
			$this->smarty->assign('keyword',$keyword);
			$this->smarty->display('user_list.tpl');
		}

        //添加用户
        public function add()
        {
            $type=$this->input->post('useraddreq');

            if($type=='1')
            {
                $this->smarty->display('user_add.tpl');
            }
            elseif ($type=='2')
            {
                $username=$this->input->post('username');
                $truename=$this->input->post('truename');
                $email=$this->input->post('email');

                if($username!="" && $truename!="" && $email!="")
                {
                    $userdata['username'] = $username;
                    $userdata['truename'] = $truename;
                    $userdata['password'] = MD5('123456');
                    $userdata['email'] = $email;
                    $userdata['createtime'] = date('Y-m-d H:i:s',time());
                    $userdata['updatetime'] = date('Y-m-d H:i:s',time());
                    $userid = $this->userm->insert_user($userdata);
                }
                $this->lists();
            }else
            {
                $this->lists();
            }

        }

		public function edit()
		{
			$userid = $this->input->get('userid');
			if(!$userid) message('未取到UserID！');

			$post = $this->input->post();
			if($post['submit'])
			{
				unset($post['submit']);
				$ret = $this->userm->edit_user_by_userid($userid,$post);
				if($ret) message('编辑成功！','user/lists');
				exit;
			}

			$userinfo = $this->userm->get_user_by_userid($userid);

			$this->smarty->assign('userid',$userid);
			$this->smarty->assign('userinfo',$userinfo);
			$this->smarty->display('user_edit.tpl');
		}

	}
