 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-pencil" style="padding-left:20px;"></i>
						<h3>编辑菜单</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>menu/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>menu/edit?menuid=<{$menuid}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择父级菜单</label>
									<div class="controls">
										<select name="parentid" class="input-xlarge" id="beta">
											<option value="">选择父级菜单</option>
											<{foreach from=$parentmenu item=i}>
												<option value="<{$i.menuid}>" <{if $i.menuid==$menuinfo.parentid}>selected<{/if}> ><{$i.menuname}></option>
											<{/foreach}>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">菜单名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="menuname" value="<{$menuinfo.menuname}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">Action</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="action" value="<{$menuinfo.action}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">导航图标</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="style" value="<{$menuinfo.style}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">排序</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="sort" value="<{$menuinfo.sort}>">
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