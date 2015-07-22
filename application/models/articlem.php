<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Articlem extends CI_Model
	{

		// 文章列表
		public function get_articlelist_by_gameid($gameid = false,$type = false)
		{
			if ($type)
			{
				$ret = $this->db02->select()->from('SITE_ARTICLE')->where('gameid',$gameid)->where('type',$type)->where('status',1)->order_by('id','desc')->get()->result_array();
			} else {
				$ret = $this->db02->select()->from('SITE_ARTICLE')->where('gameid',$gameid)->where('status',1)->order_by('id','desc')->get()->result_array();
			}
			if (!empty($ret))
			{
				return $ret;
			} else {
				return false;
			}
		}

		// 获取一篇文章
		public function get_article_by_id($id)
		{
			return $this->db02->select()->from('SITE_ARTICLE')->where('id',$id)->get()->row_array();
		}

		// 获取文章id
		public function get_articleid_by_gameid($gameid)
		{
			return $this->db02->select('id,type,time')->from('SITE_ARTICLE')->where('gameid',$gameid)->get()->result_array();
		}

		// 添加一篇文章
		public function insert_article($data)
		{
			$this->db02->insert('SITE_ARTICLE', $data);
			return $this->db02->insert_id();
		}

		// 编辑一篇文章
		public function update_article($data,$id)
		{
			$this->db02->where ('id', $id);
			return $this->db02->update('SITE_ARTICLE', $data);
		}

		// 删除一篇文章
		public function del_article_by_id($id)
		{
			$this->db02->where('id', $id);
			return $this->db02->delete('SITE_ARTICLE');
		}



	}