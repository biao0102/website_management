 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加权限</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>rights/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>rights/add" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">权限名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="rightsname" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Action</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="action"></textarea>
									</div>
							  	</div>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择所属父级菜单</label>
									<div class="controls">
										<select name="parentid" class="input-xlarge" id="parentid" onchange=ShowChildMenu()>
											<option value="">选择所属父级菜单</option>
											<{foreach from=$parentmenu item=i}>
												<option value="<{$i.menuid}>"><{$i.menuname}></option>
											<{/foreach}>
										</select>
									</div>
								</div>
								<div class="control-group" style="display:none;" id="childmenu">
									<label class="control-label" for="focusedInput">选择所属子级菜单</label>
									<div class="controls">
										<select name="menuid" class="input-xlarge" id="menuid">
											<option value="">选择所属子级菜单</option>
										</select>
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
	function ShowChildMenu()
	{
		$("#childmenu").css("display","none");

		var parentid = $('#parentid').val();
		if(parentid != '')
		{
			$.ajax({
				type : 'GET',
				url : '<{$baseurl}>menu/get_childmenu_by_ajax?parentid=' + parentid,
				dataType : 'jsonp',
				data : {},
				success : function(data)
				{
					if(data.parentmenu == 1)
					{
						var len = data.childmenu.length;
						if(len > 0)
						{
							var str = '<option value="">选择所属子级菜单</option>';
							$.each(data.childmenu,function(n,value){   
								 str += '<option value="' + value.menuid + '">' + value.menuname + '</option>';
							}); 
							$("#menuid").html(str);
							$("#childmenu").css("display","block");
						}else{
							return false;
						}
					}
					return false;
				}
			});
		}
	}
 </script>
 <{include file="footer.tpl"}>