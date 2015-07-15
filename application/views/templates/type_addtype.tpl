 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加类型</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>type/typelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>type/addtype" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择父级类型</label>
									<div class="controls">
										<select name="ctype" class="input-xlarge" id="beta">
											<option value="">选择父级类型</option>
											<{foreach from=$parenttype item=i}>
												<option value="<{$i.typeid}>"><{$i.typename}></option>
											<{/foreach}>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="typename" value="">
									</div>
							  	</div>

							  	<div class="control-group">
									<label class="control-label" for="focusedInput">描述</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="summary" value="">
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