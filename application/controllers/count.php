  <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Count extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('gamem');
			$this->load->model('countm');
		}

		public function lists()
		{
			$get = $this->input->get();
			$gameid = $get['gameid'];
			$stime = $get['stime'] ? $get['stime'] : date('Y-m-d H:i:s');
			$etime = $get['etime'] ? $get['etime'] : '';

			if (!$gameid)
			{
				message('游戏ID不能为空！');
			}
			$domain = $this->gamem->get_domain_by_id($gameid);		// 二级域名
			$domain = strtoupper($domain);

			$typeArr[1] = array(2,3,4);
			$typeArr[2] = array(5,6,7);
			$typeArr[3] = array(8,9,10);

			foreach ($typeArr as $v) 
			{
				$this->countm->count_pv($domain, $v, $stime, $etime);
			}

			$this->smarty->assign('gameid',$gameid);
			$this->smarty->display('count_lists.tpl');
		}




	}