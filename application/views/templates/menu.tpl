<!--菜单开始-->
<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
				<i class="icon-reorder"></i>
			</a>
			<div class="subnav-collapse collapse">
				<ul class="mainnav">
				<{if $menu}>
					<{foreach from=$menu item=i}>
						<{if $i.child}>
							<li class="dropdown <{$i.parent.active}>">
								<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">  
									<i class="fa <{$i.parent.style}>"></i>
									<span><{$i.parent.menuname}></span>
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
								<{foreach from=$i.child item=t}>
									<li><a href="<{$baseurl}><{$t.action}>"><{$t.menuname}></a></li>
								<{/foreach}>
								</ul>
							</li>
						<{else}>
							<li class="<{$i.parent.active}>">
								<a href="<{$baseurl}><{$i.parent.action}>">
									<i class="fa <{$i.parent.style}>"></i>
									<span><{$i.parent.menuname}></span>
								</a>
							</li>
						<{/if}>
					<{/foreach}>
				<{/if}>		
				</ul>
			</div>
		</div>
	</div>
</div>
<!--菜单结束-->
