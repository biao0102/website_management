<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Templatem extends CI_Model
	{

		public function get_templatelist($gameid,$vid)
		{
			return $this->db02->select()->from('SITE_TEMPLATE')->where('gameid',$gameid)->where('vid',$vid)->get()->result_array();
		}

		public function insert_template($data)
		{
			$this->db02->insert('SITE_TEMPLATE', $data);
			return $this->db02->insert_id();
		}

		public function get_template_by_id($id)
		{
			return $this->db02->select()->from('SITE_TEMPLATE')->where('id',$id)->get()->row_array();
		}

		public function edit_template_by_id($id,$data)
		{
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_TEMPLATE', $data);
		}

		public function del_template_by_id($id)
		{
			$data['status'] = 0;
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_TEMPLATE', $data);
		}

		public function get_splist_by_vid($gameid,$vid)
		{
			return $this->db02->select('id,vid,gameid,name,filename')->from('SITE_TEMPLATE')->where('gameid',$gameid)->where('vid',$vid)->where('type',2)->where('status',1)->get()->result_array();
		}

	}