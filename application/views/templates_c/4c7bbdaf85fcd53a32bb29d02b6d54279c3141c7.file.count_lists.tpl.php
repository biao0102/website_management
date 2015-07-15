<?php /* Smarty version Smarty-3.1.13, created on 2015-05-28 16:58:32
         compiled from "application/views/templates/count_lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3816606495566d8b89ff233-28056276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c7bbdaf85fcd53a32bb29d02b6d54279c3141c7' => 
    array (
      0 => 'application/views/templates/count_lists.tpl',
      1 => 1432803491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3816606495566d8b89ff233-28056276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'total' => 0,
    'data' => 0,
    'i' => 0,
    'stime' => 0,
    'etime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5566d8b8a85ee1_79165655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5566d8b8a85ee1_79165655')) {function content_5566d8b8a85ee1_79165655($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>下载统计</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">返回列表</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>渠道号</th>
									<th>IOS下载</th>
					            	<th>越狱下载</th>
					            	<th>安卓下载</th>
					            	<th>下载总数</th>
					            	<th>下载明细</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="center">渠道合计</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['total']->value['ios'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['total']->value['yy'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['total']->value['android'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['total']->value['total'];?>
</td>
									<td class="center">空</td>
								</tr>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['cid'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['ios'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['yy'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['android'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['total'];?>
</td>
									<td class="center"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/count/downdetail?games=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['i']->value['cid'];?>
&stime=<?php echo $_smarty_tpl->tpl_vars['stime']->value;?>
&etime=<?php echo $_smarty_tpl->tpl_vars['etime']->value;?>
">查看明细</a></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
				<!--<?php echo $_smarty_tpl->getSubTemplate ("page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
			</div>
		</div>
	</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>