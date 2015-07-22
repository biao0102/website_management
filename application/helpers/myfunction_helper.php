<?php

	// 自定义函数库

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	function debug($var = null,$type = 2) 
	{
		if($var === NULL) $var = $GLOBALS;

		header("Content-type:text/html;charset=utf-8");
		
		echo '</pre>';
		echo '<pre style="background-color:black;color:white;font-size:13px; border: 2px solid green;padding: 5px;">变量跟踪信息：' . "\n";
		
		if ($type == 1) var_dump($var);
		if ($type == 2) print_r($var);

		exit();
	}

	function message($message, $url = '', $time = 2)
	{
	    $ci = &get_instance();
	    if ($url) {
	        $url = BASE_URL . $url;
	    }
	    $ci->smarty->assign('url', $url);
	    $ci->smarty->assign('time', $time);
	    $ci->smarty->assign('message', $message);
	    $ci->smarty->assign('baseurl', BASE_URL);
	    $ci->smarty->display('message.tpl');
	    exit;
	}