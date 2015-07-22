<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 10:10:07
         compiled from "application/views/templates/menu_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52347265055aa1e02ea49d0-72054225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feb78bcdb740cceb3b8e9127b85cdda54b62e1ba' => 
    array (
      0 => 'application/views/templates/menu_list.tpl',
      1 => 1437406954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52347265055aa1e02ea49d0-72054225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1e03aaf2a8_45380101',
  'variables' => 
  array (
    'baseurl' => 0,
    'menulist' => 0,
    'p' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1e03aaf2a8_45380101')) {function content_55aa1e03aaf2a8_45380101($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>菜单列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/add">添加菜单</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>菜单ID</th>
									<th>父级</th>
									<th>子级</th>
									<th>菜单名</th>
									<th>Action</th>
									<th>排序</th>
									<th>状态</th>
									<th>创建时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menulist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
								<tr style="color:blue;">
									<td><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
</td>
									<td class="center">√</td>
									<td class="center"></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuname'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['action'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['sort'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['status'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['createtime'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/edit?menuid=<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/del?menuid=<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>
								
								<?php if ($_smarty_tpl->tpl_vars['p']->value['child']){?>
								<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['c']->value['menuid'];?>
</td>
									<td class="center"></td>
									<td class="center">√</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['menuname'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['action'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['sort'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['status'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['createtime'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/edit?menuid=<?php echo $_smarty_tpl->tpl_vars['c']->value['menuid'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/del?menuid=<?php echo $_smarty_tpl->tpl_vars['c']->value['menuid'];?>
" data-rel="tooltip" data-original-title="删除">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>
								<?php } ?>
								<?php }?>

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