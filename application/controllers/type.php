 <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Type extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('typem');
		}

		// 获取文章类型
		public function gettype()
		{
			$gameid = $this->input->get('gameid');
			if(!$gameid) return false;

			$typestr = $this->typem->get_game_type($gameid);
			$typeArr = explode(',', $typestr);
			$parenttype = $this->typem->get_parenttype($typeArr);
			return $parenttype;
		}


		// ajax获取文章子类型
		public function get_childtype_by_ajax()
		{
			$callback = $this->input->get('callback');
			$typeid = $this->input->get('typeid');
			if($typeid)
			{
				$data = $this->typem->get_childtype_by_typeid($typeid);
			}

			if ($data)
			{
				$result = array('stat' => 1,'str' => 'success','data' => $data);
			} else {
				$result = array('stat' => 0,'str' => 'NO data!');
			}
			echo $callback . '(' . json_encode($result) . ')';
		}

		// 文章类型列表
		public function typelist()
		{
			$typelist = $this->typem->get_typelist();
			$this->smarty->assign('typelist',$typelist);
			$this->smarty->display('type_typelist.tpl');
		}

		// 添加文章类型
		public function addtype()
		{
			$post = $this->input->post();

			if($post['submit'])
			{
				unset($post['submit']);
				if(!$post['summary']) $post['summary'] = '公共';
				$ret = $this->typem->insert_type($post);
				if ($ret) message('添加成功！','type/typelist');
				exit;
			}

			$parenttype = $this->typem->get_parenttype();
			$this->smarty->assign('parenttype',$parenttype);
			$this->smarty->display('type_addtype.tpl');
		}

		// 编辑文章类型
		public function edittype()
		{
			$typeid = $this->input->get('typeid');
			if (!$typeid) message('类型ID不能为空！','type/typelist');

			$post = $this->input->post();
			if($post['submit'])
			{
				unset($post['submit']);
				$ret = $this->typem->edit_type_by_typeid($typeid,$post);
				if($ret) message('编辑成功！','type/typelist');
				exit;
			}
			
			$parenttype = $this->typem->get_parenttype();
			$typeinfo = $this->typem->get_type_by_typeid($typeid);
			
			$this->smarty->assign('typeid',$typeid);
			$this->smarty->assign('typeinfo',$typeinfo);
			$this->smarty->assign('parenttype',$parenttype);
			$this->smarty->display('type_edittype.tpl');
		}

		// 删除文章类型
		public function deltype()
		{
			$typeid = $this->input->get('typeid');
			if (!$typeid) message('类型ID不能为空！','type/typelist');

			$ret = $this->typem->del_type_by_typeid($typeid);
			message('删除成功！','type/typelist');
			exit;
		}

		// 设置文章类型
		public function settype()
		{
			$gameid = $this->input->get('gameid');
			if (!$gameid) message('游戏ID不能为空！','game/gamelist');
			
			$post = $this->input->post();
			if($post['submit'])
			{
				$data['type'] = implode(',',$post['type']);
				$ret = $this->typem->set_type_by_gameid($gameid,$data);
				if($ret) message('设置成功！','article/articlelist?gameid='.$gameid);
				exit;
			}

			$typelist = $this->typem->get_typelist();
			$gametype = array();
			$ret = $this->typem->get_type_by_gameid($gameid);
			$ret && $gametype = explode(',', $ret);

			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('typelist',$typelist);
			$this->smarty->assign('gametype',$gametype);
			$this->smarty->display('type_settype.tpl');
		}


	}