 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>类型列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>type/addtype">添加类型</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>类型ID</th>
									<th>父级</th>
									<th>子级</th>
									<th>类型名</th>
									<th>描述</th>
									<th>状态</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$typelist item=p}>
								<tr style="color:blue;">
									<td><{$p.parent.typeid}></td>
									<td class="center">√</td>
									<td class="center"></td>
									<td class="center"><{$p.parent.typename}></td>
									<td class="center"><{$p.parent.summary}></td>
									<td class="center"><{if $p.parent.status==1}>生效<{else}><span style="color:red;">失效<span><{/if}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>type/edittype?typeid=<{$p.parent.typeid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>type/deltype?typeid=<{$p.parent.typeid}>" data-rel="tooltip" data-original-title="删除">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>
								
								<{if $p.child}>
								<{foreach from=$p.child item=c}>
								<tr>
									<td><{$c.typeid}></td>
									<td class="center"></td>
									<td class="center">√</td>
									<td class="center"><{$c.typename}></td>
									<td class="center"><{$c.summary}></td>
									<td class="center"><{if $c.status==1}>生效<{else}><span style="color:red;">失效<span><{/if}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>type/edittype?typeid=<{$c.typeid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>type/deltype?typeid=<{$c.typeid}>" data-rel="tooltip" data-original-title="删除">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>
								<{/foreach}>
								<{/if}>

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