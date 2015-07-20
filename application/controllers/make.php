 <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Make extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('makem');
		}

		// 生成单个列表页模板
		public function make_one_tpl()
		{
			$get = $this->input->get();
			$tid = $get['tid'];			// 模板ID
			$vid = $get['vid'];			// 版本ID
			$gameid = $get['gameid'];	// 游戏ID

			if (!$gameid || !$tid || !$vid)
			{
				message('参数不全~');
			}

			$game_info = $this->makem->get_game_by_id($gameid);				// 游戏信息
			$version_info = $this->makem->get_version_by_id($vid);		// 版本信息
			$template_info = $this->makem->get_template_by_id($tid);	// 模板信息

			if ($template_info['status'] != 1)
			{
				message('模板已失效~ 请重新编辑');
			}

			$template = $this->replace_tag($template_info['content']);		// 替换自定义标签

			// 版本控制
			if ($version_info['status'] == 1) 	// 上线
			{
				$version = 'site';
			} else if ($version_info['status'] == 2) { 	// 测试
				$version = 'site_offline';
			} else {	// 不生效
				message('该版本已失效，请重新编辑~');
			}

			// 平台目录设置
			if ($version_info['plat'] == 2)	// 移动端
			{
				$plat = 'wap';
			} else { 	// PC端
				$plat = 'web';
			}

			// 文件生成路径
			$dirpath = SITE_BASE_DIR . $version . '/' . $game_info['domain'] . '/' . $plat . '/list';

			//debug($dirpath);
			//$dirpath = '/var/www/html/site_offline/xzzh/';
			// 创建目录，生成文件
			if (!is_dir($dirpath))
			{
				mkdir($dirpath, 0777, true);	//php 5.0+支持递归创建目录
				@chmod($dirpath, 0777);
			} 
			$filepath = $dirpath . '/' . $template_info['filename'];
			if (file_put_contents($filepath,$template))
			{
				$data['url'] = 'http://' . $game_info['domain'] . '.feiliu.com/' . $plat . '/list/' . $template_info['filename'];
				$ret = $this->makem->edit_template_by_id($tid,$data);
				if ($ret)
				{
					message('生成成功~');
				} else {
					message('生成失败~');
				}
			} else {
				message('生成失败~');
			}
		}


	
		// 生成所有列表页模板
		public function make_all_tpl()
		{
			$get = $this->input->get();
			$vid = $get['vid'];			// 版本ID
			$gameid = $get['gameid'];	// 游戏ID

			if (!$gameid || !$vid)
			{
				message('参数不全~');
			}

			$game_info = $this->makem->get_game_by_id($gameid);				// 游戏信息
			$version_info = $this->makem->get_version_by_id($vid);		// 版本信息
			$template_arr = $this->makem->get_templatelist($vid);		// 模板信息

			if ($template_arr)
			{
				foreach ($template_arr as $key => $value) 
				{

					if ($value['type'] == 2) continue;

					$template_info = $value;
					if ($template_info['status'] != 1)
					{
						message('模板已失效~ 请重新编辑');
					}

					$template = $this->replace_tag($template_info['content']);		// 替换自定义标签

					// 版本控制
					if ($version_info['status'] == 1) 	// 上线
					{
						$version = 'site';
					} else if ($version_info['status'] == 2) { 	// 测试
						$version = 'site_offline';
					} else {	// 不生效
						message('该版本已失效，请重新编辑~');
					}

					// 平台目录设置
					if ($version_info['plat'] == 2)	// 移动端
					{
						$plat = 'wap';
					} else { 	// PC端
						$plat = 'web';
					}

					// 文件生成路径
					$dirpath = SITE_BASE_DIR . $version . '/' . $game_info['domain'] . '/' . $plat . '/list';

					// 创建目录，生成文件
					if (!is_dir($dirpath))
					{
						mkdir($dirpath);
						@chmod($dirpath, 0777);
					} 
					$filepath = $dirpath . '/' . $template_info['filename'];
					if (file_put_contents($filepath,$template))
					{
						if ($version_info['status'] == 1)
						{
							$data['url'] = 'http://' . $game_info['domain'] . '.feiliu.com/' . $plat . '/list/' . $template_info['filename'];
						} else {
							$data['url'] = 'http://tpl.feiliu.com/' . $game_info['domain'] . '/' . $plat . '/list/' . $template_info['filename'];
						}
						
						
						$data['ismake'] = 1;
						$ret = $this->makem->edit_template_by_id($template_info['id'],$data);
						$ret && $isMakeID .= $template_info['id'] . '_';
					}
				}

				message('成功生成模板的ID为:'.trim($isMakeID,'_'), "template/lists?vid=$vid&gameid=$gameid");
			} else {
				message('生成失败', "template/lists?vid=$vid&gameid=$gameid");
			}
		}

		// 生成单篇文章
		public function make_one_article()
		{
			$get = $this->input->get();
		}


		// 生成所有文章
		public function make_all_article()
		{
			$get = $this->input->get();
			$gameid = $get['gameid'];
			$vid = $get['vid'];
			$source = $get['source'];		// 1为来自于文章列表，2为来自于模板
			
			if (!$gameid) message('获取不到游戏ID~');

			if ($source == 1)
			{
				$version_info = $this->makem->get_version_online();		// 线上版本信息
			} else {
				$version_info = $this->makem->get_version_by_id($vid);	// 版本信息
			}
			//debug($version_info);
			if (empty($version_info)) message('获取不到版本信息~');


			// 版本控制
			if ($version_info['status'] == 1) 	// 上线
			{
				$version = 'site';
			} else if ($version_info['status'] == 2) { 	// 测试
				$version = 'site_offline';
			} else {	// 不生效
				message('该版本已失效，请重新编辑~');
			}

			$template_info = $this->makem->get_articletpl_by_vid($version_info['id']);		// 文章模板信息
			$template = $template_info['content'];
			if (empty($template)) message('获取不到模板信息~');
			$template = $this->replace_tag($template);								// 替换自定义标签

			$game_info = $this->makem->get_game_by_id($gameid);						// 游戏信息
			if (empty($game_info)) message('获取不到游戏信息~');

			$article_list = $this->makem->get_articleid_by_gameid($gameid);			// 新闻列表
			if (empty($article_list)) message('获取不到文章列表~');

			foreach ($article_list as $k => $v) 
			{
				$article = $this->makem->get_article_by_id($v['id']);
				if ($article['content'] == '')  continue;
				$result = $template;
				
				while (preg_match_all("/<{([\w\W]*?)}>/i", $result, $data))
				{
					$tag = end(explode('.', $data[1][0]));
					$replace = $article[$tag] ? $article[$tag] : 'undefine';
					$result = str_replace('<{$article.'.$tag.'}>',$replace,$result);
				}

				// 平台目录设置
				if ($version_info['plat'] == 2)	// 移动端
				{
					$plat = 'wap';
				} else { 	// PC端
					$plat = 'web';
				}


				// 文件生成路径
				$dirpath = SITE_BASE_DIR . $version . '/' . $game_info['domain'] . '/' . $plat . '/news';

				// 创建目录，生成文件
				if (!is_dir($dirpath))
				{
					mkdir($dirpath);
					@chmod($dirpath, 0777);
				}
				$filename = date('YmdHis',strtotime($article['time'])) . '.shtml';
				
				$filepath = $dirpath . '/' . $filename;;
				if (file_put_contents($filepath,$result))
				{
					$url = 'http://' . $game_info['domain'] . '.feiliu.com/' . $plat . '/news/' . $filename;
					if ($version_info['status'] == 1)	// 线上
					{
						if ($plat == 1)
						{
							$newdata['url'] = $url;
						} else {
							$newdata['wapurl'] = $url;
						}
					} else {
						$newdata['testurl'] = $url;
					}

					$ret = $this->makem->update_article($article['id'],$newdata);
					$ret && $isMakeID .= $article['id'] . '_';
				}
				unset($result);
			}
			$num = count(explode('_', $isMakeID)) - 1;
			message('成功生成' . $num . '条新闻');
		}




		public function  replace_tag($template = false)
		{
			if (!$template) return false;

			$result = $template;	// 返回值初始化

			while (preg_match_all("/<FEILIU>([\w\W]*?)<\/FEILIU>/i", $result, $fl_out))
			{
				foreach ($fl_out[1] as $value)
				{
					$is_tag = preg_match_all("/<tag>{([\w\W]*?)}<\/tag>/i", $value, $tag);
					$is_code = preg_match_all("/<code>([\w\W]*?)<\/code>/i", $value, $code);

					if ($is_tag && $is_code)	// 有<tag></tag>和<code></code>标签
					{
						// 获取tag参数
						$tag_data = explode(',', $tag[1][0]);
						foreach ($tag_data as $k=>$v)
						{
							$ret = explode(':', $v);
							$tagArr[$ret[0]] = $ret[1];
						}
						$tagArr['type'] = explode('_', $tagArr['type']);

						// 根据参数执行模板里的PHP代码并更新模板
						$fl_html = '';
						$fl_foreach_data = $this->makem->get_articlelist_by_type($tagArr['gameid'],$tagArr['type'],$tagArr['num']);
						@eval($code[1][0]);	// eval()安全性差，效率低，暂时使用
						$result = preg_replace("/<FEILIU>([\w\W]*?)<\/FEILIU>/i", "\n".$fl_html."\n", $result, 1);

					} else if($is_tag) {	// 只有<tag></tag>标签

						$tag_data = explode(',', $tag[1][0]);
						foreach ($tag_data as $k=>$v)
						{
							$ret = explode(':', $v);
							$tagArr[$ret[0]] = $ret[1];
						}
						
						$template_info = $tagArr['tid'] ? $this->makem->get_template_by_id($tagArr['tid']) : '';	// 模板信息
						$result = preg_replace("/<FEILIU>(.+?)<\/FEILIU>/i", "\n".$template_info['content']."\n", $result, 1);
					}
				}
			}

			return $result;
		}







	}
