 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
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
						<a class="btn btn-mini btn-info" href="<{$baseurl}>game/gamelist">返回列表</a>
						&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<{$baseurl}>game/setseo?gameid=<{$gameid}>">SEO设置</a>
						&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<{$baseurl}>type/settype?gameid=<{$gameid}>">类型设置</a>
						&nbsp;&nbsp;				
						<a class="btn btn-mini btn-info" href="<{$baseurl}>count/lists?gameid=<{$gameid}>">下载统计</a>
						&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<{$baseurl}>makeshtml/makealllist?gameid=<{$gameid}>">更新整站</a>
						&nbsp;&nbsp;
						<{if $gameid == 10002}>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>card/qzgs_list">卡牌管理</a>
						<{/if}>
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
						<a class="btn btn-mini btn-info" href="<{$baseurl}>article/addarticle?gameid=<{$gameid}>">添加文章</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<{$baseurl}>makeshtml/makeallacticle?gameid=<{$gameid}>">批量更新</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>article/articlelist?gameid=<{$gameid}>" method="GET">
							<input type="hidden" name="gameid" value="<{$gameid}>">
					  		<select class="input-large focused" name="type" id="type">
								<option value="">请选择搜索类型</option>
								<{foreach from=$typeArr item=i}>
								<option value="<{$i.typeid}>"><{$i.typename}></option>
								<{/foreach}>
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
							<{if $articlelist}>
							<{foreach from=$articlelist item=i}>
								<tr>
									<td><{$i.id}></td>
									<td class="center"><{$i.title}></td>
									<td class="center"><{$i.typename}></td>
									<td class="center"><{$i.sort}></td>
									<td class="center"><{if $i.status == 0}><span style="color:red;">未生效</span><{else}>已生效<{/if}></td>
									<td class="center">
										<{if $i.url}><a href="<{$i.url}>" target="_blank">WEB</a><{else}>无<{/if}> | <{if $i.wapurl}><a href="<{$i.wapurl}>" target="_blank">WAP</a><{else}>无<{/if}>
									</td>
									<td class="center"><{$i.time}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>article/editarticle?id=<{$i.id}>&gameid=<{$gameid}>" data-rel="tooltip" data-original-title="编辑"><i class="fa fa-edit icon-white"></i></a>&nbsp;&nbsp;
										<{if $i.type==1}>
										<a class="btn btn-success" href="javascript:alert('轮播图不需要生成呦~');" data-rel="tooltip" data-original-title="生成"><i class="fa fa-star icon-white"></i></a>&nbsp;&nbsp;
										<{else}>
										<a class="btn btn-success" href="<{$baseurl}>makeshtml/makearticle?id=<{$i.id}>&gameid=<{$gameid}>" data-rel="tooltip" data-original-title="生成"><i class="fa fa-star icon-white"></i></a>&nbsp;&nbsp;
										<{/if}>
										<a class="btn btn-danger" href="<{$baseurl}>article/delarticle?id=<{$i.id}>&gameid=<{$gameid}>" data-rel="tooltip" data-original-title="删除" onclick="if(confirm('确定删除?')==false)return false;"><i class="fa fa-trash-o icon-white"></i></a>
									</td>
								</tr>
							<{/foreach}>
							<{/if}>
							</tbody>
						</table>
					</div>
				</div>
				<!--<{include file="page.tpl"}>-->
			</div>
		</div>
	</div>
</div>
 <script type="text/javascript" src="<{$baseurl}>static/js/ajaxfileupload.js"></script>
<script>
	$('#type').change(function(){
		var typeid = $(this).val();
		var html = '<option value="">请选择子类型</option>';
		$.ajax({
            type : 'GET',
            url : '<{$baseurl}>type/get_childtype_by_ajax',
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
            url:'<{$baseurl}>upload',
            fileElementId:'file',
            dataType: 'json',
	   		data: { gameid:'<{$gameid}>'}, 
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
 <{include file="footer.tpl"}>