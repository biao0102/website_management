 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>SEO设置</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>game/articlelist?gameid=<{$gameid}>">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>game/setseo?gameid=<{$gameid}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">网站标题</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="title" value="<{$seo.title}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">SEO关键词</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="keywords" value="<{$seo.keywords}>">
								  		<b style="color:red;">（用逗号分割，5个左右）</b>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">SEO描述</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="description"><{$seo.description}></textarea>
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