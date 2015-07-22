<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 08:30:49
         compiled from "application/views/templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8304216455aa0abf3cdfc8-34295932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624aee4ddd80f6a0390166f17f94c29ba4eb3119' => 
    array (
      0 => 'application/views/templates/home.tpl',
      1 => 1437406954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8304216455aa0abf3cdfc8-34295932',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa0abfd893b1_89384895',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa0abfd893b1_89384895')) {function content_55aa0abfd893b1_89384895($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
	      	<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>逍游天下科技有限公司简介</h3>
					</div>
					<div class="widget-content">
						<p>逍游天下欢迎您</p>
						<p>本后台有问题联系方式 ：Email ( yuanshiwei@xiaoyou.com )</p>
			<!-- 			<br><br>
						<p></p>
						<p>新闻列表<a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-th-list icon-white"></i></a>
						</p>
						<p><a href="javascript:void(0);" class="btn btn-mini btn-info">SEO设置</a></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p> -->
					</div>
				</div>
		    </div> 
	    </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>