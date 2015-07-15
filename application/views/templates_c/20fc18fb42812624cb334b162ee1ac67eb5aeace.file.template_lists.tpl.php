<?php /* Smarty version Smarty-3.1.13, created on 2015-06-11 17:37:27
         compiled from "application/views/templates/template_lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11437946365577ad0b859a16-44089797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fc18fb42812624cb334b162ee1ac67eb5aeace' => 
    array (
      0 => 'application/views/templates/template_lists.tpl',
      1 => 1434015424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11437946365577ad0b859a16-44089797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5577ad0b928b00_14237502',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'vid' => 0,
    'lists' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577ad0b928b00_14237502')) {function content_5577ad0b928b00_14237502($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>模板列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
template/add?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
">添加模板</a>&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
make/make_all_tpl?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
">生成列表</a>&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
make/make_all_article?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
">生成文章</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>模板ID</th>
									<th>名称</th>
									<th>文件名</th>
									<th>类型</th>
									<th>生成</th>
									<th>状态</th>
									<th>查看</th>
									<th>更新时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
</td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['type']==1){?><span style="color:red;">页面</span><?php }elseif($_smarty_tpl->tpl_vars['i']->value['type']==2){?><span style="color:blue;">碎片</span><?php }else{ ?><span>文章</span><?php }?></td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['ismake']==1){?><span style="color:blue;">是</span><?php }else{ ?><span style="color:red;">否</span><?php }?></td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1){?><span style="color:blue;">生效</span><?php }else{ ?><span style="color:red;">失效</span><?php }?></td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
">查看</a><?php }else{ ?>无<?php }?></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['updatetime'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
template/edit?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;									
										<a class="btn btn-success" href="<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==1){?><?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
make/make_one_tpl?tid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
<?php }else{ ?>javascript:alert('亲~此模板不需要在此生成哦');<?php }?>" data-rel="tooltip" data-original-title="生成">
											<i class="fa fa-th-list icon-white"></i>
										</a>&nbsp;&nbsp; 
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
template/del?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!--<?php echo $_smarty_tpl->getSubTemplate ("page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
			</div>
		</div>
	</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>