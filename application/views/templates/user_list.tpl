 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-search" style="padding-left:20px"></i>
						<h3>搜索操作</h3> 
					</div>
					<div class="widget-content">						
						<form class="form-horizontal" action="<{$baseurl}>user/lists" method="GET">
							<input class="input-large focused" type="text" name="keyword" value="<{$keyword}>" placeholder="请输入用户名">
					  		&nbsp;&nbsp;
							<input name="submit" type="submit" value="搜索" class="btn btn-primary">
						</form>
					</div>
				</div>
			</div>
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>用户列表</h3>
						<!--<a class="btn btn-mini btn-info" href="javascript:void(0);">添加用户</a>-->
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>用户ID</th>
									<th>用户名</th>
									<th>真名</th>
									<th>邮箱</th>
									<th>等级</th>
									<th>最近登陆时间</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{foreach from=$userlist item=i}>
								<tr>
									<td><{$i.userid}></td>
									<td class="center"><{$i.username}></td>
									<td class="center"><{$i.truename}></td>
									<td class="center"><{$i.email}></td>
									<td class="center"><{if $i.level==1}><b style="color:red;">超级管理员</b><{elseif $i.level==2}>普通管理员<{/if}></td>
									<td class="center"><{$i.updatetime}></td>
									<td class="center">
										<a class="btn btn-info" href="<{$baseurl}>user/edit?userid=<{$i.userid}>" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-primary" href="<{$baseurl}>rights/distribute?userid=<{$i.userid}>" data-rel="tooltip" data-original-title="配权">
											<i class="fa fa-user-md icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-success" href="<{$baseurl}>menu/distribute?userid=<{$i.userid}>" data-rel="tooltip" data-original-title="配权">
											<i class="fa fa-user-md icon-white"></i>
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