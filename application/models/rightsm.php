<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Rightsm extends CI_Model
	{
	
		public function get_rightslist()
		{
			$rights_parent = $this->db01->select('admin_rights.*,admin_menu.menuname')->from('admin_rights')->where('admin_rights.parentid',0)->order_by('admin_rights.rightsid', 'asc')->join('admin_menu', 'admin_rights.menuid = admin_menu.menuid')->get()->result_array();
			if($rights_parent)
			{
				$rightslist = array();
				foreach($rights_parent as $k=>$v)
				{
					$rightslist[$k]['parent'] = $v;
					$rightslist[$k]['child'] = $this->get_rights_by_parentid($v['menuid']);	
				}
				return $rightslist;
			}else{
				return false;
			}
		}

		public function get_rights_by_parentid($parentid)
		{
			$ret = $this->db01->select('admin_rights.*,admin_menu.menuname')->from('admin_rights')->where('admin_rights.parentid',$parentid)->join('admin_menu', 'admin_rights.menuid = admin_menu.menuid')->get()->result_array();
			if($ret)
			{
				return $ret; 
			}else{
				return false;
			}
		}

		public function get_rights_by_menuid($menuid)
		{
			$ret = $this->db01->select()->from('admin_rights')->where('menuid',$menuid)->get()->result_array();
			if($ret)
			{
				return $ret; 
			}else{
				return false;
			}
		}

		public function get_rights_by_rightsid($rightsid)
		{
			$ret = $this->db01->select()->from('admin_rights')->where('rightsid',$rightsid)->get()->result_array();
			if($ret)
			{
				return $ret[0]; 
			}else{
				return false;
			}
		}

		public function insert_rights($rightsdata)
		{
			return $this->db01->insert('admin_rights', $rightsdata);
		}

		public function edit_rights_by_rightsid($rightsid,$rightsdata)
		{
			$this->db01->where('rightsid', $rightsid);
			return $this->db01->update('admin_rights', $rightsdata);
		}

		public function get_rights_by_user($rights_arr)
		{
			$ret = $this->db01->select()->from('admin_rights')->where_in('rightsid',$rights_arr)->get()->result_array();
			if($ret)
			{
				return $ret; 
			}else{
				return false;
			}
		}

		public function get_menuid_by_action($action)
		{
			$ret = $this->db01->select('menuid,parentid')->from('admin_rights')->like('action',$action,'both')->get()->result_array();
			if($ret)
				return $ret[0]; 
			else
				return false;
		}

		public function distribute_rights_by_userid($userid,$data)
		{
			$this->db01->where('userid', $userid);
			return $this->db01->update('admin_user', $data);
		}

		public function get_rights_by_userid($userid)
		{
			$ret = $this->db01->select('actionrights')->from('admin_user')->where('userid',$userid)->get()->result_array();
			if($ret)
			{
				return $ret[0]['actionrights'];
			}else{
				return false;
			}
		}
		
		public function get_games_by_userid($userid)
		{
			$ret = $this->db01->select('gamerights')->from('admin_user')->where('userid',$userid)->get()->result_array();
			if($ret)
			{
				return $ret[0]['gamerights'];
			}else{
				return false;
			}
		}
	}