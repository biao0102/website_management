<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Cardm extends CI_Model
	{

		// 全职高手--卡牌列表
		public function get_qzgs_cardlist()
		{
			return $this->db02->select()->from('SITE_CARD_QZGS')->order_by('time','desc')->get()->result_array();
		}

		// 全职高手--添加卡牌
		public function insert_qzgs_card($data)
		{
			$this->db02->insert('SITE_CARD_QZGS', $data);
			return $this->db02->insert_id();
		}


		// 全职高手--获取一张卡牌
		public function get_qzgscard_by_id($id)
		{
			return  $this->db02->select()->from('SITE_CARD_QZGS')->where('id',$id)->get()->row_array();
		}

		// 全职高手--编辑一张卡牌
		public function edit_qzgscard_by_id($id,$data)
		{
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_CARD_QZGS', $data);
		}

		// 全职高手--删除一张卡牌
		public function del_qzgscard_by_id($id)
		{
			$data['status'] = 0;
			$this->db02->where('id', $id);
			return $this->db02->update('SITE_CARD_QZGS', $data);
		}

	}