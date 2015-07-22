 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-pencil" style="padding-left:20px;"></i>
						<h3>添加用户</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>user/lists">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>user/add" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">用户名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="username" />
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">真实姓名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="truename" />
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">邮箱</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="email" />
									</div>
							  	</div>
							  	<div class="control-group">
									<div class="controls">
								  		<input  type="hidden" name="useraddreq"  value="2" />
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