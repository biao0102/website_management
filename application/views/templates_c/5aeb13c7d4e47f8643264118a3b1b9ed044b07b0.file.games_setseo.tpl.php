<?php /* Smarty version Smarty-3.1.13, created on 2015-05-08 11:32:34
         compiled from "application/views/templates/games_setseo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1294541441554c2e19481550-14206827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aeb13c7d4e47f8643264118a3b1b9ed044b07b0' => 
    array (
      0 => 'application/views/templates/games_setseo.tpl',
      1 => 1431055946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294541441554c2e19481550-14206827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_554c2e194d02f7_74360472',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'seo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c2e194d02f7_74360472')) {function content_554c2e194d02f7_74360472($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>SEO设置</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/setseo?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">SEO关键词</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="keywords" value="<?php echo $_smarty_tpl->tpl_vars['seo']->value['keywords'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">SEO描述</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="description"><?php echo $_smarty_tpl->tpl_vars['seo']->value['description'];?>
</textarea>
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