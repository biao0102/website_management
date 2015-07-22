<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Versionm extends CI_Model
	{
		public function get_versionlist($gameid)
		{
			return $this->db02->select()->from('SITE_VERSION')->where('gameid',$gameid)->get()->result_array();
		}

		public function insert_version($data)
		{
			$this->db02->insert('SITE_VERSION', $data);
			return $this->db02->insert_id();
		}

		public function get_version_by_id($id)
		{
			return $this->db02->select()->from('SITE_VERSION')->where('id',$id)->get()->row_array();
		}

		public function edit_version_by_id($id,$data)
		{
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_VERSION', $data);
		}

		public function del_version_by_id($id)
		{
			$data['status'] = 0;
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_VERSION', $data);
		}


	}