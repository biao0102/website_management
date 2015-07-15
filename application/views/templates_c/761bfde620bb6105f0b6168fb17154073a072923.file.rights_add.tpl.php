<?php /* Smarty version Smarty-3.1.13, created on 2015-04-09 18:28:37
         compiled from "application/views/templates/rights_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7368874125526545520e538-93694206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '761bfde620bb6105f0b6168fb17154073a072923' => 
    array (
      0 => 'application/views/templates/rights_add.tpl',
      1 => 1427358801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7368874125526545520e538-93694206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'parentmenu' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5526545525f9f7_86905187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526545525f9f7_86905187')) {function content_5526545525f9f7_86905187($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加权限</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/add" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">权限名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="rightsname" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Action</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="action"></textarea>
									</div>
							  	</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择所属父级菜单</label>
									<div class="controls">
										<select name="parentid" class="input-xlarge" id="parentid" onchange=ShowChildMenu()>
											<option value="">选择所属父级菜单</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parentmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['menuid'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['menuname'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="control-group" style="display:none;" id="childmenu">
									<label class="control-label" for="focusedInput">选择所属子级菜单</label>
									<div class="controls">
										<select name="menuid" class="input-xlarge" id="menuid">
											<option value="">选择所属子级菜单</option>
										</select>
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
<script>
	function ShowChildMenu()
	{
		$("#childmenu").css("display","none");

		var parentid = $('#parentid').val();
		if(parentid != '')
		{
			$.ajax({
				type : 'GET',
				url : '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/get_childmenu_by_ajax?parentid=' + parentid,
				dataType : 'jsonp',
				data : {},
				success : function(data)
				{
					if(data.parentmenu == 1)
					{
						var len = data.childmenu.length;
						if(len > 0)
						{
							var str = '<option value="">选择所属子级菜单</option>';
							$.each(data.childmenu,function(n,value){   
								 str += '<option value="' + value.menuid + '">' + value.menuname + '</option>';
							}); 
							$("#menuid").html(str);
							$("#childmenu").css("display","block");
						}else{
							return false;
						}
					}
					return false;
				}
			});
		}
	}
 </script>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>