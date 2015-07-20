<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 17:35:39
         compiled from "application/views/templates/user_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187956570555aa1deb38bd19-62848766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '080d9bfc626b7beb0dde10fb3a535cbd66716b82' => 
    array (
      0 => 'application/views/templates/user_edit.tpl',
      1 => 1427358842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187956570555aa1deb38bd19-62848766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'userid' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1deb4113c2_75648148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1deb4113c2_75648148')) {function content_55aa1deb4113c2_75648148($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-pencil" style="padding-left:20px;"></i>
						<h3>编辑用户</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/edit?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">UserID</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="userid" readOnly="true" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['userid'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">用户名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="username" disabled="true" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">真实姓名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="truename" disabled="true" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['truename'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">邮箱</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="email" disabled="true" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['email'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">最近登录</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="updatetime" disabled="true" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['updatetime'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">等级</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="level" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['level'];?>
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