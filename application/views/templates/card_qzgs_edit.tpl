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
						<h3>编辑卡牌</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>card/qzgs_list">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>card/qzgs_edit?id=<{$id}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">卡牌名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="name" value="<{$data.name}>">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">职业分类</label>
									<div class="controls">
								  		<select class="input-xlarge focused" name="type">
											<option value="">选择职业分类</option>
											<{foreach from=$career key=k item=i}>
											<option value="<{$k}>" <{if $k==$data.type}>selected<{/if}>><{$i}></option>
											<{/foreach}>
								  		</select>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">品质</label>
									<div class="controls">
								  		<select class="input-xlarge focused" name="color">
											<option value="">选择品质</option>
											<{foreach from=$color key=k item=i}>
											<option value="<{$k}>" <{if $k==$data.color}>selected<{/if}>><{$i}></option>
											<{/foreach}>
								  		</select>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">职业名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="career" value="<{$data.career}>">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">icon</label>
									<div class="controls">
								  		<script id="sicon" name="sicon" type="text/plain"><{$data.sicon}></script>
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
								  		<script id="bicon" name="bicon" type="text/plain"><{$data.bicon}></script>
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
										<input type="radio" name="sex" value="1" <{if $data.sex==1}>checked<{/if}>> 男&nbsp;&nbsp;
										<input type="radio" name="sex" value="2" <{if $data.sex==2}>checked<{/if}>> 女&nbsp;&nbsp;
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">资质</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="star" value="<{$data.star}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">战队</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="team" value="<{$data.team}>">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">操作者</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="operator" value="<{$data.operator}>">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">生命值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="life" value="<{$data.life}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">物理值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="physics" value="<{$data.physics}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">魔法值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="magic" value="<{$data.magic}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">抗性值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="resistance" value="<{$data.resistance}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">防御值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="defense" value="<{$data.defense}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">闪避值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="avoid" value="<{$data.avoid}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">格挡值</label>
									<div class="controls">
										<input class="input-xlarge focused" type="text" name="parry" value="<{$data.parry}>" placeholder="请填写数字">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">卡牌介绍</label>
									<div class="controls">
										<textarea class="input-xlarge" rows="6" name="introduce"><{$data.introduce}></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">主动技能</label>
									<div class="controls">
										<textarea class="input-xlarge" rows="6" name="skill"><{$data.skill}></textarea>
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序 (0-127)</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" id="sort" name="sort" value="<{$data.sort}>">
								  		&nbsp;&nbsp;
								  		<b style="color:red;">(默认0，序号越大越靠前)</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <{if $data.status==1}>checked<{/if}>> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <{if $data.status==0}>checked<{/if}>> 不生效&nbsp;&nbsp;
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