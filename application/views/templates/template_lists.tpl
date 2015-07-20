 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>模板列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>template/add?gameid=<{$gameid}>&vid=<{$vid}>">添加模板</a>&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<{$baseurl}>make/make_all_tpl?gameid=<{$gameid}>&vid=<{$vid}>">生成列表</a>&nbsp;&nbsp;
						<a class="btn btn-mini btn-info" href="<{$baseurl}>make/make_all_article?gameid=<{$gameid}>&vid=<{$vid}>">生成文章</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>模板ID</th>
									<th>名称</th>
									<th>文件名</th>
									<th>类型</th>
									<th>生成</th>
									<th>状态</th>
									<th>查看</th>
									<th>更新时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$lists item=i}>
								<tr>
									<td><{$i.id}></td>
									<td class="center"><{$i.name}></td>
									<td class="center"><{$i.filename}></td>
									<td class="center"><{if $i.type == 1}><span style="color:red;">页面</span><{elseif $i.type==2}><span style="color:blue;">碎片</span><{else}><span>文章</span><{/if}></td>
									<td class="center"><{if $i.ismake == 1}><span style="color:blue;">是</span><{else}><span style="color:red;">否</span><{/if}></td>
									<td class="center"><{if $i.status == 1}><span style="color:blue;">生效</span><{else}><span style="color:red;">失效</span><{/if}></td>
									<td class="center"><{if $i.url}><a href="<{$i.url}>">查看</a><{else}>无<{/if}></td>
									<td class="center"><{$i.updatetime}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>template/edit?id=<{$i.id}>&vid=<{$vid}>&gameid=<{$gameid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;									
										<a class="btn btn-success" href="<{if $i.type == 1}><{$baseurl}>make/make_one_tpl?tid=<{$i.id}>&vid=<{$vid}>&gameid=<{$gameid}><{else}>javascript:alert('亲~此模板不需要在此生成哦');<{/if}>" data-rel="tooltip" data-original-title="生成">
											<i class="fa fa-th-list icon-white"></i>
										</a>&nbsp;&nbsp; 
										<a class="btn btn-danger" href="<{$baseurl}>template/del?id=<{$i.id}>&vid=<{$vid}>&gameid=<{$gameid}>" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
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