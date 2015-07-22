 <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Card extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('cardm');
		}

		// ȫְ����--�����б�
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

		// ȫְ����--��ӿ���
		public function qzgs_add()
		{
			$post = $this->input->post();
			if ($post)
			{
				unset($post['submit']);

				if (!$post['name']) message('�������Ʋ���Ϊ��');
				if (!$post['type']) message('��ѡ��ְҵ����');
				if (!$post['color']) message('��ѡ����Ʒ��');
				if (!$post['career']) message('ְҵ���Ʋ���Ϊ��');
				if (!$post['star']) message('���ʲ���Ϊ��');
				if (!$post['team']) message('ս�Ӳ���Ϊ��');
				if (!$post['operator']) message('�����߲���Ϊ��');
				if (!$post['life']) message('����ֵ����Ϊ��');
				if (!$post['physics']) message('����ֵ����Ϊ��');
				if (!$post['magic']) message('ħ��ֵ����Ϊ��');
				if (!$post['resistance']) message('����ֵ����Ϊ��');
				if (!$post['defense']) message('����ֵ����Ϊ��');
				if (!$post['avoid']) message('����ֵ����Ϊ��');
				if (!$post['parry']) message('��ֵ����Ϊ��');
				if (!$post['introduce']) message('���ƽ��ܲ���Ϊ��');
				if (!$post['skill']) message('��������Ϊ��');
				if (!$post['sicon']) 
				{
					message('icon����Ϊ��');
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
					message('��ͼ����Ϊ��');
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
					message('��ӳɹ���','card/qzgs_list');
				} else {
					message('���ʧ�ܣ�','card/qzgs_list');
				}
			}

			$career = $this->qzgs_career();
			$color = $this->qzgs_color();		
			$this->smarty->assign('career',$career);
			$this->smarty->assign('color',$color);
			$this->smarty->display('card_qzgs_add.tpl');
		}

		// ȫְ����--�༭����
		public function qzgs_edit()
		{
			$id = $this->input->get('id');
			if (!id) message('��ȡ��������ID��','card/qzgs_list');
			$post = $this->input->post();
			if ($post)
			{
				unset($post['submit']);

				if (!$post['name']) message('�������Ʋ���Ϊ��');
				if (!$post['type']) message('��ѡ��ְҵ����');
				if (!$post['color']) message('��ѡ����Ʒ��');
				if (!$post['career']) message('ְҵ���Ʋ���Ϊ��');
				if (!$post['star']) message('���ʲ���Ϊ��');
				if (!$post['team']) message('ս�Ӳ���Ϊ��');
				if (!$post['operator']) message('�����߲���Ϊ��');
				if (!$post['life']) message('����ֵ����Ϊ��');
				if (!$post['physics']) message('����ֵ����Ϊ��');
				if (!$post['magic']) message('ħ��ֵ����Ϊ��');
				if (!$post['resistance']) message('����ֵ����Ϊ��');
				if (!$post['defense']) message('����ֵ����Ϊ��');
				if (!$post['avoid']) message('����ֵ����Ϊ��');
				if (!$post['parry']) message('��ֵ����Ϊ��');
				if (!$post['introduce']) message('���ƽ��ܲ���Ϊ��');
				if (!$post['skill']) message('��������Ϊ��');

				if (!$post['sicon']) 
				{
					message('icon����Ϊ��');
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
					message('��ͼ����Ϊ��');
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
					message('�༭�ɹ���','card/qzgs_list');
				} else {
					message('�༭ʧ�ܣ�','card/qzgs_list');
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

		// ȫְ����--ɾ������
		public function qzgs_del()
		{
			$id = $this->input->get('id');
			if (!$id) message('��ȡ��������ID��','card/qzgs_list');
			$ret = $this->cardm->del_qzgscard_by_id($id);
			if ($ret)
			{
				message('ɾ���ɹ���','card/qzgs_list');
			} else {
				message('ɾ��ʧ�ܣ�','card/qzgs_list');
			}

		}

		// ȫְ����--����Ʒ�ʷ���
		public function qzgs_color($value = false)
		{
			$color = array(
							1 => '��ɫ',
							2 => '��ɫ',
							3 => '��ɫ',
							4 => '��ɫ',
							5 => '��ɫ',
						);
			if ($value && $color[$value])
			{
				return $color[$value];
			} else {
				return $color;
			}
		}

		// ȫְ����--����ְҵ����
		public function qzgs_career($value = false)
		{
			$career = array(
							1 => '��ʦϵ',
							2 => 'ǹ��ϵ',
							3 => '��ҹϵ',
							4 => '��ϵ',
							5 => 'ʥְϵ',
						);
			if ($value && $career[$value])
			{
				return $career[$value];
			} else {
				return $career;
			}
		}


	}