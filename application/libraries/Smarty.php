<?php  
	
	// Smarty配置类

	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	require_once( APPPATH.'libraries/Smarty/Smarty.class.php' );

	class CI_Smarty extends Smarty
	{ 
		function __construct()
		{
			parent::__construct();  
			
			$this->cache_lifetime  = 3600; 								// 更新周期(秒)
			$this->caching         = false;								// 是否使用缓存
			$this->template_dir    = APPPATH . 'views/templates';		// 设置模板目录
			$this->compile_dir     = APPPATH . 'views/templates_c';		// 设置编译目录 
			$this->cache_dir       = APPPATH . 'views/cache';			// 缓存文件夹  
			$this->use_sub_dirs    = false;   							// 子目录变量（是否在编译目录、缓存文件夹中生成子目录）  
			$this->left_delimiter  = '<{';  
			$this->right_delimiter = '}>';
		}
	}
