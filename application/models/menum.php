<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Menum extends CI_Model
	{
		public function get_menulist()
		{
			$menu_parent = $this->db01->select()->from('admin_menu')->where('parentid',0)->order_by('menuid', 'asc')->get()->result_array();
			if($menu_parent)
			{
				$menulist = array();
				foreach($menu_parent as $k=>$v)
				{
					$menulist[$k]['parent'] = $v;
					$menulist[$k]['child'] = $this->get_childmenu_by_parentid($v['menuid']);	
				}
				return $menulist;
			}else{
				return false;
			}
		}

		public function get_menulist_by_user($usermenu)
		{
			$menu_parent = $this->db01->select()->from('admin_menu')->where('parentid',0)->where_in('menuid',$usermenu)->order_by('menuid', 'asc')->get()->result_array();
			if($menu_parent)
			{
				$menulist = array();
				foreach($menu_parent as $k=>$v)
				{
					$menulist[$k]['parent'] = $v;
					$menulist[$k]['child'] = $this->get_childmenu_by_user($v['menuid'],$usermenu);	
				}
				return $menulist;
			}else{
				return false;
			}
		}

		public function get_parentmenu()
		{
			$ret = $this->db01->select('menuid,menuname')->from('admin_menu')->where('parentid',0)->get()->result_array();
			if($ret)
				return $ret; 
			else
				return false;
		}

		public function get_childmenu_by_parentid($parentid)
		{
			$ret = $this->db01->select()->from('admin_menu')->where('parentid',$parentid)->get()->result_array();
			if($ret)
				return $ret; 
			else
				return false;
		}

		public function get_childmenu_by_user($parentid,$usermenu)
		{
			$ret = $this->db01->select()->from('admin_menu')->where('parentid',$parentid)->where_in('menuid',$usermenu)->get()->result_array();
			if($ret)
				return $ret; 
			else
				return false;
		}

		public function get_menu_by_menuid($menuid)
		{
			$ret = $this->db01->select()->from('admin_menu')->where('menuid',$menuid)->get()->result_array();
			if($ret)
				return $ret[0]; 
			else
				return false;
		}

		public function get_menu_by_userid($userid)
		{
			$ret = $this->db01->select('menurights')->from('admin_user')->where('userid',$userid)->get()->result_array();
			if($ret)
			{
				return $ret[0]['menurights'];
			}else{
				return false;
			}
		}

		public function distribute_menu_by_userid($userid,$data)
		{
			$this->db01->where('userid', $userid);
			return $this->db01->update('admin_user', $data);
		}

		public function insert_menu($menudata)
		{
			return $this->db01->insert('admin_menu', $menudata);
		}

		public function edit_menu_by_menuid($menuid,$menudata)
		{
			$this->db01->where('menuid', $menuid);
			return $this->db01->update('admin_menu', $menudata);
		}

		public function del_menu_by_menuid($menuid)
		{
			$this->db01->where('menuid', $menuid);
			return $this->db01->delete('admin_menu');
		}



	}