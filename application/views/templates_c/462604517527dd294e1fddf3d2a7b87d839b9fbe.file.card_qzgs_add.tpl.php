<?php /* Smarty version Smarty-3.1.13, created on 2015-06-02 11:41:54
         compiled from "application/views/templates/card_qzgs_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240952162556d13e4bdca11-86962747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462604517527dd294e1fddf3d2a7b87d839b9fbe' => 
    array (
      0 => 'application/views/templates/card_qzgs_add.tpl',
      1 => 1433216484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240952162556d13e4bdca11-86962747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_556d13e4c52222_73607740',
  'variables' => 
  array (
    'baseurl' => 0,
    'career' => 0,
    'k' => 0,
    'i' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d13e4c52222_73607740')) {function content_556d13e4c52222_73607740($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						<h3>添加卡牌</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
card/qzgs_list">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
card/qzgs_add" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">卡牌名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="name" value="">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">职业分类</label>
									<div class="controls">
								  		<select class="input-xlarge focused" name="type">
											<option value="">选择职业分类</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['career']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
											<?php } ?>
								  		</select>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">品质</label>
									<div class="controls">
								  		<select class="input-xlarge focused" name="color">
											<option value="">选择品质</option>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['color']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
											<?php } ?>
								  		</select>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">职业名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="career" value="">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">icon</label>
									<div class="controls">
								  		<script id="sicon" name="sicon" type="text/plain"></script>
										<script type="text/javascript">
											var uepic = UE.getEditor('sicon', {
													toolbars: [
														['simpleupload','source']
													],
													serverUrl: "/static/js/ueditor/php/controller.php?filename=qzgs",
													initialFrameWidth: 400,
													initialFrameHeight: 120
												});
										</script>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">大图</label>
									<div class="controls">
								  		<script id="bicon" name="bicon" type="text/plain"></script>
										<script type="text/javascript">
											var uepic = UE.getEditor('bicon', {
													toolbars: [
														['simpleupload','source']
													],
													serverUrl: "/static/js/ueditor/php/controller.php?filename=qzgs",
													initialFrameWidth: 400,
													initialFrameHeight: 120
												});
										</script>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">性别</label>
									<div class="controls">
										<input type="radio" name="sex" value="1" checked> 男&nbsp;&nbsp;
										<input type="radio" name="sex" value="2"> 女&nbsp;&nbsp;
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">资质</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="star" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">战队</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="team" value="">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">操作者</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="operator" value="">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">生命值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="life" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">物理值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="physics" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">魔法值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="magic" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">抗性值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="resistance" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">防御值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="defense" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">闪避值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="avoid" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">格挡值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="parry" value="" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">卡牌介绍</label>
									<div class="controls">
										<textarea class="input-xlarge" rows="6" name="introduce"></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">主动技能</label>
									<div class="controls">
										<textarea class="input-xlarge" rows="6" name="skill"></textarea>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序 (0-127)</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="sort" name="sort" value="0">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(默认0，序号越大越靠前)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" checked> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0"> 不生效&nbsp;&nbsp;
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
		// 联动取子类型
		var typeid = $('#type').val();
		getChildType();

		$("#type").change(function(){

			// 初始化表单
			$("#title,#outlink,#ctype").val('');
			$("#sort").val('0');
			uecont.execCommand('cleardoc');
			uecont.execCommand('clearlocaldata');
			uepic.execCommand('cleardoc');
			uepic.execCommand('clearlocaldata');

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