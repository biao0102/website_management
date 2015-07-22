<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 18:14:10
         compiled from "application/views/templates/template_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22893221855aa26f29ed607-51514043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3b90df5fd5838dc8e6bbe52133ebba8c9ca18d' => 
    array (
      0 => 'application/views/templates/template_add.tpl',
      1 => 1434014587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22893221855aa26f29ed607-51514043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'vid' => 0,
    'splist' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa26f42eab33_01072310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa26f42eab33_01072310')) {function content_55aa26f42eab33_01072310($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span9">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加模板</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
template/lists?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
template/add?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
&vid=<?php echo $_smarty_tpl->tpl_vars['vid']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">模板名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="name" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">模板文件名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="filename" value="">.shtml
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型</label>
									<div class="controls">
										<input type="radio" name="type" value="1"> 页面&nbsp;&nbsp;
										<input type="radio" name="type" value="2" checked> 碎片&nbsp;&nbsp;
										<input type="radio" name="type" value="3"> 文章
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">模板内容</label>
									<div class="controls">
								  		<textarea class="input-xxlarge" rows="20" name="content" id="content"></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" checked> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0"> 失效&nbsp;&nbsp;
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
	    	<div class="span3">
      			<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-user"></i>
						<h3>碎片列表</h3>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr><th style="color:red;">点击添加碎片</th></tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr><td><a href="javascript:;" class="sp" data-value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
" style="text-decoration:none;"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a></td></tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
	      	</div>
      	</div>
	</div>
</div>
<script>
	// 在textarea光标处插入文本
  	(function($) {  
        $.fn  
            .extend({  
                insertContent : function(myValue, t) {  
                    var $t = $(this)[0];  
                    if (document.selection) { // ie  
                        this.focus();  
                        var sel = document.selection.createRange();  
                        sel.text = myValue;  
                        this.focus();  
                        sel.moveStart('character', -l);  
                        var wee = sel.text.length;  
                        if (arguments.length == 2) {  
                            var l = $t.value.length;  
                            sel.moveEnd("character", wee + t);  
                            t <= 0 ? sel.moveStart("character", wee - 2 * t  
                                    - myValue.length) : sel.moveStart(  
                                    "character", wee - t - myValue.length);  
                            sel.select();  
                        }  
                    } else if ($t.selectionStart  
                            || $t.selectionStart == '0') {  
                        var startPos = $t.selectionStart;  
                        var endPos = $t.selectionEnd;  
                        var scrollTop = $t.scrollTop;  
                        $t.value = $t.value.substring(0, startPos)  
                                + myValue  
                                + $t.value.substring(endPos,  
                                        $t.value.length);  
                        this.focus();  
                        $t.selectionStart = startPos + myValue.length;  
                        $t.selectionEnd = startPos + myValue.length;  
                        $t.scrollTop = scrollTop;  
                        if (arguments.length == 2) {  
                            $t.setSelectionRange(startPos - t,  
                                    $t.selectionEnd + t);  
                            this.focus();  
                        }  
                    } else {  
                        this.value += myValue;  
                        this.focus();  
                    }  
                }  
            })  
    })(jQuery); 

	$(document).ready(function() {
		$('.sp').click(function(e){
			e.preventDefault();
			var html = '';
			var tid = parseInt($(this).attr('data-value'));
			var name = $(this).attr('data-name');
			if (tid)
			{
				html += "<!--" + name + " start--><FEILIU><tag>{tid:" + tid + "}</tag></FEILIU><!--" + name + " end-->";
				$('#content').insertContent(html);
			} else {
				alert('该碎片不可用~');
			}
		});
	});

</script>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>






	<?php }} ?>