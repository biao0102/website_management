<?php /* Smarty version Smarty-3.1.13, created on 2015-04-13 14:36:56
         compiled from "application/views/templates/games_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2018224051552b64082b5466-45725831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a508b127a722fb8bb4fff9c3e0973e8bb284435' => 
    array (
      0 => 'application/views/templates/games_add.tpl',
      1 => 1427362525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2018224051552b64082b5466-45725831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_552b64082f08e7_72085101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b64082f08e7_72085101')) {function content_552b64082f08e7_72085101($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加游戏</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/gamelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/addgame" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">游戏名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="name" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">二级域名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="domain" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">页面生成列表</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="makelist"></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" checked> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0"> 不生效&nbsp;&nbsp;
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