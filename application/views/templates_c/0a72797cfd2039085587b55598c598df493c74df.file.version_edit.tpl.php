<?php /* Smarty version Smarty-3.1.13, created on 2015-06-12 14:48:14
         compiled from "application/views/templates/version_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11626728305576b6ea5decc2-26163034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a72797cfd2039085587b55598c598df493c74df' => 
    array (
      0 => 'application/views/templates/version_edit.tpl',
      1 => 1434091663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11626728305576b6ea5decc2-26163034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5576b6ea63ea78_58329223',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'id' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5576b6ea63ea78_58329223')) {function content_5576b6ea63ea78_58329223($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加版本</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
version/lists?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
version/edit?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">版本名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="version" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['version'];?>
">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">平台</label>
									<div class="controls">
										<input type="radio" name="plat" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['plat']==1){?>checked<?php }?>> web&nbsp;&nbsp;
										<input type="radio" name="plat" value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['plat']==2){?>checked<?php }?>> wap
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']==1){?>checked<?php }?>> 线上&nbsp;&nbsp;
										<input type="radio" name="status" value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']==2){?>checked<?php }?>> 测试&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['status']==0){?>checked<?php }?>> 失效&nbsp;&nbsp;
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