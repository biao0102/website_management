 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-pencil" style="padding-left:20px;"></i>
						<h3>编辑类型</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>games/typelist">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>games/edittype?typeid=<{$typeid}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="focusedInput">选择父级类型</label>
									<div class="controls">
										<select name="ctype" class="input-xlarge" id="beta">
											<option value="">选择父级类型</option>
											<{foreach from=$parenttype item=i}>
												<option value="<{$i.typeid}>" <{if $i.typeid==$typeinfo.ctype}>selected<{/if}> ><{$i.typename}></option>
											<{/foreach}>
										</select>
									</div>
								</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="typename" value="<{$typeinfo.typename}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">描述</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="summary" value="<{$typeinfo.summary}>">
									</div>
							  	</div>
							  	<div class="control-group" id="statusbox">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <{if $typeinfo.status == 1}>checked<{/if}>> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <{if $typeinfo.status == 0}>checked<{/if}>> 不生效&nbsp;&nbsp;
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