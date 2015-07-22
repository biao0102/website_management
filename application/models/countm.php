<?php

	if( ! defined("BASEPATH"))  exit("No direct script access allowed");

	class Countm extends CI_Model
	{

		// 游戏列表
		public function count_pv($domain, $typeArr, $stime, $etime)
		{
			$ret = $this->db02->select()->from('GAME_DOWNCOUNT_'.$domain)->where_in('type',$typeArr)->where('time >= ',$stime)->where('time <= ',$etime)->get()->result_array();

			return $ret;
		}

		public function count_ip($domain, $typeArr, $stime, $etime)
		{
			$ret = $this->db02->select(distinct('ip'))->from('GAME_DOWNCOUNT_'.$domain)->where_in('type',$typeArr)->where('time >= ',$stime)->where('time <= ',$etime)->get()->result_array();

			return $ret;
		}

	}