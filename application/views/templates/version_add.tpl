 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加版本</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>version/lists?gameid=<{$gameid}>">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>version/add?gameid=<{$gameid}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">版本名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="version" value="">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">平台</label>
									<div class="controls">
										<input type="radio" name="plat" value="1" checked> web&nbsp;&nbsp;
										<input type="radio" name="plat" value="2"> wap
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1"> 线上&nbsp;&nbsp;
										<input type="radio" name="status" value="2" checked> 测试&nbsp;&nbsp;
										<input type="radio" name="status" value="0"> 失效&nbsp;&nbsp;
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