<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function login()
		{



		}

		public function loginout()
		{
			$this->session->unset_userdata('user');
            $this->smarty->display('login.tpl');
			//exit("<script>window.location.href='http://fladminsso.feiliu.com/logout?source=" . rawurlencode(BASE_URL . '?c=login&a=ssologin'). "';</script>");
		}





	}
