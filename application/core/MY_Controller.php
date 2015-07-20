<?php
	
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class My_Controller extends CI_Controller
	{

		public $db;

		function __construct()
		{
			parent::__construct();
			$offline_dir = SITE_BASE_DIR . 'site_offline';
			$online_dir = SITE_BASE_DIR . 'site';
			if (!is_dir($offline_dir)){
				mkdir($offline_dir);
				@chmod($offline_dir, 0777);
			}
			if (!is_dir($online_dir)){
				mkdir($online_dir);
				@chmod($online_dir, 0777);
			}
			

			header("Content-type: text/html; charset=utf-8");
			$this->db01 = $this->load->database('database01',true);	
			$this->db02 = $this->load->database('database02',true);
			$user = array('userid'=> '9','username'=> 'zhangbiao');
			$this->session->set_userdata('user',$user);
			$user = $this->session->userdata('user');

			$this->userinfo = $this->userm->get_user_by_username($user['username']);

			defined('USERID') || define('USERID',$this->userinfo['userid']);
			defined('USERNAME') || define('USERNAME',$this->userinfo['username']);
			defined('USERLV') || define('USERLV',$this->userinfo['level']);
			if($user['userid'] == 9 && $user['username'] == 'zhangbiao'){
				$this->login();
			}			
		}

		private function login()
		{

			$menulist = $this->menum->get_menulist();
			$this->smarty->assign('baseurl',BASE_URL);
			$this->smarty->assign('userinfo',$this->userinfo);
			$this->smarty->assign('menu',$menulist);
		}

	}

