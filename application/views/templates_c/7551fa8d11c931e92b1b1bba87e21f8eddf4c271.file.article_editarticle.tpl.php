<?php /* Smarty version Smarty-3.1.13, created on 2015-05-15 11:03:14
         compiled from "application/views/templates/article_editarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114619559555522616b5f2a2-86142479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7551fa8d11c931e92b1b1bba87e21f8eddf4c271' => 
    array (
      0 => 'application/views/templates/article_editarticle.tpl',
      1 => 1431502149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114619559555522616b5f2a2-86142479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55522616c30292_22863688',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'id' => 0,
    'typeArr' => 0,
    'typeinfo' => 0,
    'i' => 0,
    'childtype' => 0,
    'article' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55522616c30292_22863688')) {function content_55522616c30292_22863688($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/js/ueditor/ueditor.config.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/js/ueditor/ueditor.all.min.js"></script>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>编辑文章</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/editarticle?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型</label>
									<div class="controls">
								  		<select class="input-xlarge focused" name="type" id="type">
											<option value="">选择类型</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
											<?php if ($_smarty_tpl->tpl_vars['typeinfo']->value['ctype']!=0){?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['typeid'];?>
" <?php if ($_smarty_tpl->tpl_vars['typeinfo']->value['ctype']==$_smarty_tpl->tpl_vars['i']->value['typeid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['typename'];?>
</option>
											<?php }else{ ?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['typeid'];?>
" <?php if ($_smarty_tpl->tpl_vars['typeinfo']->value['typeid']==$_smarty_tpl->tpl_vars['i']->value['typeid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['typename'];?>
</option>
											<?php }?>
											<?php } ?>
								  		</select>
								  		&nbsp;&nbsp;
								  		<?php if ($_smarty_tpl->tpl_vars['typeinfo']->value['ctype']!=0){?>
										<select class="input-large focused" name="ctype" id="ctype">
											<option value="">请选择子类型</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['childtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['typeid'];?>
" <?php if ($_smarty_tpl->tpl_vars['typeinfo']->value['typeid']==$_smarty_tpl->tpl_vars['i']->value['typeid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['typename'];?>
</option>
											<?php } ?>
								  		</select>
								  		&nbsp;&nbsp;
								  		<?php }?>
								  		<b style="color:red;">(必选)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">标题</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(必填)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">小图</label>
									<div class="controls">
										<b style="color:red;">(选填：用于轮播图、截图、壁纸、视频列表小图)</b>
								  		<script id="image" name="image" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
</script>
										<script type="text/javascript">
											var uepic = UE.getEditor('image', {
													toolbars: [
														['simpleupload','source']
													],
													serverUrl: "/static/js/ueditor/php/controller.php?filename=<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
",
													initialFrameWidth: 400,
													initialFrameHeight: 120
												});
										</script>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">内容</label>
									<div class="controls">
										<b style="color:red;">(选填：请在粘贴内容前，先粘贴到记事本格式化，在拷贝出来，防止样式冲突。)</b>
										<script id="content" name="content" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</script>
										<script type="text/javascript">
											var uecont = UE.getEditor('content', {
												toolbars: [['fullscreen', 'source', 'undo', 'redo','fontfamily','fontsize','bold','forecolor', 'backcolor', 'italic','underline','|','removeformat','formatmatch','simpleupload','imagecenter','|','justifyleft','justifyright','justifycenter','justifyjustify','insertorderedlist', 'insertunorderedlist','|','selectall', 'cleardoc','link','unlink','|','emotion','spechars','searchreplace','|','fontborder', 'strikethrough', 'superscript', 'subscript',  'autotypeset', 'pasteplain', ]],
												serverUrl: "/static/js/ueditor/php/controller.php?filename=<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
",
												initialFrameWidth: 800,
												initialFrameHeight: 300
											});
										</script>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">外链</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="outlink" name="outlink" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['outlink'];?>
">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(选填：优先级高于文章生成)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序 (0-127)</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="sort" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sort'];?>
">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(默认0，序号越大越靠前)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['status']==1){?>checked<?php }?>> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['article']->value['status']==0){?>checked<?php }?>> 不生效&nbsp;&nbsp;
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
      	</div>
	</div>
</div>
<script>
	$(function(){

		$("#type").change(function(){
			typeid = $(this).val();
			getChildType();
		});


		function getChildType()
		{
			var html = '<option value="">请选择子类型</option>';
			$.ajax({
	            type : 'GET',
	            url : '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
type/get_childtype_by_ajax',
	            dataType : 'jsonp',
	            data : {"typeid":typeid},
	            success : function(data)
	            {
	            	if (data.stat == 1)
	            	{
		            	$.each( data.data , function(k, v){
		            		html += '<option value="'+ v.typeid +'">'+ v.typename +'</option>';
						});
						$('#ctype').html(html);
						$('#ctype').show();
	            	} else {

	            		$('#ctype').hide();
	            	}

	            }
	   		});
		}

	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>