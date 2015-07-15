<?php /* Smarty version Smarty-3.1.13, created on 2015-05-06 17:09:46
         compiled from "application/views/templates/games_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112910025255274a7ec1a777-57375424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b82034c319359775a540bf6feb4fd1548181ea' => 
    array (
      0 => 'application/views/templates/games_edit.tpl',
      1 => 1430903376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112910025255274a7ec1a777-57375424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55274a7ec77120_81536497',
  'variables' => 
  array (
    'baseurl' => 0,
    'id' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55274a7ec77120_81536497')) {function content_55274a7ec77120_81536497($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>编辑游戏</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/gamelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/editgame?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">游戏名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">二级域名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="domain" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['domain'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">页面生成列表</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="makelist"><?php echo $_smarty_tpl->tpl_vars['data']->value['makelist'];?>
</textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']==1){?>checked<?php }?>> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']==0){?>checked<?php }?>> 不生效&nbsp;&nbsp;
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