<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Userm extends CI_Model
	{
		
		public function get_user_by_username($username)
		{
			return $this->db01->select()->from('admin_user')->where('username',$username)->get()->row_array();
		}

		public function get_user_by_userid($userid)
		{
			return $this->db01->select()->from('admin_user')->where('userid',$userid)->get()->row_array();
		}

		public function insert_user($userdata)
		{
			$this->db01->insert('admin_user', $userdata);
			return $this->db01->insert_id();
		}

		public function update_logintime_by_username($username,$userdata)
		{
			$this->db01->where('username', $username);
			$this->db01->update('admin_user', $userdata);
		}

		public function get_userlist($keyword)
		{
			if ($keyword)
			{
				return $this->db01->select()->from('admin_user')->like('username',$keyword)->order_by('userid', 'asc')->get()->result_array();
			} else {
				return $this->db01->select()->from('admin_user')->order_by('userid', 'asc')->get()->result_array();
			}
		}

		public function edit_user_by_userid($userid,$userdata)
		{
			$this->db01->where('userid', $userid);
			return $this->db01->update('admin_user', $userdata);
		}

	}