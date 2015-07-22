<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 16:19:21
         compiled from "application/views/templates/rights_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94194997655aa1e08b85227-96762238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732de1eec21f752d99872191cd1e3c381d7de1f7' => 
    array (
      0 => 'application/views/templates/rights_list.tpl',
      1 => 1437406954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94194997655aa1e08b85227-96762238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1e0994f600_45723602',
  'variables' => 
  array (
    'baseurl' => 0,
    'rightslist' => 0,
    'p' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1e0994f600_45723602')) {function content_55aa1e0994f600_45723602($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/zhangbiao/projects/websit_management/website_management/application/libraries/Smarty/plugins/modifier.truncate.php';
?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>权限列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/add">添加权限</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>权限ID</th>
									<th>父权限</th>
									<th>子权限</th>
									<th>权限名</th>
									<th>所属菜单名</th>
									<th>Action</th>
									<th>状态</th>
									<th>创建时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rightslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
								<tr style="color:blue;">
									<td><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
</td>
									<td>√</td>
									<td></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsname'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuname'];?>
</td>
									<td class="center"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['parent']['action'],20);?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['status'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['createtime'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/edit?rightsid=<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/del?rightsid=<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
" data-rel="tooltip" data-original-title="删除" onclick="if(confirm('确定删除?')==false)return false;">
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
									<td><?php echo $_smarty_tpl->tpl_vars['c']->value['rightsid'];?>
</td>
									<td></td>
									<td>√</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['rightsname'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['menuname'];?>
</td>
									<td class="center"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['action'],20);?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['status'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['createtime'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/edit?rightsid=<?php echo $_smarty_tpl->tpl_vars['c']->value['rightsid'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/del?rightsid=<?php echo $_smarty_tpl->tpl_vars['c']->value['rightsid'];?>
" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
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