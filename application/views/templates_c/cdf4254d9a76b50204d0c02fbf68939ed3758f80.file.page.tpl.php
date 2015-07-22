<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 10:03:59
         compiled from "application/views/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210188614255aa1dd8e4cf26-34071335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf4254d9a76b50204d0c02fbf68939ed3758f80' => 
    array (
      0 => 'application/views/templates/page.tpl',
      1 => 1437406954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210188614255aa1dd8e4cf26-34071335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1dd8f028c0_41548547',
  'variables' => 
  array (
    'pages' => 0,
    'page_url' => 0,
    'k' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1dd8f028c0_41548547')) {function content_55aa1dd8f028c0_41548547($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pages']->value){?>
	<div class="pagination pagination-right">
	<ul>
	<?php if ($_smarty_tpl->tpl_vars['pages']->value['prev']>-1){?>                            
    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
&start=<?php echo $_smarty_tpl->tpl_vars['pages']->value['prev'];?>
">上一页</a></li>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['k']->value!='prev'&&$_smarty_tpl->tpl_vars['k']->value!='next'){?>
            <?php if ($_smarty_tpl->tpl_vars['k']->value=='omitf'||$_smarty_tpl->tpl_vars['k']->value=='omita'){?>
                <li><a href="javascript:void(0);">…</a></li>
            <?php }elseif($_smarty_tpl->tpl_vars['k']->value!='numtotal'){?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value>-1){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
&start=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></li>
				<?php }else{ ?>
					<li><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></li>
				<?php }?>
			<?php }?>   
		<?php }?>                             
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['pages']->value['next']>-1){?>                            
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['page_url']->value;?>
&start=<?php echo $_smarty_tpl->tpl_vars['pages']->value['next'];?>
">下一页</a></li>
    <?php }?>
    </ul>
</div>                
<?php }?>
<?php }} ?>