<?php /* Smarty version Smarty-3.1.13, created on 2015-05-19 17:31:11
         compiled from "application/views/templates/type_edittype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:392014329555b02df5d11c2-24471382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6266de336a58c2d16bdebed700c704aafd3fa3a2' => 
    array (
      0 => 'application/views/templates/type_edittype.tpl',
      1 => 1430983228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392014329555b02df5d11c2-24471382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'typeid' => 0,
    'parenttype' => 0,
    'i' => 0,
    'typeinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_555b02df643c64_16179692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555b02df643c64_16179692')) {function content_555b02df643c64_16179692($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-pencil" style="padding-left:20px;"></i>
						<h3>编辑类型</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/typelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/edittype?typeid=<?php echo $_smarty_tpl->tpl_vars['typeid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
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
" <?php if ($_smarty_tpl->tpl_vars['i']->value['typeid']==$_smarty_tpl->tpl_vars['typeinfo']->value['ctype']){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['i']->value['typename'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="typename" value="<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['typename'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">描述</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="summary" value="<?php echo $_smarty_tpl->tpl_vars['typeinfo']->value['summary'];?>
">
									</div>
							  	</div>
							  	<div class="control-group" id="statusbox">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['typeinfo']->value['status']==1){?>checked<?php }?>> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['typeinfo']->value['status']==0){?>checked<?php }?>> 不生效&nbsp;&nbsp;
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