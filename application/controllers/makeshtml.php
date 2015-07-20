 <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Makeshtml extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('gamem');
			$this->load->model('articlem');
		}



		// 生成所有web、wap静态页（除文章）
		public function makealllist()
		{
			$get = $this->input->get();
			$gameid = $get['gameid'];	// 游戏ID

			if(empty($gameid)) 
			{
				message('游戏ID不存在~','game/gamelist');
			}

			if (isset($_COOKIE["maketime"]))
			{
				$maketime = $_COOKIE["maketime"];
				$expire = time() - $maketime;
				if ($expire > 5)
				{
					$expire = time() + 5;
					setcookie("maketime", time(), $expire);
				} else {
					message('更新太频繁,请休息片刻,5s后再来~','article/articlelist?gameid='.$gameid);
				}
			} else {
				$expire = time() + 5;
				setcookie('maketime', time(), $expire);
			}	

			$domain = $this->gamem->get_domain_by_id($gameid);		// 二级域名
			if(empty($domain)) 
			{
				message('二级域名不存在~','article/articlelist?gameid='.$gameid);
			}

			$gameinfo = $this->gamem->get_game_by_id($gameid);	// 游戏信息

			// web端生成
			if ($gameinfo['makelist'])
			{
				$listinfo = explode('|',$gameinfo['makelist']);
				if (is_array($listinfo))
				{
					foreach($listinfo as $k=>$v)
					{
						$arr = explode(',',$v);
						$makelist[$k]['name'] = trim($arr[0]);
						$makelist[$k]['action'] = trim($arr[1]);
						$makelist[$k]['filename'] = trim($arr[2]);
					}
				}

				if(is_array($makelist))
				{
					$dirpath = SITE_STATIC_DIR . $domain . '/web/list';
					if (!file_exists($dirpath))
					{
						@mkdir($dirpath, 0755);
						@chmod($dirpath, 0777);
					}

					foreach ($makelist as $k => $v) 
					{
						$action = $v['action'];			// 生成方法
						$filename = $v['filename'];		// 文件名

						if (!filename) continue;

						$url ='http://tpl.feiliu.com/web/' . $domain . '/' . $action;		// 模板访问网址

						$ctx = stream_context_create( array('http' => array('timeout' => 3)) );   
						$data = @file_get_contents($url, 0, $ctx);
						unset($ctx);

						$webstr = trim(substr($data,48,18));
						if (strlen($data) == 1176 && $webstr == '404 Page Not Found')
						{
							continue;
						}
						
						$filepath = $dirpath . '/' . $filename;
						if (file_exists($dirpath))
						{
							$fp = fopen($filepath, 'w+'); 
							$webret = fwrite($fp, $data); 
							fclose($fp);
							@chmod($filepath, 0775);
						}					
					}
				}
			}
			
			// wap端生成
			if ($gameinfo['wapmakelist'])
			{
				$waplistinfo = explode('|',$gameinfo['wapmakelist']);
				if (is_array($waplistinfo))
				{
					foreach($waplistinfo as $k=>$v)
					{
						$waparr = explode(',',$v);
						$wapmakelist[$k]['name'] = trim($waparr[0]);
						$wapmakelist[$k]['action'] = trim($waparr[1]);
						$wapmakelist[$k]['filename'] = trim($waparr[2]);
					}
				}

				if(is_array($wapmakelist))
				{
					$wapdirpath = SITE_STATIC_DIR . $domain . '/wap/list/';
					if (!file_exists($wapdirpath))
					{
						@mkdir($wapdirpath, 0755);
						@chmod($wapdirpath, 0777);
					}

					foreach ($wapmakelist as $k => $v) 
					{
						$wapaction = $v['action'];			// 生成方法
						$wapfilename = $v['filename'];		// 文件名

						if (!$wapfilename) continue;

						$url ='http://tpl.feiliu.com/wap/' . $domain . '/' . $wapaction;		// 模板访问网址
						$ctx = stream_context_create( array('http' => array('timeout' => 3)));   
						$data = @file_get_contents($url, 0, $ctx);
						unset($ctx);

						$wapstr = trim(substr($data,48,18));

						if (strlen($data) == 1176 && $wapstr == '404 Page Not Found')
						{
							continue;
						}

						$wapfilepath = $wapdirpath . $wapfilename;
						if (file_exists($wapdirpath))
						{
							$fp = fopen($wapfilepath, 'w+'); 
							$wapret = fwrite($fp, $data); 
							fclose($fp);
							@chmod($wapfilepath, 0775);
						}
					}
				}
			}

			if ($webret || $wapret)
			{
				message('生成成功~','article/articlelist?gameid='.$gameid);
			} else {
				message('生成失败~','article/articlelist?gameid='.$gameid);
			}		
		}


		// 生成单篇静态新闻
		public function makearticle()
		{
			$get = $this->input->get();
			$id = $get['id'];			// 文章ID
			$gameid = $get['gameid'];	// 游戏ID
			
			$domain = $this->gamem->get_domain_by_id($gameid);		// 二级域名
			$article = $this->articlem->get_article_by_id($id);		// 文章信息
			if ($article['type'] == 1)
			{
				message('轮播图不需要生成','article/articlelist?gameid='.$gameid);
			}

			if(empty($domain)) 
			{
				message('二级域名不存在~','article/articlelist?gameid='.$gameid);
			}

			$gameinfo = $this->gamem->get_game_by_id($gameid);	// 游戏信息

			// if(!in_array($article['type'], array(2,3,4,5,6,7,8,9)))
			// {
			// 	message('此类型不能直接生成新闻，可添加外链至新闻！','article/articlelist?gameid='.$gameid);
			// }

			// web端生成
			if ($gameinfo['makelist'])
			{
				$weburl ='http://tpl.feiliu.com/web/' . $domain . '/article?id=' . $id;		// 模板访问网址

				$ctx = stream_context_create( array('http' => array('timeout' => 3)) );   
				$webdata = @file_get_contents($weburl, 0, $ctx);
				unset($ctx);
				
				$webstr = trim(substr($webdata,48,18));

				if (strlen($webdata) != 1176 && $webstr != '404 Page Not Found')
				{
					$dirpath = SITE_STATIC_DIR . $domain . '/web/news/';
					$filename = date('YmdHis',strtotime($article['time'])) . '.shtml';
					$filepath = $dirpath . $filename;

					if (!file_exists($dirpath))
					{
						@mkdir($dirpath, 0755);
					}

					if (file_exists($dirpath))
					{
						$fp = fopen($filepath, 'w+'); 
						$webret = fwrite($fp, $webdata); 
						fclose($fp);
						@chmod($filepath, 0664);
					}
				}
			}

			// wap端生成
			if ($gameinfo['wapmakelist'])
			{
				$wapurl ='http://tpl.feiliu.com/wap/' . $domain . '/article?id=' . $id;		// 模板访问网址
				$ctx = stream_context_create( array('http' => array('timeout' => 3)) );   
				$wapdata = @file_get_contents($wapurl, 0, $ctx);
				unset($ctx);

				$wapstr = trim(substr($wapdata,48,18));
				if (strlen($wapdata) != 1176 && $wapstr != '404 Page Not Found')
				{
					$wapdirpath = SITE_STATIC_DIR . $domain . '/wap/news/';
					$wapfilename = date('YmdHis',strtotime($article['time'])) . '.shtml';
					$wapfilepath = $wapdirpath . $wapfilename;

					if (!file_exists($wapdirpath))
					{
						@mkdir($wapdirpath, 0755);
					}

					if (file_exists($wapdirpath))
					{
						$fp = fopen($wapfilepath, 'w+'); 
						$wapret = fwrite($fp, $wapdata); 
						fclose($fp);
						@chmod($wapfilepath, 0664);
					}
				}
			}	

			if ($webret)
			{
				$makedata['url'] = 'http://' . $domain . '.feiliu.com/web/news/' . $filename;
				$this->articlem->update_article($makedata,$id);
			}

			if ($wapret)
			{
				$wapmakedata['wapurl'] = 'http://' . $domain . '.feiliu.com/wap/news/' . $filename;
				$this->articlem->update_article($wapmakedata,$id);				
			} else if ($webret) {
				$wapmakedata['wapurl'] = 'http://' . $domain . '.feiliu.com/web/news/' . $filename;
				$this->articlem->update_article($wapmakedata,$id);				
			}

			if ($webret && $wapret) message('成功生成web端和wap端新闻','article/articlelist?gameid='.$gameid);
			if ($webret) message('成功生成web端新闻','article/articlelist?gameid='.$gameid);
			if ($wapret) message('成功生成wap端新闻','article/articlelist?gameid='.$gameid);
			message('生成失败~','article/articlelist?gameid='.$gameid);
			
		}


		// 批量生成所有文章
		public function makeallacticle()
		{
			$gameid = $this->input->get('gameid');
			if(empty($gameid)) 
			{
				message('游戏ID不存在~','game/gamelist');
			}		
			$articlelist = $this->articlem->get_articleid_by_gameid($gameid);		// 文章信息
			$domain = $this->gamem->get_domain_by_id($gameid);						// 二级域名
			if (!empty($articlelist))
			{
				foreach ($articlelist as $k => $v) 
				{
					$id = $v['id'];
					$articletime = $v['time'];
					if($v['type'] == 1) continue; // 轮播图

					// if(!in_array($v['type'], array(2,3,4,5,6,7,8,9)))
					// {
					// 	continue;
					// }

					$gameinfo = $this->gamem->get_game_by_id($gameid);	// 游戏信息
					
					// web端生成
					if ($gameinfo['makelist'])
					{
						$weburl ='http://tpl.feiliu.com/web/' . $domain . '/article?id=' . $id;		// 模板访问网址

						$ctx = stream_context_create( array('http' => array('timeout' => 3)) );   
						$webdata = @file_get_contents($weburl, 0, $ctx);
						unset($ctx);

						$webstr = trim(substr($webdata,48,18));

						if (strlen($webdata) != 1176 && $webstr != '404 Page Not Found')
						{
							$dirpath = SITE_STATIC_DIR . $domain . '/web/news/';
							$filename = date('YmdHis',strtotime($articletime)) . '.shtml';
							$filepath = $dirpath . $filename;

							if (!file_exists($dirpath))
							{
								@mkdir($dirpath, 0755);
							}

							if (file_exists($dirpath))
							{
								$fp = fopen($filepath, 'w+'); 
								$webret = fwrite($fp, $webdata); 
								fclose($fp);
								@chmod($filepath, 0664);
							}
							if ($webret)
							{
								$webmakedata['url'] = 'http://' . $domain . '.feiliu.com/web/news/' . $filename;
								$this->articlem->update_article($webmakedata,$id);
							}
						}
					}

					// wap端生成
					if ($gameinfo['wapmakelist'])
					{
						$wapurl ='http://tpl.feiliu.com/wap/' . $domain . '/article?id=' . $id;		// 模板访问网址

						$ctx = stream_context_create( array('http' => array('timeout' => 3)) );   
						$wapdata = @file_get_contents($wapurl, 0, $ctx);
						unset($ctx);

						$wapstr = trim(substr($wapdata,48,18));

						if (strlen($wapdata) != 1176 && $wapstr != '404 Page Not Found')
						{
							$wapdirpath = SITE_STATIC_DIR . $domain . '/wap/news/';
							$wapfilename = date('YmdHis',strtotime($articletime)) . '.shtml';
							$wapfilepath = $wapdirpath . $wapfilename;

							if (!file_exists($wapdirpath))
							{
								@mkdir($wapdirpath, 0755);
							}

							if (file_exists($wapdirpath))
							{
								$fp = fopen($wapfilepath, 'w+'); 
								$wapret = fwrite($fp, $wapdata); 
								fclose($fp);
								@chmod($wapfilepath, 0664);
							}
							if ($wapret)
							{
								$wapmakedata['wapurl'] = 'http://' . $domain . '.feiliu.com/wap/news/' . $filename;
								$this->articlem->update_article($wapmakedata,$id);
							}
						}
					}
				}
				if ($webret && $wapret) message('成功生成web端和wap端新闻','article/articlelist?gameid='.$gameid);
				if ($webret) message('成功生成web端新闻','article/articlelist?gameid='.$gameid);
				if ($wapret) message('成功生成wap端新闻','article/articlelist?gameid='.$gameid);
			}
			message('生成失败~','article/articlelist?gameid='.$gameid);
		}











































		// 单页生成页面列表
		public function makelist()
		{
			exit;
			$gameid = $this->input->get('gameid');
			if (empty($gameid)) 
			{
				message('游戏ID不存在~','game/gamelist?gameid='.$gameid);
			}
			$gameinfo = $this->gamem->get_game_by_id($gameid);	// 游戏信息

			$listinfo = explode('|',$gameinfo['makelist']);
			if (is_array($listinfo))
			{
				foreach($listinfo as $k=>$v)
				{
					$arr = explode(',',$v);
					$makelist[$k]['name'] = trim($arr[0]);
					$makelist[$k]['action'] = trim($arr[1]);
					$makelist[$k]['filename'] = trim($arr[2]);
				}
			}

			$listpath = SITE_STATIC_DIR . $gameinfo['domain'] . '/list';
			$listfile = scandir($listpath); 

			$listpage[0]['filename'] = 'index.shtml';
			$listpage[0]['url'] = 'http://' . $gameinfo['domain'] . '.feiliu.com';

			foreach ($listfile as $k=>$v)
			{
				if ($v != '.' && $v != '..')
				{
					$listpage[$k]['filename'] = $v;
					$listpage[$k]['url'] = 'http://' . $gameinfo['domain'] . '.feiliu.com/list/' . $v;
				}
			}

			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('makelist',$makelist);
			$this->smarty->assign('listpage',$listpage);
			$this->smarty->display('makeshtml_makelist.tpl');
		}



		// 生成单页静态页（首页、列表页、其他页）
		public function makeaction()
		{
			exit;
			$gameid = $this->input->get('gameid');

			if (empty($gameid)) 
			{
				message('游戏ID不存在~','game/gamelist?gameid='.$gameid);
			}

			$domain = $this->gamem->get_domain_by_id($gameid);		// 二级域名

			if (empty($domain)) 
			{
				message('二级域名不存在~','makeshtml/makelist?gameid='.$gameid);
			}

			$makename = $this->input->post('makename');
			$makename =  explode(',',$makename);
			$action = $makename[0];
			$filename = $makename[1];

			if ($action == '' || $filename == '')
			{
				message('生成方法或生成文件名不能为空~','makeshtml/makelist?gameid='.$gameid);
			}

			$url ='http://tpl.feiliu.com/web/' . $domain . '/' . $action;		// 模板访问网址

			$ctx = stream_context_create( array('http' => array('timeout' => 3)) );   
			$data = file_get_contents($url, 0, $ctx);
			unset($ctx); 

			$str = trim(substr($data,48,18));

			if (strlen($data) == 1176 && $str == '404 Page Not Found')
			{
				message('模板不存在~','makeshtml/makelist?gameid='.$gameid);
			}

			$dirpath = SITE_STATIC_DIR . $domain . '/list/';

			$filepath = $dirpath . $filename;

			if (!file_exists($dirpath))
			{
				@mkdir($dirpath, 0755);
			}

			if (file_exists($dirpath))
			{
				$fp = fopen($filepath, 'w+'); 
				$ret = fwrite($fp, $data); 
				fclose($fp);
				@chmod($filepath, 0664);
			}

			if ($ret) 
			{
				message('生成成功~','makeshtml/makelist?gameid='.$gameid);
			} else {
				message('生成失败~','makeshtml/makelist?gameid='.$gameid);
			}
		}





	}