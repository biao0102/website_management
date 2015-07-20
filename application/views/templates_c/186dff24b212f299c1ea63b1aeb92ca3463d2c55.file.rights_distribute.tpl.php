<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 21:51:21
         compiled from "application/views/templates/rights_distribute.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184154439555aa59d953bb61-40108649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '186dff24b212f299c1ea63b1aeb92ca3463d2c55' => 
    array (
      0 => 'application/views/templates/rights_distribute.tpl',
      1 => 1430129832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184154439555aa59d953bb61-40108649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'userid' => 0,
    'rightslist' => 0,
    'p' => 0,
    'userrights' => 0,
    'c' => 0,
    'gamelist' => 0,
    'i' => 0,
    'usergames' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa59d9c676a0_50246896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa59d9c676a0_50246896')) {function content_55aa59d9c676a0_50246896($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/gw/application/libraries/Smarty/plugins/modifier.truncate.php';
?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/distribute?userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">

			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-signal" style="padding-left:20px;"></i>
						<h3>权限分配</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/lists">返回列表</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="selectAll">全选</a>
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="unSelect">反选</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>权限ID</th>
									<th>父权限</th>
									<th>子权限</th>
									<th>权限名</th>
									<th>所属菜单名</th>
									<th>Action</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rightslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
								<tr style="color:blue;">
									<td><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
</td>
									<td>√</td>
									<td></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsname'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['menuname'];?>
</td>
									<td class="center"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p']->value['parent']['action'],20);?>
</td>
									<td class="center">
										<input type="checkbox" name="rights[]" class="parent" id="rights<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'],$_smarty_tpl->tpl_vars['userrights']->value)){?>checked<?php }?> />
									</td>
								</tr>

								<?php if ($_smarty_tpl->tpl_vars['p']->value['child']){?>
								<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['c']->value['rightsid'];?>
</td>
									<td></td>
									<td>√</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['rightsname'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['menuname'];?>
</td>
									<td class="center"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['c']->value['action'],20);?>
</td>
									<td class="center">
										<input type="checkbox" name="rights[]" class="child rights<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
 child<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['rightsid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['rightsid'];?>
"  <?php if (in_array($_smarty_tpl->tpl_vars['c']->value['rightsid'],$_smarty_tpl->tpl_vars['userrights']->value)){?>checked<?php }?> />
									</td>
								</tr>	
								<?php } ?>
								<?php }?>

							<?php } ?>		
							</tbody>
						</table>	
					</div>
				</div>
				<!--<?php echo $_smarty_tpl->getSubTemplate ("page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
			</div>


			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-signal" style="padding-left:20px;"></i>
						<h3>官网分配</h3>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>游戏ID</th>
									<th>游戏名称</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($_smarty_tpl->tpl_vars['gamelist']->value){?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gamelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
									<td class="center">
										<input type="checkbox" name="game[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['usergames']->value&&in_array($_smarty_tpl->tpl_vars['i']->value['id'],$_smarty_tpl->tpl_vars['usergames']->value)){?>checked<?php }?> />
									</td>
								</tr>	
							<?php } ?>
							<?php }?>		
							</tbody>
						</table>	
					</div>
				</div>
				<!--<?php echo $_smarty_tpl->getSubTemplate ("page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
			</div>


			<div style="text-align:center;">
				<button name="submit" type="submit" value="submit" class="btn btn-primary">提交</button>
			</div>
		</form>
		</div>
	</div>
</div>

<script>
	$(function(){

		$("#selectAll").click(function(){ $("input[name='rights[]']").each(function(){ this.checked = true; }); });
		$("#unSelect").click(function(){ $("input[name='rights[]']").attr("checked", false); });

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