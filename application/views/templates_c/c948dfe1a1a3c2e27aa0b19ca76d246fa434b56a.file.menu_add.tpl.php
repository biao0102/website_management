<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 15:23:36
         compiled from "application/views/templates/menu_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:594279659554b12f822da11-69911938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c948dfe1a1a3c2e27aa0b19ca76d246fa434b56a' => 
    array (
      0 => 'application/views/templates/menu_add.tpl',
      1 => 1427358748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '594279659554b12f822da11-69911938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'parentmenu' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_554b12f8293cc6_48064336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b12f8293cc6_48064336')) {function content_554b12f8293cc6_48064336($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加菜单</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/add" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择父级菜单</label>
									<div class="controls">
										<select name="parentid" class="input-xlarge" id="beta">
											<option value="">选择父级菜单</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parentmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['menuid'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['menuname'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">菜单名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="menuname" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Action</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="action" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">导航图标</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="Style" value="fa-file-o">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="sort" value="255">
									</div>
							  	</div>
							  	<div class="form-actions">
									<button name="submit" type="submit" value="submit" class="btn btn-primary">提交</button>
							  	</div>
							</fieldset>
						</form>
					</div>
				</div>
	    	</div>
      	</div>
	</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>