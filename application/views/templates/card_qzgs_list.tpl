 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>卡牌列表</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>card/qzgs_add">添加卡牌</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>卡牌名称</th>
									<th>职业名称</th>
									<th>职业分类</th>
									<th>品质</th>
									<th>资质（星级*2）</th>
									<th>排序</th>
									<th>状态</th>
									<th>时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{if $list}>
							<{foreach from=$list item=i}>
								<tr>
									<td><{$i.id}></td>
									<td class="center"><{$i.name}></td>
									<td class="center"><{$i.career}></td>
									<td class="center"><{$i.type_name}></td>
									<td class="center"><{$i.color_name}></td>
									<td class="center"><{$i.star}></td>
									<td class="center"><{$i.sort}></td>
									<td class="center"><{if $i.status == 0}><span style="color:red;">未生效</span><{else}>已生效<{/if}></td>
									<td class="center"><{$i.time}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>card/qzgs_edit?id=<{$i.id}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-danger" href="<{$baseurl}>card/qzgs_del?id=<{$i.id}>" data-rel="tooltip" data-original-title="删除"  onclick="if(confirm('确定删除?')==false)return false;">
											<i class="fa fa-trash-o icon-white"></i>
										</a>
									</td>
								</tr>
							<{/foreach}>
							<{/if}>
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