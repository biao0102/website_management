 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>权限列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>rights/add">添加权限</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>权限ID</th>
									<th>父权限</th>
									<th>子权限</th>
									<th>权限名</th>
									<th>所属菜单名</th>
									<th>Action</th>
									<th>状态</th>
									<th>创建时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$rightslist item=p}>
								<tr style="color:blue;">
									<td><{$p.parent.rightsid}></td>
									<td>√</td>
									<td></td>
									<td class="center"><{$p.parent.rightsname}></td>
									<td class="center"><{$p.parent.menuname}></td>
									<td class="center"><{$p.parent.action|truncate:20}></td>
									<td class="center"><{$p.parent.status}></td>
									<td class="center"><{$p.parent.createtime}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>rights/edit?rightsid=<{$p.parent.rightsid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>rights/del?rightsid=<{$p.parent.rightsid}>" data-rel="tooltip" data-original-title="删除" onclick="if(confirm('确定删除?')==false)return false;">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>

								<{if $p.child}>
								<{foreach from=$p.child item=c}>
								<tr>
									<td><{$c.rightsid}></td>
									<td></td>
									<td>√</td>
									<td class="center"><{$c.rightsname}></td>
									<td class="center"><{$c.menuname}></td>
									<td class="center"><{$c.action|truncate:20}></td>
									<td class="center"><{$c.status}></td>
									<td class="center"><{$c.createtime}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>rights/edit?rightsid=<{$c.rightsid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>rights/del?rightsid=<{$c.rightsid}>" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
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