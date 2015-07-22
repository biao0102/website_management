 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>版本列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>version/add?gameid=<{$gameid}>">添加版本</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>版本ID</th>
									<th>游戏ID</th>
									<th>版本名称</th>
									<th>平台</th>
									<th>状态</th>
									<th>入口</th>
									<th>时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$lists item=i}>
								<tr>
									<td><{$i.id}></td>
									<td class="center"><{$i.gameid}></td>
									<td class="center"><{$i.version}></td>
									<td class="center"><{if $i.plat==1}>web<{else}>wap<{/if}></td>
									<td class="center">
										<{if $i.status == 1}><span style="color:blue;">线上</span>
										<{else if $i.status == 2}><span>测试</span>
										<{else}><span style="color:red;">失效</span><{/if}>
									</td>
									<td class="center"><a href="<{$baseurl}>template/lists?vid=<{$i.id}>&gameid=<{$gameid}>">模板列表</a></td>
									<td class="center"><{$i.time}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>version/edit?id=<{$i.id}>&gameid=<{$gameid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>version/del?id=<{$i.id}>&gameid=<{$gameid}>" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
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