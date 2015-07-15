<?php /* Smarty version Smarty-3.1.13, created on 2015-06-02 13:32:33
         compiled from "application/views/templates/article_articlelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163953538755522515f3a9b5-41892598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452e6c27e2f5b83b52fd7a1328aa58774674b078' => 
    array (
      0 => 'application/views/templates/article_articlelist.tpl',
      1 => 1433222905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163953538755522515f3a9b5-41892598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_555225160fe3b8_79796346',
  'variables' => 
  array (
    'baseurl' => 0,
    'gameid' => 0,
    'typeArr' => 0,
    'i' => 0,
    'articlelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555225160fe3b8_79796346')) {function content_555225160fe3b8_79796346($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
    <div class="container">
		<div class="row">

			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
					<!-- 
						<i class="fa fa-search" style="padding-left:20px"></i>
						<h3>搜索操作</h3> 
					-->
						&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
game/gamelist">返回列表</a>
						&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
game/setseo?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">SEO设置</a>
						&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
type/settype?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">类型设置</a>
						&nbsp;&nbsp;				
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
count/lists?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">下载统计</a>
						&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
makeshtml/makealllist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">更新整站</a>
						&nbsp;&nbsp;
						<?php if ($_smarty_tpl->tpl_vars['gameid']->value==10002){?>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
card/qzgs_list">卡牌管理</a>
						<?php }?>
					</div>
					<div class="widget-content">						
						<div class="control-group">
							<form class="form-horizontal" action="javascript:void(0);" method="GET">
								<div class="control-group">
									<input name="submit" type="submit" value="图片上传" id="submit" class="btn btn-primary">&nbsp;&nbsp;
							  		<input type="text" name="image" id="image"  class="input-xlarge focused"  style="width:330px;display:none;">
							  		<input type="file" name="file" id="file" style="display:none;">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>文章列表</h3>
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/addarticle?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">添加文章</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
makeshtml/makeallacticle?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">批量更新</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" method="GET">
							<input type="hidden" name="gameid" value="<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">
					  		<select class="input-large focused" name="type" id="type">
								<option value="">请选择搜索类型</option>
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typeArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['typeid'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['typename'];?>
</option>
								<?php } ?>
					  		</select>
					  		&nbsp;&nbsp;&nbsp;
							<select class="input-large focused" name="ctype" id="ctype" style="display:none;">
								<option value="">请选择子类型</option>
					  		</select>
							<input name="submit" type="submit" value="搜索" class="btn btn-primary">
						</form>
						<hr>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>标题</th>
									<th>类型</th>
									<th>排序</th>
									<th>状态</th>
									<th>查看(WEB/WAP)</th>
									<th>时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($_smarty_tpl->tpl_vars['articlelist']->value){?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articlelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['typename'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['sort'];?>
</td>
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0){?><span style="color:red;">未生效</span><?php }else{ ?>已生效<?php }?></td>
									<td class="center">
										<?php if ($_smarty_tpl->tpl_vars['i']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">WEB</a><?php }else{ ?>无<?php }?> | <?php if ($_smarty_tpl->tpl_vars['i']->value['wapurl']){?><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['wapurl'];?>
" target="_blank">WAP</a><?php }else{ ?>无<?php }?>
									</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/editarticle?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="编辑"><i class="fa fa-edit icon-white"></i></a>&nbsp;&nbsp;
										<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==1){?>
										<a class="btn btn-success" href="javascript:alert('轮播图不需要生成呦~');" data-rel="tooltip" data-original-title="生成"><i class="fa fa-star icon-white"></i></a>&nbsp;&nbsp;
										<?php }else{ ?>
										<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
makeshtml/makearticle?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="生成"><i class="fa fa-star icon-white"></i></a>&nbsp;&nbsp;
										<?php }?>
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
article/delarticle?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="删除" onclick="if(confirm('确定删除?')==false)return false;"><i class="fa fa-trash-o icon-white"></i></a>
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
 <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/js/ajaxfileupload.js"></script>
<script>
	$('#type').change(function(){
		var typeid = $(this).val();
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
	});

	// 图片上传
	$('#submit').click(function(){
		$('#file').trigger("click");
	});

	$('#file').change(function(){
		var filename = $('#file').val();
		$('#image').val(filename);
 	 	$.ajaxFileUpload({
            url:'<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
upload',
            fileElementId:'file',
            dataType: 'json',
	   		data: { gameid:'<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
'}, 
            success: function (data, status){
            	if(data.stat == 1)
            	{
            		$('#file').val('');
            		$('#image').val(data.url);
            		$('#image').show();
            		alert(data.str);
            	} else {
            		$('#file').val('');
            		$('#image').val('');
            		alert(data.str);
            	}
            }
        });		
		
	});
					
</script>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>