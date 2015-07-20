 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>游戏列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>game/addgame">添加游戏</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>名称</th>
									<th>域名</th>
									<th>模板</th>
									<th>状态</th>
									<th>时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$gamelist item=i}>
								<tr>
									<td><{$i.id}></td>
									<td class="center"><{$i.name}></td>
									<td class="center"><a href="http://<{$i.domain}>.feiliu.com" target="_blank"><{$i.domain}></a></td>
									<td class="center"><a href="<{$baseurl}>version/lists?gameid=<{$i.id}>" target="_blank">模板</a></td>
									<td class="center"><{if $i.status == 0}><span style="color:red;">未生效</span><{else}>已生效<{/if}></td>
									<td class="center"><{$i.time}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>game/editgame?id=<{$i.id}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-success" href="<{$baseurl}>article/articlelist?gameid=<{$i.id}>" data-rel="tooltip" data-original-title="列表">
											<i class="fa fa-th-list icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>game/delgame?id=<{$i.id}>" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
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