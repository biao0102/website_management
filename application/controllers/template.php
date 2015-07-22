 <?php
/* 版本管理 */
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Template extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('templatem');
		}

		public function lists()
		{
			$get = $this->input->get();
			$vid = $get['vid'];
			$gameid = $get['gameid'];
			if (!$gameid) message('未获取到游戏ID！');
			if (!$vid) message('未获取到版本ID！');

			$lists = $this->templatem->get_templatelist($gameid,$vid);

			$this->smarty->assign('lists',$lists);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('vid',$vid);
			$this->smarty->display('template_lists.tpl');
		}

		public function add()
		{
			$get = $this->input->get();
			$vid = $get['vid'];
			$gameid = $get['gameid'];
			if (!$gameid) message('未获取到游戏ID！');
			if (!$vid) message('未获取到版本ID！');

			$post = $this->input->post();
			if ($post['submit'])
			{
				unset($post['submit']);
				
				
				$post['vid'] = $vid;
				$post['gameid'] = $gameid;
				$post['filename'] = $post['filename'] . '.shtml';
				$post['createtime'] = $post['updatetime'] = date('Y-m-d H:i:s');
				$ret = $this->templatem->insert_template($post);
				if ($ret) 
				{
					message('添加成功！','template/lists?gameid='.$gameid.'&vid='.$vid);
				} else {
					message('添加失败！','template/lists?gameid='.$gameid.'&vid='.$vid);
				}
				exit;
			}

			$splist = $this->templatem->get_splist_by_vid($gameid,$vid);
			//debug($splist);
			$this->smarty->assign('vid',$vid);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('splist',$splist);
			$this->smarty->display('template_add.tpl');
		}

		public function edit()
		{
			$get = $this->input->get();
			$id = $get['id'];
			$vid = $get['vid'];
			$gameid = $get['gameid'];
			
			if (!$id) message('未获取到模板ID！');
			if (!$vid) message('未获取到版本ID！');
			if (!$gameid) message('未获取到游戏ID！');

			$post = $this->input->post();
			if ($post['submit'])
			{
				unset($post['submit']);
				$post['ismake'] = 0;
				$post['updatetime'] = date('Y-m-d H:i:s');
				$ret = $this->templatem->edit_template_by_id($id,$post);
				if ($ret) 
				{
					message('编辑成功！','template/lists?gameid='.$gameid.'&vid='.$vid);
				} else {
					message('编辑失败！','template/lists?gameid='.$gameid.'&vid='.$vid);
				}
				exit;
			}
			$splist = $this->templatem->get_splist_by_vid($gameid,$vid);
			$tinfo = $this->templatem->get_template_by_id($id);
			$this->smarty->assign('id',$id);
			$this->smarty->assign('vid',$vid);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('data',$tinfo);
			$this->smarty->assign('splist',$splist);
			$this->smarty->display('template_edit.tpl');
		}

		public function del()
		{
			$get = $this->input->get();
			$id = $get['id'];
			$vid = $get['vid'];
			$gameid = $get['gameid'];
			
			if (!$id) message('未获取到模板ID！');
			if (!$vid) message('未获取到版本ID！');
			if (!$gameid) message('未获取到游戏ID！');

			$ret = $this->templatem->del_template_by_id($id);
			if ($ret) 
			{
				message('删除成功！','template/lists?gameid='.$gameid.'&vid='.$vid);
			} else {
				message('删除失败！','template/lists?gameid='.$gameid.'&vid='.$vid);
			}
			exit;
		}

	}
