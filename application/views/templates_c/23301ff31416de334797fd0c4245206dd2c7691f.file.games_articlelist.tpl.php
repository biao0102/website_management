<?php /* Smarty version Smarty-3.1.13, created on 2015-05-12 15:55:10
         compiled from "application/views/templates/games_articlelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20855907375526542c94c579-22394814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23301ff31416de334797fd0c4245206dd2c7691f' => 
    array (
      0 => 'application/views/templates/games_articlelist.tpl',
      1 => 1431417306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20855907375526542c94c579-22394814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5526542ca83094_70418923',
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
<?php if ($_valid && !is_callable('content_5526542ca83094_70418923')) {function content_5526542ca83094_70418923($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/gamelist">返回列表</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/setseo?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">SEO设置</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/settype?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">类型设置</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/makelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">单页生成</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/makealllist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">更新整站</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/makewap?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">更新WAP站</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
games/addarticle?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">添加文章</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/makeallacticle?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
">批量更新</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/articlelist?gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
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
					  		&nbsp;&nbsp;&nbsp;
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
									<th>查看</th>
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
									<td class="center"><?php if ($_smarty_tpl->tpl_vars['i']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_blank">查看</a><?php }else{ ?>无<?php }?></td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/editarticle?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="编辑"><i class="fa fa-edit icon-white"></i></a>&nbsp;&nbsp;
										<?php if ($_smarty_tpl->tpl_vars['i']->value['type']==1){?>
										<a class="btn btn-success" href="javascript:alert('轮播图不需要生成呦~');" data-rel="tooltip" data-original-title="生成"><i class="fa fa-star icon-white"></i></a>&nbsp;&nbsp;
										<?php }else{ ?>
										<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/makearticle?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&gameid=<?php echo $_smarty_tpl->tpl_vars['gameid']->value;?>
" data-rel="tooltip" data-original-title="生成"><i class="fa fa-star icon-white"></i></a>&nbsp;&nbsp;
										<?php }?>
										<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
games/delarticle?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
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
games/get_childtype_by_ajax',
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