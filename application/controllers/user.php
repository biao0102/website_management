<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

        //user login
        /**
         *
         */
        public function login()
        {
            $username=$this->input->get('username');
            $password=md5($this->input->get('password'));
            $userinfo=$this->userm->get_user_by_username($username);


            foreach($userinfo as $row)
            {
                $un=$row['username'];
                $up=$row['password'];

                //账号密码正确
                if($password==$up  && $username==$un)
                {
                    $this->smarty->display('home.tpl');
                }
                else
                {
                    $this->smarty->display('login.tpl');
                }
            }
        }

		public function lists()
		{
			$keyword = $this->input->get('keyword');
			$userlist = $this->userm->get_userlist($keyword);
			$this->smarty->assign('userlist',$userlist);
			$this->smarty->assign('keyword',$keyword);
			$this->smarty->display('user_list.tpl');
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
