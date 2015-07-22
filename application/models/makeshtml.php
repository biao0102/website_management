<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Makeshtml extends CI_Model
	{

		// 取游戏配置
		public function get_rule_by_gameid($gameid)
		{
			if(USERLV == 1)
			{
				$ret = $this->db02->select()->from('SITE_GAMELIST')->where('status',1)->get()->result_array();
			} else {
				$ret = $this->db02->select()->from('SITE_GAMELIST')->where('status',1)->where_in('id',$usergame)->get()->result_array();
			}
			return $ret;
		}

		// 获取游戏二级域名
		public function get_domain_by_id($id)
		{
			$ret = $this->db02->select('domain')->from('SITE_GAMELIST')->where('id',$id)->get()->row_array();
			if (!empty($ret))
			{
				return $ret['domain']; 
			} else {
				return false;
			}
		}

		// 添加一个游戏
		public function insert_game($data)
		{
			$this->db02->insert('SITE_GAMELIST', $data);
			return $this->db02->insert_id();
		}


		// 获取一个游戏信息
		public function get_game_by_id($id)
		{
			$ret = $this->db02->select()->from('SITE_GAMELIST')->where('id',$id)->get()->row_array();
			if (!empty($ret))
			{
				return $ret; 
			} else {
				return false;
			}
		}

		// 编辑一个游戏信息
		public function edit_game_by_id($id,$data)
		{
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_GAMELIST', $data);
		}

		// 删除一个游戏
		public function del_game_by_id($id)
		{
			$data['status'] = 0;
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_GAMELIST', $data);
		}



		// SEO管理
		public function set_seo_by_gameid($gameid,$data)
		{
			$this->db02->where('id', $gameid);
			return $this->db02->update('SITE_GAMELIST', $data);
		}

		public function get_seo_by_gameid($gameid)
		{
			$ret = $this->db02->select('title,keywords,description')->from('SITE_GAMELIST')->where('id',$gameid)->get()->row_array();
			return $ret;
		}
	}