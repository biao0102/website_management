 <?php
/* 版本管理 */
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Version extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('versionm');
		}

		public function lists()
		{
			$gameid = $this->input->get('gameid');
			if (!$gameid) message('未获取到游戏ID！');
			$lists = $this->versionm->get_versionlist($gameid);
			$this->smarty->assign('lists',$lists);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->display('version_lists.tpl');
		}

		public function add()
		{
			$gameid = $this->input->get('gameid');
			if (!$gameid) message('未获取到游戏ID！');

			$post = $this->input->post();
			if ($post['submit'])
			{
				unset($post['submit']);
				$post['time'] = date('Y-m-d H:i:s');
				$post['gameid'] = $gameid;
				$ret = $this->versionm->insert_version($post);
				if ($ret) 
				{
					message('添加成功！','version/lists?gameid='.$gameid);
				} else {
					message('添加失败！','version/lists?gameid='.$gameid);
				}
				exit;
			}
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->display('version_add.tpl');
		}

		public function edit()
		{
			$get = $this->input->get();
			$gameid = $get['gameid'];
			$id = $get['id'];
			if (!$gameid) message('未获取到游戏ID！');
			if (!$id) message('未获取到版本ID！');

			$post = $this->input->post();
			if ($post['submit'])
			{
				unset($post['submit']);
				$ret = $this->versionm->edit_version_by_id($id,$post);
				if ($ret) 
				{
					message('编辑成功！','version/lists?gameid='.$gameid);
				} else {
					message('编辑失败！','version/lists?gameid='.$gameid);
				}
				exit;
			}

			$vinfo = $this->versionm->get_version_by_id($id);
			$this->smarty->assign('id',$id);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('data',$vinfo);
			$this->smarty->display('version_edit.tpl');
		}

		public function del()
		{
			$get = $this->input->get();
			$gameid = $get['gameid'];
			$id = $get['id'];
			if (!$gameid) message('未获取到游戏ID！');
			if (!$id) message('未获取到版本ID！');

			$ret = $this->versionm->del_version_by_id($id);
			if ($ret) 
			{
				message('删除成功！','version/lists?gameid='.$gameid);
			} else {
				message('删除失败！','version/lists?gameid='.$gameid);
			}
			exit;
		}

	}
