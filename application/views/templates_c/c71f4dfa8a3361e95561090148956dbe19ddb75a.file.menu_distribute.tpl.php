<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 21:51:35
         compiled from "application/views/templates/menu_distribute.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49802346555aa59e74893f1-53667208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c71f4dfa8a3361e95561090148956dbe19ddb75a' => 
    array (
      0 => 'application/views/templates/menu_distribute.tpl',
      1 => 1427358757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49802346555aa59e74893f1-53667208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'userid' => 0,
    'menulist' => 0,
    'p' => 0,
    'usermenu' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa59e76cb314_40088049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa59e76cb314_40088049')) {function content_55aa59e76cb314_40088049($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>菜单分配</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/lists">返回列表</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="selectAll">全选</a>
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="unSelect">反选</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/distribute?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>菜单ID</th>
										<th>父级</th>
										<th>子级</th>
										<th>菜单名</th>
										<th>Action</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
								<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menulist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
									<tr style="color:blue;">
										<td><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
</td>
										<td class="center">√</td>
										<td class="center"></td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuname'];?>
</td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['action'];?>
</td>
										<td class="center" class="qwe">
											<input type="checkbox" name="menu[]" class="parent" id="menu<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['p']->value['parent']['menuid'],$_smarty_tpl->tpl_vars['usermenu']->value)){?>checked<?php }?> />
										</td>
									</tr>
									
									<?php if ($_smarty_tpl->tpl_vars['p']->value['child']){?>
									<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['c']->value['menuid'];?>
</td>
										<td class="center"></td>
										<td class="center">√</td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['menuname'];?>
</td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['action'];?>
</td>
										<td class="center">
											<input type="checkbox" name="menu[]" class="child menu<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
 child<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['menuid'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['c']->value['menuid'],$_smarty_tpl->tpl_vars['usermenu']->value)){?>checked<?php }?> />
										</td>
									</tr>
									<?php } ?>
									<?php }?>

								<?php } ?>		
								</tbody>
							</table>
							<div style="text-align:center;">
								<button name="submit" type="submit" value="submit" class="btn btn-primary">提交</button>
							</div>
						</form>
					</div>
				</div>
				<!--<?php echo $_smarty_tpl->getSubTemplate ("page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
			</div>
		</div>
	</div>
</div>

<script>
	$(function(){
		
		$("#selectAll").click(function(){ $("input[name='menu[]']").each(function(){ this.checked = true; }); });
		$("#unSelect").click(function(){ $("input[name='menu[]']").attr("checked", false); });

		$(".parent").change(function(){
			id = $(this).attr("id");
			if($(this).is(":checked"))
			{
				$("." + id).each(function(){ this.checked = true; });
			}else{
				$("." + id).removeAttr("checked");
			}
		}); 

		$(".child").change(function(){
			var parentId = $(this).attr("class").split(" ")[1];
			var childClass = $(this).attr("class").split(" ")[2];
			if($('.' + childClass).is(":checked"))
			{
				$("#" + parentId).each(function(){ this.checked = true; });
			}else{
				$("#" + parentId).removeAttr("checked");
			}
		});

	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>