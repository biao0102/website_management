<{if $pages}>
	<div class="pagination pagination-right">
	<ul>
	<{if $pages.prev gt -1}>                            
    	<li><a href="<{$page_url}>&start=<{$pages.prev}>">上一页</a></li>
    <{/if}>
    <{foreach from=$pages key=k item=i}>
        <{if $k ne 'prev' && $k ne 'next'}>
            <{if $k eq 'omitf' || $k eq 'omita'}>
                <li><a href="javascript:void(0);">…</a></li>
            <{elseif $k ne 'numtotal'}>
				<{if $i gt -1}>
					<li><a href="<{$page_url}>&start=<{$i}>"><{$k}></a></li>
				<{else}>
					<li><a href="javascript:void(0);"><{$k}></a></li>
				<{/if}>
			<{/if}>   
		<{/if}>                             
    <{/foreach}>
    <{if $pages.next gt -1}>                            
        <li><a href="<{$page_url}>&start=<{$pages.next}>">下一页</a></li>
    <{/if}>
    </ul>
</div>                
<{/if}>
