<?php /* Smarty version Smarty-3.1.13, created on 2015-05-07 17:30:51
         compiled from "application/views/templates/games_settype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1587498849554b1c0e861af7-83922993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1457841a6e483d62f116eb794d5068a4f6e7bb0b' => 
    array (
      0 => 'application/views/templates/games_settype.tpl',
      1 => 1430987264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587498849554b1c0e861af7-83922993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_554b1c0e905a31_85887917',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'typelist' => 0,
    'p' => 0,
    'gametype' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554b1c0e905a31_85887917')) {function content_554b1c0e905a31_85887917($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>类型设置</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">返回列表</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="selectAll">全选</a>
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="unSelect">反选</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/settype?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>类型ID</th>
										<th>父级</th>
										<th>子级</th>
										<th>类型名</th>
										<th>描述</th>
										<th>状态</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
								<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
									<tr style="color:blue;">
										<td><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
</td>
										<td class="center">√</td>
										<td class="center"></td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typename'];?>
</td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['summary'];?>
</td>
										<td class="center"><?php if ($_smarty_tpl->tpl_vars['p']->value['parent']['status']==1){?>生效<?php }else{ ?><span style="color:red;">失效<span><?php }?></td>
										<td class="center">
											<input type="checkbox" name="type[]" class="parent" id="type<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['p']->value['parent']['typeid'],$_smarty_tpl->tpl_vars['gametype']->value)){?>checked<?php }?> />
										</td>
									</tr>
									
									<?php if ($_smarty_tpl->tpl_vars['p']->value['child']){?>
									<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['c']->value['typeid'];?>
</td>
										<td class="center"></td>
										<td class="center">√</td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['typename'];?>
</td>
										<td class="center"><?php echo $_smarty_tpl->tpl_vars['c']->value['summary'];?>
</td>
										<td class="center"><?php if ($_smarty_tpl->tpl_vars['c']->value['status']==1){?>生效<?php }else{ ?><span style="color:red;">失效<span><?php }?></td>
										<td class="center">
											<input type="checkbox" name="type[]" class="child type<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
 child<?php echo $_smarty_tpl->tpl_vars['p']->value['parent']['typeid'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['typeid'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['c']->value['typeid'],$_smarty_tpl->tpl_vars['gametype']->value)){?>checked<?php }?> />
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
		
		$("#selectAll").click(function(){ $("input[name='type[]']").each(function(){ this.checked = true; }); });
		$("#unSelect").click(function(){ $("input[name='type[]']").attr("checked", false); });

		$(".parent").change(function(){
			id = $(this).attr("id");
			if($(this).is(":checked"))
			{
				$("." + id).each(function(){ this.checked = true; });
			} else {
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