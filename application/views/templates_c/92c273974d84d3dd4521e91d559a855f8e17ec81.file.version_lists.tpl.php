<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 18:11:38
         compiled from "application/views/templates/version_lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81567956255aa265a917282-86761912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c273974d84d3dd4521e91d559a855f8e17ec81' => 
    array (
      0 => 'application/views/templates/version_lists.tpl',
      1 => 1434091568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81567956255aa265a917282-86761912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'lists' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa265b8f30e4_10559447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa265b8f30e4_10559447')) {function content_55aa265b8f30e4_10559447($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>版本列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
version/add?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">添加版本</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>版本ID</th>
									<th>游戏ID</th>
									<th>版本名称</th>
									<th>平台</th>
									<th>状态</th>
									<th>入口</th>
									<th>时间</th>
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
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['gameid'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['version'];?>
</td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['plat']==1){?>web<?php }else{ ?>wap<?php }?></td>
									<td class="center">
										<?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1){?><span style="color:blue;">线上</span>
										<?php }elseif($_smarty_tpl->tpl_vars['i']->value['status']==2){?><span>测试</span>
										<?php }else{ ?><span style="color:red;">失效</span><?php }?>
									</td>
									<td class="center"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
template/lists?vid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">模板列表</a></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
version/edit?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
version/del?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
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