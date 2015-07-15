 <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Game extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('gamem');
		}

		// 游戏列表
		public function gamelist()
		{

			if(USERLV == 1)
			{
				$gamelist = $this->gamem->get_gamelist();
			} else {
				$usergame = explode(',', $this->rightsm->get_games_by_userid(USERID));
				$gamelist = $this->gamem->get_gamelist($usergame);
			}
			
			$this->smarty->assign('gamelist',$gamelist);
			$this->smarty->display('game_list.tpl');
		}

		// 添加一个游戏
		public function addgame()
		{
			$post = $this->input->post();
			if ($post['submit'])
			{
				unset($post['submit']);
				if (empty($post['name']) || empty($post['domain']) || empty($post['status'])) message('提交失败！','game/gamelist');
				$post['time'] = date('Y-m-d H:i:s');
				$ret = $this->gamem->insert_game($post);
				if ($ret) 
				{
					$path = '/data/www/html/site/' . $post['domain'];
					if (!is_dir($path))
					{
						@mkdir($path, 0755);
						@chmod($path, 0777);
					}

					if (is_dir($path)) 
					{
						$webpath = $path . '/web';
						if (!file_exists($webpath))
						{
							@mkdir($webpath, 0755);
							@chmod($webpath, 0777);
						}
						$weblistpath = $webpath . '/list';
						if (!file_exists($weblistpath))
						{
							@mkdir($weblistpath, 0755);
							@chmod($weblistpath, 0777);
						}
						$webnewspath = $webpath . '/news';
						if (!file_exists($webnewspath))
						{
							@mkdir($webnewspath, 0755);
							@chmod($webnewspath, 0777);
						}

						$wappath = $path . '/wap';
						if (!file_exists($wappath))
						{
							@mkdir($wappath, 0755);
							@chmod($wappath, 0777);
						}
						$waplistpath = $wappath . '/list';
						if (!file_exists($waplistpath))
						{
							@mkdir($waplistpath, 0755);
							@chmod($waplistpath, 0777);
						}
						$wapnewspath = $wappath . '/news';
						if (!file_exists($wapnewspath))
						{
							@mkdir($wapnewspath, 0755);
							@chmod($wapnewspath, 0777);
						}
					}
					message('添加成功！','game/gamelist');
				}
				exit;
			}
			$this->smarty->display('game_add.tpl');
		}

		// 编辑一个游戏信息
		public function editgame()
		{
			$id = $this->input->get('id');

			if (!intval($id)) message('ID不能为空!','game/gamelist');

			$post = $this->input->post();
			if ($post['submit'])
			{
				unset($post['submit']);
				if (empty($post['name']) || empty($post['domain'])) message('提交失败！','game/gamelist');
				$ret = $this->gamem->edit_game_by_id($id,$post);
				if ($ret) 
				{
					$path = '/data/www/html/site/' . $post['domain'];
					if (!file_exists($path))
					{
						@mkdir($path, 0755);
						@chmod($path, 0777);
					}

					if (file_exists($path))
					{
						$webpath = $path . '/web';
						if (!file_exists($webpath))
						{
							@mkdir($webpath, 0755);
							@chmod($webpath, 0777);
						}
						$weblistpath = $webpath . '/list';
						if (!file_exists($weblistpath))
						{
							@mkdir($weblistpath, 0755);
							@chmod($weblistpath, 0777);
						}
						$webnewspath = $webpath . '/news';
						if (!file_exists($webnewspath))
						{
							@mkdir($webnewspath, 0755);
							@chmod($webnewspath, 0777);
						}

						$wappath = $path . '/wap';
						if (!file_exists($wappath))
						{
							@mkdir($wappath, 0755);
							@chmod($wappath, 0777);
						}
						$waplistpath = $wappath . '/list';
						if (!file_exists($waplistpath))
						{
							@mkdir($waplistpath, 0755);
							@chmod($waplistpath, 0777);
						}
						$wapnewspath = $wappath . '/news';
						if (!file_exists($wapnewspath))
						{
							@mkdir($wapnewspath, 0755);
							@chmod($wapnewspath, 0777);
						}
					}
					message('编辑成功！','game/gamelist');
				}
				exit;
			}

			$gameinfo = $this->gamem->get_game_by_id($id);
			$this->smarty->assign('id',$id);
			$this->smarty->assign('data',$gameinfo);
			$this->smarty->display('game_edit.tpl');
		}

		// 删除一个游戏
		public function delgame()
		{
			$id = $this->input->get('id');
			if (!intval($id)) message('ID不能为空!','game/gamelist');
			$ret = $this->gamem->del_game_by_id($id);
			if ($ret) message('删除成功！','game/gamelist');
			exit;
		}


	
		// 设置SEO
		public function setseo()
		{
			$gameid = $this->input->get('gameid');
			if (!$gameid) message('游戏ID不能为空！','game/gamelist');
			
			$post = $this->input->post();
			if($post['submit'])
			{
				unset($post['submit']);
				$ret = $this->gamem->set_seo_by_gameid($gameid,$post);
				if($ret) message('设置成功！','article/articlelist?gameid='.$gameid);
				exit;
			}

			$seo = $this->gamem->get_seo_by_gameid($gameid);

			$this->smarty->assign('seo',$seo);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->display('game_setseo.tpl');
		}

	}
