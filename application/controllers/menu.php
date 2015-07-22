<?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Menu extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function lists()
		{
			$menulist = $this->menum->get_menulist();
			$this->smarty->assign('menulist',$menulist);
			$this->smarty->display('menu_list.tpl');
		}

		public function add()
		{
			$post = $this->input->post();
			if($post['submit'])
			{
				unset($post['submit']);
				$post['createtime'] = date('Y-m-d H:i:s');
				$ret = $this->menum->insert_menu($post);
				if($ret) message('添加成功！','menu/lists');
				exit;
			}
			$parentmenu = $this->menum->get_parentmenu();
			$this->smarty->assign('parentmenu',$parentmenu);
			$this->smarty->display('menu_add.tpl');
		}

		public function edit()
		{
			$menuid = $this->input->get('menuid');
			if(!$menuid) message('未取到MenuID');

			$post = $this->input->post();
			if($post['submit'])
			{
				unset($post['submit']);
				$ret = $this->menum->edit_menu_by_menuid($menuid,$post);
				if($ret) message('编辑成功！','menu/lists');
				exit;
			}
			
			$parentmenu = $this->menum->get_parentmenu();
			$menuinfo = $this->menum->get_menu_by_menuid($menuid);
			
			$this->smarty->assign('menuid',$menuid);
			$this->smarty->assign('menuinfo',$menuinfo);
			$this->smarty->assign('parentmenu',$parentmenu);
			$this->smarty->display('menu_edit.tpl');
		}

		public function del()
		{
			$menuid = $this->input->get('menuid');
			if(!$menuid) message('未取到MenuID');

			$ret = $this->menum->del_menu_by_menuid($menuid);
			if($ret) message('删除成功！','menu/lists');
			exit;
		}

		public function distribute()
		{
			$userid = $this->input->get('userid');
			if(!$userid) message('未取到UserID！');
			
			$post = $this->input->post();
			if($post['submit'])
			{
				$data['menurights'] = implode(',',$post['menu']);
				$ret = $this->menum->distribute_menu_by_userid($userid,$data);
				if($ret) message('分配成功！','user/lists');
				exit;
			}

			$menulist = $this->menum->get_menulist();
			
			$usermenu = array();
			$ret = $this->menum->get_menu_by_userid($userid);
			$ret && $usermenu = explode(',', $ret);
			$this->smarty->assign('userid',$userid);
			$this->smarty->assign('menulist',$menulist);
			$this->smarty->assign('usermenu',$usermenu);
			$this->smarty->display('menu_distribute.tpl');
		}

		public function get_childmenu_by_ajax()
		{
			$callback = $this->input->get('callback');
			$parentid = $this->input->get('parentid');

			$data = array('childmenu'=>'','parentmenu'=>'0');
			$data['childmenu'] = $this->menum->get_childmenu_by_parentid($parentid);
			$this->rightsm->get_rights_by_menuid($parentid) && $data['parentmenu'] = 1;

			echo $callback . '(' . json_encode($data,true) . ')';
		}

	}
