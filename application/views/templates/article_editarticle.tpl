<{include file="header.tpl"}>
<{include file="menu.tpl"}>

<script src="<{$baseurl}>static/js/ueditor/ueditor.config.js"></script>
<script src="<{$baseurl}>static/js/ueditor/ueditor.all.min.js"></script>

<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>编辑文章</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>article/articlelist?gameid=<{$gameid}>">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>article/editarticle?gameid=<{$gameid}>&id=<{$id}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型</label>
									<div class="controls">
								  		<select class="input-xlarge focused" name="type" id="type">
											<option value="">选择类型</option>
											<{foreach from=$typeArr item=i}>
											<{if $typeinfo.ctype != 0}>
											<option value="<{$i.typeid}>" <{if $typeinfo.ctype == $i.typeid}>selected<{/if}>><{$i.typename}></option>
											<{else}>
											<option value="<{$i.typeid}>" <{if $typeinfo.typeid == $i.typeid}>selected<{/if}>><{$i.typename}></option>
											<{/if}>
											<{/foreach}>
								  		</select>
								  		&nbsp;&nbsp;
								  		<{if $typeinfo.ctype != 0}>
										<select class="input-large focused" name="ctype" id="ctype">
											<option value="">请选择子类型</option>
											<{foreach from=$childtype item=i}>
											<option value="<{$i.typeid}>" <{if $typeinfo.typeid == $i.typeid}>selected<{/if}>><{$i.typename}></option>
											<{/foreach}>
								  		</select>
								  		&nbsp;&nbsp;
								  		<{/if}>
								  		<b style="color:red;">(必选)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">标题</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="title" name="title" value="<{$article.title}>">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(必填)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">小图</label>
									<div class="controls">
										<b style="color:red;">(选填：用于轮播图、截图、壁纸、视频列表小图)</b>
								  		<script id="image" name="image" type="text/plain"><{$article.image}></script>
										<script type="text/javascript">
											var uepic = UE.getEditor('image', {
													toolbars: [
														['simpleupload','source']
													],
													serverUrl: "/static/js/ueditor/php/controller.php?filename=<{$domain}>",
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
										<script id="content" name="content" type="text/plain"><{$article.content}></script>
										<script type="text/javascript">
											var uecont = UE.getEditor('content', {
												toolbars: [['fullscreen', 'source', 'undo', 'redo','fontfamily','fontsize','bold','forecolor', 'backcolor', 'italic','underline','|','removeformat','formatmatch','simpleupload','imagecenter','|','justifyleft','justifyright','justifycenter','justifyjustify','insertorderedlist', 'insertunorderedlist','|','selectall', 'cleardoc','link','unlink','|','emotion','spechars','searchreplace','|','fontborder', 'strikethrough', 'superscript', 'subscript',  'autotypeset', 'pasteplain', ]],
												serverUrl: "/static/js/ueditor/php/controller.php?filename=<{$domain}>",
												initialFrameWidth: 800,
												initialFrameHeight: 300
											});
										</script>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">外链</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="outlink" name="outlink" value="<{$article.outlink}>">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(选填：优先级高于文章生成)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序 (0-127)</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="sort" name="sort" value="<{$article.sort}>">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(默认0，序号越大越靠前)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <{if $article.status == 1}>checked<{/if}>> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <{if $article.status == 0}>checked<{/if}>> 不生效&nbsp;&nbsp;
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
		}

	});
</script>

<{include file="footer.tpl"}>