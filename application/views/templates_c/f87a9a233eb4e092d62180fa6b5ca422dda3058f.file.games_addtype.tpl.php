<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 14:46:02
         compiled from "application/views/templates/games_addtype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:973914484554b08f7edf962-64968614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87a9a233eb4e092d62180fa6b5ca422dda3058f' => 
    array (
      0 => 'application/views/templates/games_addtype.tpl',
      1 => 1430981155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '973914484554b08f7edf962-64968614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_554b08f7f33734_77936435',
  'variables' => 
  array (
    'baseurl' => 0,
    'parenttype' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b08f7f33734_77936435')) {function content_554b08f7f33734_77936435($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加类型</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/typelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/addtype" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择父级类型</label>
									<div class="controls">
										<select name="ctype" class="input-xlarge" id="beta">
											<option value="">选择父级类型</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parenttype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['typeid'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['typename'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="typename" value="">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">描述</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="summary" value="">
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