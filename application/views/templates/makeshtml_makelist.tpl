 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-search" style="padding-left:20px"></i>
						<h3>生成操作</h3>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>makeshtml/makeaction?gameid=<{$gameid}>" method="post">
							<div class="control-group">
								页面 &nbsp;&nbsp;
						  		<select class="input-large focused" name="makename">
									<option value="">请选择待生成的页面</option>
									<{foreach from=$makelist item=i}>
									<option value="<{$i.action}>,<{$i.filename}>"><{$i.name}> -- (方法名 : <{$i.action}>) -- (文件名 : <{$i.filename}>)</option>
									<{/foreach}>
						  		</select> 
						  		&nbsp;&nbsp;  
								<input name="submit" type="submit" value="生成" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>页面列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>article/articlelist?gameid=<{$gameid}>">返回列表</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>文件名</th>
									<th>URL</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$listpage item=i}>
								<tr>
									<td class="center"><{$i.filename}></td>
									<td class="center"><{if $i.url}><a href="<{$i.url}>" target="_blank"><{$i.url}></a><{else}>无<{/if}></td>
								</tr>
							<{/foreach}>
							</tbody>
						</table>
					</div>
				</div>
				<!--<{include file="page.tpl"}>-->
			</div>
		</div>
	</div>
</div>
 <{include file="footer.tpl"}>