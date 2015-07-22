 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加菜单</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>menu/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>menu/add" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择父级菜单</label>
									<div class="controls">
										<select name="parentid" class="input-xlarge" id="beta">
											<option value="">选择父级菜单</option>
											<{foreach from=$parentmenu item=i}>
												<option value="<{$i.menuid}>"><{$i.menuname}></option>
											<{/foreach}>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">菜单名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="menuname" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Action</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="action" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">导航图标</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="Style" value="fa-file-o">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="sort" value="255">
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
 <{include file="footer.tpl"}>