<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Upload extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('gamem');
		}


		public function index()
		{
			//debug($_FILES);
			$data = $_FILES['file'];
			if (empty($data))
			{
				$result = array('stat'=> -1,'str'=>'Please select a file !');
				echo json_encode($result);
				exit;
			}
			$file_name = $data['name'];		// 文件名	
			$tmp_name = $data['tmp_name'];	// 服务器上临时文件名
			$file_size = $data['size'];		// 文件大小
			$file_type = $data['type'];		// 文件类型

			$gameid = $this->input->post('gameid');
			$domain = $this->gamem->get_domain_by_id($gameid);
			
			if (!$file_name || $domain == '') 
			{
				$result = array('stat'=> -2,'str'=>'Filename or Domainname is not exist!');
				echo json_encode($result);
				exit;
			}

			$dirpath = SITE_RESOURCE_DIR . 'gameimg/' . $domain;
			if (!is_dir($dirpath))
			{
				@mkdir($dirpath);
				@chmod($dirpath, 0777);
			}

			//获得文件扩展名
			$ext_arr = explode(".", $data['name']);
			$file_ext = strtolower(trim(array_pop($ext_arr)));

			// 重命名文件名
			$file_name = date('YmdHis') . '.' . $file_ext;

			$file_path = $dirpath. '/' . $file_name;
			if(move_uploaded_file($tmp_name, $file_path) === false)
			{
				$result = array('stat'=> -3,'str'=>'上传失败！');
			} else {
				$url = 'http://js.feiliu.com/gameimg/' . $domain . '/' . $file_name;
				$result = array('stat'=> 1,'str'=>'上传成功！','url'=>$url);
			}
			echo json_encode($result);
			exit;
		}


		// 图片上传
		public function image()
		{
			// .....
		}

		// 文件上传
		public function file()
		{
			// .....
		}



	}
