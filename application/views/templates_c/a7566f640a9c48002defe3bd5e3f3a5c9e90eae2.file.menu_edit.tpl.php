<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 17:37:28
         compiled from "application/views/templates/menu_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24885831655aa1e58981e35-82050280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7566f640a9c48002defe3bd5e3f3a5c9e90eae2' => 
    array (
      0 => 'application/views/templates/menu_edit.tpl',
      1 => 1427358767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24885831655aa1e58981e35-82050280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'menuid' => 0,
    'parentmenu' => 0,
    'i' => 0,
    'menuinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1e5a387d36_73732176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1e5a387d36_73732176')) {function content_55aa1e5a387d36_73732176($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-pencil" style="padding-left:20px;"></i>
						<h3>编辑菜单</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/edit?menuid=<?php echo $_smarty_tpl->tpl_vars['menuid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
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
" <?php if ($_smarty_tpl->tpl_vars['i']->value['menuid']==$_smarty_tpl->tpl_vars['menuinfo']->value['parentid']){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['i']->value['menuname'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">菜单名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="menuname" value="<?php echo $_smarty_tpl->tpl_vars['menuinfo']->value['menuname'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Action</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="action" value="<?php echo $_smarty_tpl->tpl_vars['menuinfo']->value['action'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">导航图标</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="style" value="<?php echo $_smarty_tpl->tpl_vars['menuinfo']->value['style'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['menuinfo']->value['sort'];?>
">
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