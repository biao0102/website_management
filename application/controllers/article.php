 <?php

	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Article extends My_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('gamem');
			$this->load->model('articlem');
			$this->load->model('typem');
		}

		// 文章列表
		public function articlelist()
		{
			$get = $this->input->get();
			$gameid = $get['gameid'];
			if (!intval($gameid)) message('游戏ID不能为空!','game/gamelist');
			$type = $get['type'] ? $get['type'] : '';
			$ctype = $get['ctype'] ? $get['ctype'] : '';

			if($ctype) $type = $ctype;

			$articlelist = $this->articlem->get_articlelist_by_gameid($gameid,$type);
			if ($articlelist)
			{
				foreach ($articlelist as $k => $v) 
				{
					$articlelist[$k]['typename'] = $this->typem->get_typename_by_id($v['type']);
				}				
			}

			$typeArr = $this->typem->gettype($gameid);
			$this->smarty->assign('type',$type);
			$this->smarty->assign('typeArr',$typeArr);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('articlelist',$articlelist);
			$this->smarty->display('article_articlelist.tpl');	
		}

		// 添加一篇文章
		public function addarticle()
		{
			$gameid = $this->input->get('gameid');

			if (empty($gameid)) message('游戏ID不能为空!','game/gamelist?gameid='.$gameid);

			$domain = $this->gamem->get_domain_by_id($gameid);

			$post = $this->input->post();
			if ($post['submit'])
			{
				if (empty($post['type'])) message('文章类型不能为空!','article/addarticle?gameid='.$gameid);
				if (empty($post['title'])) message('文章标题不能为空!','article/addarticle?gameid='.$gameid);
				if ($post['ctype']) $post['type'] = $post['ctype'];

				// 提取上传图片的地址
				if ($post['image'])
				{
					foreach(explode('"',$post['image']) as $v)
					{
						if (strpos($v,'http:') === 0)
						{
							$image = $v;
							break;
						} else {
							$image = '';
						}
					}	
				}

				$data['gameid'] = $gameid;
				$data['image'] = empty($image) ? '' : $image;
				$data['type'] = empty($post['type']) ? '' : $post['type'];
				$data['title'] = empty($post['title']) ? '' : $post['title'];
				$data['outlink'] = empty($post['outlink']) ? '' : $post['outlink'];
				$data['sort'] = empty($post['sort']) ? '' : $post['sort'];
				$data['status'] = empty($post['status']) ? '' : $post['status'];
				$data['content'] = empty($post['content']) ? '' : $post['content'];
				$data['time'] = date('Y-m-d H:i:s');
				$data['url'] = '';
				$ret = $this->articlem->insert_article($data);
				if ($ret) message('添加成功！','article/articlelist?gameid='.$gameid);
				exit;
			}
			$typeArr = $this->typem->gettype($gameid);
			$this->smarty->assign('typeArr',$typeArr);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('domain',$domain);
			$this->smarty->display('article_addarticle.tpl');	
		}

		// 编辑一篇文章
		public function editarticle()
		{
			$get = $this->input->get();
			$id = $get['id'];			// 文章ID
			$gameid = $get['gameid'];	// 游戏ID

			if (empty($gameid)) message('游戏ID不能为空!','game/gamelist?gameid='.$gameid);

			$post = $this->input->post();
			if ($post['submit'])
			{
				if (empty($post['type'])) message('文章类型不能为空!','article/editarticle?gameid='.$gameid.'&id='.$id);
				if (empty($post['title'])) message('文章标题不能为空!','article/editarticle?gameid='.$gameid.'&id='.$id);

				if ($post['ctype']) $post['type'] = $post['ctype'];

				// 提取上传图片的地址
				if ($post['image'])
				{
					foreach(explode('"',$post['image']) as $v)
					{
						if (strpos($v,'http:') === 0)
						{
							$image = $v;
							break;
						} else {
							$image = '';
						}
					}	
				}

				if (!empty($image)) $data['image'] = $image;
				if (!empty($post['type'])) $data['type'] = $post['type'];
				if (!empty($post['title'])) $data['title'] = $post['title'];
				if (!empty($post['outlink'])) $data['outlink'] = $post['outlink'];
				if (!empty($post['sort'])) $data['sort'] = $post['sort'];
				if (!empty($post['status'])) $data['status'] = $post['status'];
				if (!empty($post['content'])) $data['content'] = $post['content'];

				$ret = $this->articlem->update_article($data,$id);
				if ($ret) message('编辑成功！','article/articlelist?gameid='.$gameid);
				exit;
			}

			$domain = $this->gamem->get_domain_by_id($gameid);
			$article = $this->articlem->get_article_by_id($id);

			if ($article['image']) $article['image'] = '<img src="' . $article['image'] . '">';	// 用于模板显示图片
			

			$typeinfo = $this->typem->get_type_by_typeid($article['type']);
			if($typeinfo['ctype'] != 0)
			{
				$childtype = $this->typem->get_childtype_by_typeid($typeinfo['ctype']);
			}

			$typeArr = $this->typem->gettype($gameid);

			$this->smarty->assign('typeArr',$typeArr);
			$this->smarty->assign('typeinfo',$typeinfo);
			$this->smarty->assign('childtype',$childtype);
			$this->smarty->assign('id',$id);
			$this->smarty->assign('gameid',$gameid);
			$this->smarty->assign('domain',$domain);
			$this->smarty->assign('article',$article);
			$this->smarty->display('article_editarticle.tpl');	
		}

		// 删除一篇文章
		public function delarticle()
		{
			$get = $this->input->get();
			$id = $get['id'];			// 文章ID
			$gameid = $get['gameid'];	// 游戏ID

			if (!intval($id)) message('文章ID不能为空!','article/articlelist?gameid='.$gameid);

			$ret = $this->articlem->del_article_by_id($id);
			if ($ret) message('删除成功！','article/articlelist?gameid='.$gameid);
			exit;
		}
	}