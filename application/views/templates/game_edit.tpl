 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>编辑游戏</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>game/gamelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>game/editgame?id=<{$id}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">游戏名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="name" value="<{$data.name}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">二级域名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="domain" value="<{$data.domain}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">web页面生成列表</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="makelist"><{$data.makelist}></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">wap页面生成列表</label>
									<div class="controls">
								  		<textarea class="input-xlarge" rows="6" name="wapmakelist"><{$data.wapmakelist}></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">备注</label>
									<div class="controls">
								  		<textarea class="input-xxlarge" rows="6" name="remark"><{$data.remark}></textarea>
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
 <{include file="footer.tpl"}>