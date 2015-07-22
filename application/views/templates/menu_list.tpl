 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>菜单列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>menu/add">添加菜单</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>菜单ID</th>
									<th>父级</th>
									<th>子级</th>
									<th>菜单名</th>
									<th>Action</th>
									<th>排序</th>
									<th>状态</th>
									<th>创建时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$menulist item=p}>
								<tr style="color:blue;">
									<td><{$p.parent.menuid}></td>
									<td class="center">√</td>
									<td class="center"></td>
									<td class="center"><{$p.parent.menuname}></td>
									<td class="center"><{$p.parent.action}></td>
									<td class="center"><{$p.parent.sort}></td>
									<td class="center"><{$p.parent.status}></td>
									<td class="center"><{$p.parent.createtime}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>menu/edit?menuid=<{$p.parent.menuid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>menu/del?menuid=<{$p.parent.menuid}>" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>
								
								<{if $p.child}>
								<{foreach from=$p.child item=c}>
								<tr>
									<td><{$c.menuid}></td>
									<td class="center"></td>
									<td class="center">√</td>
									<td class="center"><{$c.menuname}></td>
									<td class="center"><{$c.action}></td>
									<td class="center"><{$c.sort}></td>
									<td class="center"><{$c.status}></td>
									<td class="center"><{$c.createtime}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>menu/edit?menuid=<{$c.menuid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>menu/del?menuid=<{$c.menuid}>" data-rel="tooltip" data-original-title="删除">
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