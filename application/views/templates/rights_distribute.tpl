 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<form class="form-horizontal" action="<{$baseurl}>rights/distribute?userid=<{$userid}>" method="post" name="theForm" enctype="multipart/form-data">

			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-signal" style="padding-left:20px;"></i>
						<h3>权限分配</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>user/lists">返回列表</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="selectAll">全选</a>
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="unSelect">反选</a>
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
									<td class="center">
										<input type="checkbox" name="rights[]" class="parent" id="rights<{$p.parent.rightsid}>" value="<{$p.parent.rightsid}>" <{if in_array($p.parent.rightsid,$userrights)}>checked<{/if}> />
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
									<td class="center">
										<input type="checkbox" name="rights[]" class="child rights<{$p.parent.rightsid}> child<{$p.parent.rightsid}>" value="<{$c.rightsid}>"  <{if in_array($c.rightsid,$userrights)}>checked<{/if}> />
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


			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-signal" style="padding-left:20px;"></i>
						<h3>官网分配</h3>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>游戏ID</th>
									<th>游戏名称</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
							<{if $gamelist}>
							<{foreach from=$gamelist item=i}>
								<tr>
									<td><{$i.id}></td>
									<td><{$i.name}></td>
									<td class="center">
										<input type="checkbox" name="game[]" value="<{$i.id}>" <{if $usergames && in_array($i.id,$usergames)}>checked<{/if}> />
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


			<div style="text-align:center;">
				<button name="submit" type="submit" value="submit" class="btn btn-primary">提交</button>
			</div>
		</form>
		</div>
	</div>
</div>

<script>
	$(function(){

		$("#selectAll").click(function(){ $("input[name='rights[]']").each(function(){ this.checked = true; }); });
		$("#unSelect").click(function(){ $("input[name='rights[]']").attr("checked", false); });

		$(".parent").change(function(){
			id = $(this).attr("id");
			if($(this).is(":checked"))
			{
				$("." + id).each(function(){ this.checked = true; });
			}else{
				$("." + id).removeAttr("checked");
			}
		}); 

		$(".child").change(function(){
			var parentId = $(this).attr("class").split(" ")[1];
			var childClass = $(this).attr("class").split(" ")[2];
			if($('.' + childClass).is(":checked"))
			{
				$("#" + parentId).each(function(){ this.checked = true; });
			}else{
				$("#" + parentId).removeAttr("checked");
			}
		});
	});
</script>

 <{include file="footer.tpl"}>