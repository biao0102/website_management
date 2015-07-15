<?php /* Smarty version Smarty-3.1.13, created on 2015-05-18 10:24:55
         compiled from "application/views/templates/game_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889584689555220d3d78d86-76924830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da52aa270d4948457901a669ac4eece0fb6b4a58' => 
    array (
      0 => 'application/views/templates/game_add.tpl',
      1 => 1431502417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889584689555220d3d78d86-76924830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_555220d3dbc470_14457630',
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555220d3dbc470_14457630')) {function content_555220d3dbc470_14457630($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
game/gamelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
game/addgame" method="post" name="theForm" enctype="multipart/form-data">
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
									<label class="control-label" for="focusedInput">web页面生成列表</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="makelist"></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">wap页面生成列表</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="wapmakelist"></textarea>
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