<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 14:15:53
         compiled from "application/views/templates/type_typelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49152454255aa1e11477a38-53567862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a85e8d89e34fb0c4264ecf229a837ec1cf9c8b5' => 
    array (
      0 => 'application/views/templates/type_typelist.tpl',
      1 => 1437406954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49152454255aa1e11477a38-53567862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1e12ac1041_30183094',
  'variables' => 
  array (
    'baseurl' => 0,
    'typelist' => 0,
    'p' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1e12ac1041_30183094')) {function content_55aa1e12ac1041_30183094($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>类型列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
type/addtype">添加类型</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>类型ID</th>
									<th>父级</th>
									<th>子级</th>
									<th>类型名</th>
									<th>描述</th>
									<th>状态</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
								<tr style="color:blue;">
									<td><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
</td>
									<td class="center">√</td>
									<td class="center"></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typename'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['summary'];?>
</td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['p']->value['parent']['status']==1){?>生效<?php }else{ ?><span style="color:red;">失效<span><?php }?></td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
type/edittype?typeid=<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
type/deltype?typeid=<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
" data-rel="tooltip" data-original-title="删除">
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
									<td><?php echo $_smarty_tpl->tpl_vars['c']->value['typeid'];?>
</td>
									<td class="center"></td>
									<td class="center">√</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['typename'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['summary'];?>
</td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['c']->value['status']==1){?>生效<?php }else{ ?><span style="color:red;">失效<span><?php }?></td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
type/edittype?typeid=<?php echo $_smarty_tpl->tpl_vars['c']->value['typeid'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
type/deltype?typeid=<?php echo $_smarty_tpl->tpl_vars['c']->value['typeid'];?>
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