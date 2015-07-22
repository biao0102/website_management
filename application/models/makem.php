<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Makem extends CI_Model
	{
		public function get_game_by_id($id)
		{
			return $this->db02->select()->from('SITE_GAMELIST')->where('id',$id)->get()->row_array();
		}

		public function get_version_by_id($id)
		{
			return $this->db02->select()->from('SITE_VERSION')->where('id',$id)->get()->row_array();
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

		public function get_articlelist_by_type($gameid = false,$type = false,$num = 5)
		{
			if (!$gameid || empty($type) || !$num) return false;
			return $this->db02->select('id,type,title,url,wapurl,outlink,image,time')->from('SITE_ARTICLE')->where('gameid',$gameid)->where_in('type',$type)->where('status',1)->order_by('sort','desc')->order_by('time','desc')->limit($num)->get()->result_array();
		}

		// 版本ID获取文章模板
		public function get_articletpl_by_vid($vid)
		{
			return $this->db02->select()->from('SITE_TEMPLATE')->where('vid',$vid)->where('type',3)->where('status',1)->limit(1)->get()->row_array();
		}

		public function get_templatelist($vid)
		{
			return $this->db02->select()->from('SITE_TEMPLATE')->where('vid',$vid)->where('status !=',0)->get()->result_array();
		}


		public function get_version_online()
		{
			return $this->db02->select()->from('SITE_VERSION')->where('status','1')->order_by('id','desc')->get()->row_array();
		}

		public function get_articleid_by_gameid($gameid)
		{
			return $this->db02->select('id,type,time')->from('SITE_ARTICLE')->where('gameid',$gameid)->get()->result_array();
		}

		public function get_article_by_id($id)
		{
			return $this->db02->select()->from('SITE_ARTICLE')->where('id',$id)->get()->row_array();
		}

		// 编辑一篇文章
		public function update_article($id,$data)
		{
			$this->db02->where ('id', $id);
			return $this->db02->update('SITE_ARTICLE', $data);
		}

	}