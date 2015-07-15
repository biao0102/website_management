<?php /* Smarty version Smarty-3.1.13, created on 2015-05-08 16:32:27
         compiled from "application/views/templates/games_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:452286121552653f15deff7-98426303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63e402c34c9751c47230340874d759dfee6fc98d' => 
    array (
      0 => 'application/views/templates/games_list.tpl',
      1 => 1431073911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '452286121552653f15deff7-98426303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_552653f1667315_76560270',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameslist' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552653f1667315_76560270')) {function content_552653f1667315_76560270($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>游戏列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/addgame">添加游戏</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>名称</th>
									<th>域名</th>
									<th>状态</th>
									<th>时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gameslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
									<td class="center"><a href="http://<?php echo $_smarty_tpl->tpl_vars['i']->value['domain'];?>
.feiliu.com" target="_blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['domain'];?>
</a></td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0){?><span style="color:red;">未生效</span><?php }else{ ?>已生效<?php }?></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/editgame?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-rel="tooltip" data-original-title="列表">
											<i class="fa fa-th-list icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/delgame?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
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