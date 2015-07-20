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
			$this->smarty->display('home.tpl');
		}

		public function loginout()
		{
			$this->session->unset_userdata('user');
			exit("<script>window.location.href='http://fladminsso.feiliu.com/logout?source=" . rawurlencode(BASE_URL . '?c=login&a=ssologin'). "';</script>");
		}





	}
