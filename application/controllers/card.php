 <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Card extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('cardm');
		}

		// 全职高手--卡牌列表
		public function qzgs_list()
		{
			$list = $this->cardm->get_qzgs_cardlist();
			if ($list)
			{
				foreach ($list as $k => $v) 
				{
					$list[$k]['type_name'] = $this->qzgs_career($v['type']);
					$list[$k]['color_name'] = $this->qzgs_color($v['color']);
				}				
			}
			$this->smarty->assign('list',$list);
			$this->smarty->display('card_qzgs_list.tpl');
		}

		// 全职高手--添加卡牌
		public function qzgs_add()
		{
			$post = $this->input->post();
			if ($post)
			{
				unset($post['submit']);

				if (!$post['name']) message('卡牌名称不能为空');
				if (!$post['type']) message('请选择职业类型');
				if (!$post['color']) message('请选择卡牌品质');
				if (!$post['career']) message('职业名称不能为空');
				if (!$post['star']) message('资质不能为空');
				if (!$post['team']) message('战队不能为空');
				if (!$post['operator']) message('操作者不能为空');
				if (!$post['life']) message('生命值不能为空');
				if (!$post['physics']) message('物理值不能为空');
				if (!$post['magic']) message('魔法值不能为空');
				if (!$post['resistance']) message('抗性值不能为空');
				if (!$post['defense']) message('防御值不能为空');
				if (!$post['avoid']) message('闪避值不能为空');
				if (!$post['parry']) message('格挡值不能为空');
				if (!$post['introduce']) message('卡牌介绍不能为空');
				if (!$post['skill']) message('主动技能为空');
				if (!$post['sicon']) 
				{
					message('icon不能为空');
				} else {
					foreach(explode('"',$post['sicon']) as $v)
					{
						if (strpos($v,'http:') === 0)
						{
							$post['sicon'] = $v;
							break;
						} else {
							$post['sicon'] = '';
						}
					}	
				}
				if (!$post['bicon'])
				{
					message('大图不能为空');
				} else {
					foreach(explode('"',$post['bicon']) as $v)
					{
						if (strpos($v,'http:') === 0)
						{
							$post['bicon'] = $v;
							break;
						} else {
							$post['bicon'] = '';
						}
					}
				}
				$post['time'] = date('Y-m-d H:i:s');

				$ret = $this->cardm->insert_qzgs_card($post);
				if ($ret)
				{
					message('添加成功！','card/qzgs_list');
				} else {
					message('添加失败！','card/qzgs_list');
				}
			}

			$career = $this->qzgs_career();
			$color = $this->qzgs_color();		
			$this->smarty->assign('career',$career);
			$this->smarty->assign('color',$color);
			$this->smarty->display('card_qzgs_add.tpl');
		}

		// 全职高手--编辑卡牌
		public function qzgs_edit()
		{
			$id = $this->input->get('id');
			if (!id) message('获取不到卡牌ID！','card/qzgs_list');
			$post = $this->input->post();
			if ($post)
			{
				unset($post['submit']);

				if (!$post['name']) message('卡牌名称不能为空');
				if (!$post['type']) message('请选择职业类型');
				if (!$post['color']) message('请选择卡牌品质');
				if (!$post['career']) message('职业名称不能为空');
				if (!$post['star']) message('资质不能为空');
				if (!$post['team']) message('战队不能为空');
				if (!$post['operator']) message('操作者不能为空');
				if (!$post['life']) message('生命值不能为空');
				if (!$post['physics']) message('物理值不能为空');
				if (!$post['magic']) message('魔法值不能为空');
				if (!$post['resistance']) message('抗性值不能为空');
				if (!$post['defense']) message('防御值不能为空');
				if (!$post['avoid']) message('闪避值不能为空');
				if (!$post['parry']) message('格挡值不能为空');
				if (!$post['introduce']) message('卡牌介绍不能为空');
				if (!$post['skill']) message('主动技能为空');

				if (!$post['sicon']) 
				{
					message('icon不能为空');
				} else {
					foreach(explode('"',$post['sicon']) as $v)
					{
						if (strpos($v,'http:') === 0)
						{
							$post['sicon'] = $v;
							break;
						} else {
							$post['sicon'] = '';
						}
					}	
				}

				if (!$post['bicon'])
				{
					message('大图不能为空');
				} else {
					foreach(explode('"',$post['bicon']) as $v)
					{
						if (strpos($v,'http:') === 0)
						{
							$post['bicon'] = $v;
							break;
						} else {
							$post['bicon'] = '';
						}
					}
				}

				$ret = $this->cardm->edit_qzgscard_by_id($id,$post);
				if ($ret)
				{
					message('编辑成功！','card/qzgs_list');
				} else {
					message('编辑失败！','card/qzgs_list');
				}
			}
			$card = $this->cardm->get_qzgscard_by_id($id,$post);

			if ($card['sicon']) $card['sicon'] = '<img src="' . $card['sicon'] . '">';
			if ($card['bicon']) $card['bicon'] = '<img src="' . $card['bicon'] . '">';

			$career = $this->qzgs_career();
			$color = $this->qzgs_color();		
			$this->smarty->assign('career',$career);
			$this->smarty->assign('color',$color);
			$this->smarty->assign('id',$id);
			$this->smarty->assign('data',$card);
			$this->smarty->display('card_qzgs_edit.tpl');
		}

		// 全职高手--删除卡牌
		public function qzgs_del()
		{
			$id = $this->input->get('id');
			if (!$id) message('获取不到卡牌ID！','card/qzgs_list');
			$ret = $this->cardm->del_qzgscard_by_id($id);
			if ($ret)
			{
				message('删除成功！','card/qzgs_list');
			} else {
				message('删除失败！','card/qzgs_list');
			}

		}

		// 全职高手--卡牌品质分类
		public function qzgs_color($value = false)
		{
			$color = array(
							1 => '橙色',
							2 => '紫色',
							3 => '蓝色',
							4 => '绿色',
							5 => '白色',
						);
			if ($value && $color[$value])
			{
				return $color[$value];
			} else {
				return $color;
			}
		}

		// 全职高手--卡牌职业分类
		public function qzgs_career($value = false)
		{
			$career = array(
							1 => '法师系',
							2 => '枪手系',
							3 => '暗夜系',
							4 => '格斗系',
							5 => '圣职系',
						);
			if ($value && $career[$value])
			{
				return $career[$value];
			} else {
				return $career;
			}
		}


	}