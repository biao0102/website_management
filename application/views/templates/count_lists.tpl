 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>下载统计</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>article/articlelist?gameid=<{$gameid}>">返回列表</a>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>渠道号</th>
									<th>IOS下载</th>
					            	<th>越狱下载</th>
					            	<th>安卓下载</th>
					            	<th>下载总数</th>
					            	<th>下载明细</th>
								</tr>
							</thead>
							<tbody>
							<{if $data}>	
								<tr>
									<td class="center">渠道合计</td>
									<td class="center"><{$total.ios}></td>
									<td class="center"><{$total.yy}></td>
									<td class="center"><{$total.android}></td>
									<td class="center"><{$total.total}></td>
									<td class="center">空</td>
								</tr>
							<{foreach from=$data item=i}>
								<tr>
									<td class="center"><{$i.cid}></td>
									<td class="center"><{$i.ios}></td>
									<td class="center"><{$i.yy}></td>
									<td class="center"><{$i.android}></td>
									<td class="center"><{$i.total}></td>
									<td class="center"><a href="<{$baseurl}>/count/downdetail?games=<{$gameid}>&cid=<{$i.cid}>&stime=<{$stime}>&etime=<{$etime}>">查看明细</a></td>
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