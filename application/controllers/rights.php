<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Rights extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function lists()
		{
			$rightslist = $this->rightsm->get_rightslist();
			$this->smarty->assign('rightslist',$rightslist);
			$this->smarty->display('rights_list.tpl');
		}

		public function add()
		{
			$post = $this->input->post();
			if($post['submit'])
			{
				unset($post['submit']);
				if($post['menuid'] == '')
				{
					$post['menuid'] = $post['parentid'];
					$post['parentid'] = 0;
				}
				$post['createtime'] = date('Y-m-d H:i:s',time());
				$ret = $this->rightsm->insert_rights($post);
				if($ret) message('添加成功！','rights/lists');
				exit;
			}
			$parentmenu = $this->menum->get_parentmenu();
			$this->smarty->assign('parentmenu',$parentmenu);
			$this->smarty->display('rights_add.tpl');
		}

		public function edit()
		{
			$rightsid = $this->input->get('rightsid');
			if(!$rightsid) message('未取到RightsID！');

			$post = $this->input->post();
			if($post['submit'])
			{
				unset($post['submit']);
				if($post['menuid'] == '')
				{
					$post['menuid'] = $post['parentid'];
					$post['parentid'] = 0;
				}
				$ret = $this->rightsm->edit_rights_by_rightsid($rightsid,$post);
				if($ret) message('编辑成功！','rights/lists');
				exit;
			}

			$rightsinfo = $this->rightsm->get_rights_by_rightsid($rightsid);
			$parentmenu = $this->menum->get_parentmenu();
		
			$childmenu = array();
			if($rightsinfo['parentid'] != 0)
			{
				$childmenu = $this->menum->get_childmenu_by_parentid($rightsinfo['parentid']);
			}else{
				$rightsinfo['parentid'] = $rightsinfo['menuid'];
			}

			$this->smarty->assign('rightsid',$rightsid);
			$this->smarty->assign('rightsinfo',$rightsinfo);
			$this->smarty->assign('parentmenu',$parentmenu);
			$this->smarty->assign('childmenu',$childmenu);
			$this->smarty->display('rights_edit.tpl');
		}

		public function del()
		{
			message('无法删除！','rights/lists');
		}

		public function distribute()
		{
			$userid = $this->input->get('userid');
			if(!$userid) message('未取到UserID！');
			
			$post = $this->input->post();
			if($post['submit'])
			{
				$data['actionrights'] = implode(',',$post['rights']);
				$data['gamerights'] = implode(',',$post['game']);
				$ret = $this->rightsm->distribute_rights_by_userid($userid,$data);
				if($ret) message('配权成功！','user/lists');
				exit;
			}

			// 权限列表
			$rightslist = $this->rightsm->get_rightslist();
			$userrights = array();
			$ret_rights = $this->rightsm->get_rights_by_userid($userid);
			$ret_rights && $userrights = explode(',', $ret_rights);

			// 官网列表
			$this->load->model('gamem');
			$gamelist = $this->gamem->get_gamelist();
			$usergames = array();
			$ret_games = $this->rightsm->get_games_by_userid($userid);
			$ret_games && $usergames = explode(',', $ret_games);

			$this->smarty->assign('userid',$userid);
			$this->smarty->assign('rightslist',$rightslist);
			$this->smarty->assign('userrights',$userrights);
			$this->smarty->assign('gamelist',$gamelist);
			$this->smarty->assign('usergames',$usergames);
			$this->smarty->display('rights_distribute.tpl');
		}

	}
