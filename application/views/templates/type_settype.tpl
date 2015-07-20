 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
    <div class="container">
		<div class="row">
			<div class="span12">
	      		<div class="widget stacked">
					<div class="widget-header">
						<i class="fa fa-th-list" style="padding-left:20px;"></i>
						<h3>类型设置</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>article/articlelist?gameid=<{$gameid}>">返回列表</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="selectAll">全选</a>
						<a class="btn btn-mini btn-primary" href="javascript:void(0);" id="unSelect">反选</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>type/settype?gameid=<{$gameid}>" method="post" name="theForm" enctype="multipart/form-data">
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
											<input type="checkbox" name="type[]" class="parent" id="type<{$p.parent.typeid}>" value="<{$p.parent.typeid}>" <{if in_array($p.parent.typeid,$gametype)}>checked<{/if}> />
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
											<input type="checkbox" name="type[]" class="child type<{$p.parent.typeid}> child<{$p.parent.typeid}>" value="<{$c.typeid}>" <{if in_array($c.typeid,$gametype)}>checked<{/if}> />
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
		
		$("#selectAll").click(function(){ $("input[name='type[]']").each(function(){ this.checked = true; }); });
		$("#unSelect").click(function(){ $("input[name='type[]']").attr("checked", false); });

		$(".parent").change(function(){
			id = $(this).attr("id");
			if($(this).is(":checked"))
			{
				$("." + id).each(function(){ this.checked = true; });
			} else {
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