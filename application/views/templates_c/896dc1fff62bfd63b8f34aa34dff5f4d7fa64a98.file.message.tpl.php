<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 17:35:49
         compiled from "application/views/templates/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214209777055aa1df5b50b61-83394011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896dc1fff62bfd63b8f34aa34dff5f4d7fa64a98' => 
    array (
      0 => 'application/views/templates/message.tpl',
      1 => 1431502193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214209777055aa1df5b50b61-83394011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'url' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1df68878a4_19360093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1df68878a4_19360093')) {function content_55aa1df68878a4_19360093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
	#msgbox {text-align: center;}
	#msg  {font-size: 26px; color:red; font-weight: bold;}
	#time {font-size: 20px; color:blue;font-weight: bold;}
	#time span{color:red;font-size: 24px;font-weight: bold;}
</style>
<div class="main">
	<div class="container">
		<div class="row">
	      	<div class="span12">
				<div class="widget stacked">
					<div class="widget-header" style="text-align: center;">
						<i class="icon-cog"></i>
						<h3>消息提示</h3>
					</div>
					<div class="widget-content" id="msgbox">
						<p id="msg"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
						<p id="time"><span>2</span>s后跳转</p>
					</div>
				</div>
		    </div> 
	    </div>
	</div>
</div>
<script>
	var url = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
	console.log(url);
	var time = parseInt(<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
);
	var lefttime = time;
	if (time > 0)
	{
		var timeInterval = setInterval("showtime()",1000);	

		setTimeout(function(){
			if (url)
			{
				window.location.href = url;
			} else {
				window.location.href = "javascript:history.go(-1)";
			}
		}, time*1000);

	}

	function showtime()
	{
		if(lefttime > 0)
		{
			lefttime = lefttime - 1;
			$('#time span').html(lefttime);
		} else {
			clearInterval(timeInterval);
			return false;
		}
	}
</script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>