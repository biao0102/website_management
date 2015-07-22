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


            //全局变量 初始化菜单列表  baseurl
            $menulist = $this->menum->get_menulist();
            $this->smarty->assign('baseurl',BASE_URL);
            $this->smarty->assign('menu',$menulist);
            $this->smarty->assign('userinfo',$this->session->userdata('user'));

		}


	}

