<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Typem extends CI_Model
	{

		// 获取文章类型
		public function gettype($gameid)
		{
			if(!$gameid) return false;

			$typestr = $this->get_game_type($gameid);
			$typeArr = explode(',', $typestr);
			$parenttype = $this->get_parenttype($typeArr);
			return $parenttype;
		}

		public function get_game_type($gameid)
		{
			$ret = $this->db02->select('type')->from('SITE_GAMELIST')->where('id',$gameid)->get()->row_array();
			return $ret['type'];
		}

		public function get_typelist_by_typeid($typeArr)
		{
			$ret = $this->db02->select()->from('SITE_TYPE')->where_in('typeid',$typeArr)->where('status',1)->get()->result_array();
			return $ret;
		}

		public function get_typelist()
		{
			$type_parent = $this->db02->select()->from('SITE_TYPE')->where('ctype','0')->where('status',1)->get()->result_array();
			if($type_parent)
			{
				$typelist = array();
				foreach($type_parent as $k=>$v)
				{
					$typelist[$k]['parent'] = $v;
					$typelist[$k]['child'] = $this->get_childtype_by_typeid($v['typeid']);	
				}
				return $typelist;
			}else{
				return false;
			}
		}


		public function get_type_by_typeid($typeid)
		{
			$ret = $this->db02->select()->from('SITE_TYPE')->where('typeid',$typeid)->where('status',1)->get()->result_array();
			return $ret[0]; 
		}

		public function get_childtype_by_typeid($typeid)
		{
			$ret = $this->db02->select()->from('SITE_TYPE')->where('ctype',$typeid)->where('status',1)->get()->result_array();
			if ($ret)
			{
				return $ret;
			} else {
				return false;
			}
			 
		}

		public function get_parenttype($gametype = '')
		{
			if($gametype)
			{
				$ret = $this->db02->select()->from('SITE_TYPE')->where('ctype',0)->where('status',1)->where_in('typeid',$gametype)->get()->result_array();
			}else{
				$ret = $this->db02->select()->from('SITE_TYPE')->where('ctype',0)->where('status',1)->get()->result_array();
			}
			return $ret; 
		}

		public function insert_type($typedata)
		{
			return $this->db02->insert('SITE_TYPE', $typedata);
		}		

		public function edit_type_by_typeid($typeid,$typedata)
		{
			$this->db02->where('typeid', $typeid);
			return $this->db02->update('SITE_TYPE', $typedata);
		}

		public function del_type_by_typeid($typeid)
		{
			$this->db02->where ('typeid', $typeid);
			$this->db02->set ('status', 0);
			$this->db02->update('SITE_TYPE');

			$this->db02->where ('ctype', $typeid);
			$this->db02->set ('status', 0);
			$this->db02->update('SITE_TYPE');
		}

		public function get_type_by_gameid($gameid)
		{
			$ret = $this->db02->select('type')->from('SITE_GAMELIST')->where('id',$gameid)->get()->row_array();
			return $ret['type'];
		}

		public function get_typename_by_id($typeid)
		{
			$ret = $this->db02->select('typename')->from('SITE_TYPE')->where('typeid',$typeid)->get()->row_array();
			return $ret['typename'];
		}	

		public function set_type_by_gameid($gameid,$data)
		{
			$this->db02->where('id', $gameid);
			return $this->db02->update('SITE_GAMELIST', $data);
		}



	}