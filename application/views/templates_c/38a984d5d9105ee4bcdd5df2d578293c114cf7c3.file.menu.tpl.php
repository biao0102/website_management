<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 08:30:49
         compiled from "application/views/templates/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160616790155aa0abff091c8-95533255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a984d5d9105ee4bcdd5df2d578293c114cf7c3' => 
    array (
      0 => 'application/views/templates/menu.tpl',
      1 => 1437406954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160616790155aa0abff091c8-95533255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa0ac00abfe0_67561725',
  'variables' => 
  array (
    'menu' => 0,
    'i' => 0,
    'baseurl' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa0ac00abfe0_67561725')) {function content_55aa0ac00abfe0_67561725($_smarty_tpl) {?><!--菜单开始-->
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
				<i class="icon-reorder"></i>
			</a>
			<div class="subnav-collapse collapse">
				<ul class="mainnav">
				<?php if ($_smarty_tpl->tpl_vars['menu']->value){?>
					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['i']->value['child']){?>
							<li class="dropdown <?php echo $_smarty_tpl->tpl_vars['i']->value['parent']['active'];?>
">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">  
									<i class="fa <?php echo $_smarty_tpl->tpl_vars['i']->value['parent']['style'];?>
"></i>
									<span><?php echo $_smarty_tpl->tpl_vars['i']->value['parent']['menuname'];?>
</span>
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
								<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['t']->value['action'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['menuname'];?>
</a></li>
								<?php } ?>
								</ul>
							</li>
						<?php }else{ ?>
							<li class="<?php echo $_smarty_tpl->tpl_vars['i']->value['parent']['active'];?>
">
								<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['parent']['action'];?>
">
									<i class="fa <?php echo $_smarty_tpl->tpl_vars['i']->value['parent']['style'];?>
"></i>
									<span><?php echo $_smarty_tpl->tpl_vars['i']->value['parent']['menuname'];?>
</span>
								</a>
							</li>
						<?php }?>
					<?php } ?>
				<?php }?>		
				</ul>
			</div>
		</div>
	</div>
</div>
<!--菜单结束-->
<?php }} ?>