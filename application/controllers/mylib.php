<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mylib extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}


		// 过滤字符串













		// 设置读取session
		public function set_session()
		{
			$uuid = $this->input->get('uuid');

			$now = microtime(true);

			$sendtime = $this->session->userdata($uuid);
			
			$expire = $now - $sendtime;

			if($expire < 60)
			{
				$lefttime = 60 - floor($expire);
				echo $sendtime . "<br>";
				echo "频繁操作,请" . $lefttime . "s后重新操作！ ";
			}else{
				$data = array($uuid => $now);
				$this->session->set_userdata($data);
				echo "设置session成功！";
			}
		}


		// 设置读取cookie
		public function set_cookie()
		{
			$now = microtime(true);		// 毫秒
			if(isset($_COOKIE["sendtime"]))
			{
				$sendtime = $_COOKIE["sendtime"];
				$expire = $now - $sendtime;
				if($expire > 60)
				{
					setcookie("sendtime", "", time()-3600);
				}
				echo "read";
			}else{
				$expire = $now + 60;
				setcookie('sendtime', $now, $expire);
				echo "set";
			}	
		}	

		// 读取Excel
		public function excelreader()
		{
			$this->load->library('Spreadsheet_Excel_Reader.php');
			$data = new Spreadsheet_Excel_Reader("./data/example01.xls");
		//	$data = json_decode('{$data}',true);
			echo $data->dump(true,true);
		}



		
		// 记录日志
		public function writelog()
		{
			$name = 'liuchenxi';
			$mobile = '15811276308';
			$age = '25';
			$logFileDir = './data/log/';
			$logFile = 'test.log';
			$fp = fopen($logFileDir.$logFile,'a');
			$log = date('Y-m-d H:i:s',time()) . " - " . $name . " - " . $mobile . " - " . $age . "\n";
			fwrite($fp,$log);
			fclose($fp);

			/*
				fopen() 函数打开文件或者 URL。打开失败，本函数返回 FALSE。
				"r" 	只读方式打开，将文件指针指向文件头。
				"r+" 	读写方式打开，将文件指针指向文件头。
				"w" 	写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
				"w+" 	读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
				"a" 	写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
				"a+" 	读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
				"x" 	创建并以写入方式打开，将文件指针指向文件头。
						如果文件已存在，则fopen()调用失败并返回FALSE，并生成一条 E_WARNING 级别的错误信息。
						如果文件不存在则尝试创建之。
						这和给底层的 open(2) 系统调用指定 O_EXCL|O_CREAT 标记是等价的。
						此选项被 PHP 4.3.2 以及以后的版本所支持，仅能用于本地文件。
				"x+" 	创建并以读写方式打开，将文件指针指向文件头。
						如果文件已存在，则fopen()调用失败并返回 FALSE，并生成一条 E_WARNING 级别的错误信息。
						如果文件不存在则尝试创建之。
						这和给底层的 open(2) 系统调用指定 O_EXCL|O_CREAT 标记是等价的。
						此选项被 PHP 4.3.2 以及以后的版本所支持，仅能用于本地文件。
			*/
		}


		// 日志解析
		public function analysislog()
		{
			$file = './data/log/test.log';
			$handle = @fopen($file,'rb');	// "r"是以文本形式读，"rb"是以二进制的形式读。

			$n = 0;
			$data = array();
 
			// rewind ($handle);		// 倒回文件指针的位置
			// feof() 函数检测是否已到达文件末尾 (eof)。
			// 如果文件指针到了EOF或者出错时则返回TRUE，否则返回一个错误（包括socket超时），其它情况则返回FALSE。

			while(!feof($handle))
			{
				$name = '';
				$mobile = '';
				$age = '';
				$time1 = '';
				$time2 = '';

				fscanf($handle,"%s %s - %s - %s - %s",$time1,$time2,$name,$mobile,$age);

				if($name)
				{
					$data[$n]['name'] = $name;
					$data[$n]['age'] = $age;
					$data[$n]['mobile'] = $mobile;
					$data[$n]['time'] = $time1 . ' ' . $time2;
				}
				
				$n++;
			}
			rewind ($handle);
			debug($data);
		}
	}
