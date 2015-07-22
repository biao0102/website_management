<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
            $userinfo=$this->session->userdata['user'];
            $username=$userinfo['username'];
            echo  $username;
            if($username=="")
            {
                $this->smarty->display('login.tpl');
            }
            else
            {
                //全局变量 初始化菜单列表  baseurl
                $menulist = $this->menum->get_menulist();
                $this->smarty->assign('userinfo',$userinfo);
                $this->smarty->assign('baseurl',BASE_URL);
                $this->smarty->assign('menu',$menulist);

                $this->smarty->display('home.tpl');
            }

		}

		public function loginout()
		{
			$this->session->unset_userdata('user');
            $this->smarty->display('login.tpl');
        }





	}
