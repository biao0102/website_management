<?php /* Smarty version Smarty-3.1.13, created on 2015-07-22 11:17:11
         compiled from "application/views/templates/user_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133809231455af3b81d74570-25930953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8823bbcf94780d9aa826a317011658696f68ccb9' => 
    array (
      0 => 'application/views/templates/user_add.tpl',
      1 => 1437563799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133809231455af3b81d74570-25930953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55af3b81db8e87_95898666',
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55af3b81db8e87_95898666')) {function content_55af3b81db8e87_95898666($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-pencil" style="padding-left:20px;"></i>
						<h3>添加用户</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/add" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">用户名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="username" />
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">真实姓名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="truename" />
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">邮箱</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="email" />
									</div>
							  	</div>
							  	<div class="control-group">
									<div class="controls">
								  		<input  type="hidden" name="useraddreq"  value="2" />
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