<?php /* Smarty version Smarty-3.1.13, created on 2015-06-02 13:25:53
         compiled from "application/views/templates/card_qzgs_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311448167556c31e4978305-14437282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef48f3e70f2efd5f93097550f271ac558450626c' => 
    array (
      0 => 'application/views/templates/card_qzgs_list.tpl',
      1 => 1433222739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311448167556c31e4978305-14437282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_556c31e4a01e80_80212506',
  'variables' => 
  array (
    'baseurl' => 0,
    'list' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c31e4a01e80_80212506')) {function content_556c31e4a01e80_80212506($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>卡牌列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
card/qzgs_add">添加卡牌</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>卡牌名称</th>
									<th>职业名称</th>
									<th>职业分类</th>
									<th>品质</th>
									<th>资质（星级*2）</th>
									<th>排序</th>
									<th>状态</th>
									<th>时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($_smarty_tpl->tpl_vars['list']->value){?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['career'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['type_name'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['color_name'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['star'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['sort'];?>
</td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0){?><span style="color:red;">未生效</span><?php }else{ ?>已生效<?php }?></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
card/qzgs_edit?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
card/qzgs_del?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
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
		</div>
	</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>