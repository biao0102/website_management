 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>菜单分配</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>user/lists">返回列表</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="selectAll">全选</a>
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="unSelect">反选</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>menu/distribute?userid=<{$userid}>" method="post" name="theForm" enctype="multipart/form-data">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>菜单ID</th>
										<th>父级</th>
										<th>子级</th>
										<th>菜单名</th>
										<th>Action</th>
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
										<td class="center" class="qwe">
											<input type="checkbox" name="menu[]" class="parent" id="menu<{$p.parent.menuid}>" value="<{$p.parent.menuid}>" <{if in_array($p.parent.menuid,$usermenu)}>checked<{/if}> />
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
										<td class="center">
											<input type="checkbox" name="menu[]" class="child menu<{$p.parent.menuid}> child<{$p.parent.menuid}>" value="<{$c.menuid}>" <{if in_array($c.menuid,$usermenu)}>checked<{/if}> />
										</td>
									</tr>
									<{/foreach}>
									<{/if}>

								<{/foreach}>		
								</tbody>
							</table>
							<div style="text-align:center;">
								<button name="submit" type="submit" value="submit" class="btn btn-primary">提交</button>
							</div>
						</form>
					</div>
				</div>
				<!--<{include file="page.tpl"}>-->
			</div>
		</div>
	</div>
</div>

<script>
	$(function(){
		
		$("#selectAll").click(function(){ $("input[name='menu[]']").each(function(){ this.checked = true; }); });
		$("#unSelect").click(function(){ $("input[name='menu[]']").attr("checked", false); });

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