 <{include file="header.tpl"}>
 <{include file="menu.tpl"}>
<div class="main">
	<div class="container">
		<div class="row">
			<div class="span9">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>添加模板</h3>
						<a class="btn btn-mini btn-info" href="<{$baseurl}>template/lists?gameid=<{$gameid}>&vid=<{$vid}>">返回列表</a>
					</div>
					<div class="widget-content">
						<form class="form-horizontal" action="<{$baseurl}>template/edit?id=<{$data.id}>&vid=<{$vid}>&gameid=<{$gameid}>" method="post" name="theForm" enctype="multipart/form-data">
							<fieldset>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">模板名称</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="name" value="<{$data.name}>">
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">模板文件名</label>
									<div class="controls">
								  		<input class="input-xlarge focused" type="text" name="filename" value="<{$data.filename}>">.shtml
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">类型</label>
									<div class="controls">
										<input type="radio" name="type" value="1" <{if $data.type==1}>checked<{/if}>> 页面&nbsp;&nbsp;
										<input type="radio" name="type" value="2" <{if $data.type==2}>checked<{/if}>> 碎片&nbsp;&nbsp;
										<input type="radio" name="type" value="3" <{if $data.type==3}>checked<{/if}>> 文章
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">模板内容</label>
									<div class="controls">
								  		<textarea class="input-xxlarge" rows="20" name="content" id="content"><{$data.content}></textarea>
									</div>
							  	</div>
							  	<div class="control-group">
									<label class="control-label" for="focusedInput">状态</label>
									<div class="controls">
										<input type="radio" name="status" value="1" <{if $data.status==1}>checked<{/if}>> 生效&nbsp;&nbsp;
										<input type="radio" name="status" value="0" <{if $data.status==0}>checked<{/if}>> 失效&nbsp;&nbsp;
									</div>
							  	</div>
							  	<div class="form-actions">
									<button name="submit" type="submit" value="submit" class="btn btn-primary">提交</button>
							  	</div>
							</fieldset>
						</form>
					</div>
				</div>
	    	</div>
	    	<div class="span3">
      			<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-user"></i>
						<h3>碎片列表</h3>
					</div>
					<div class="widget-content">
						<table class="table table-striped">
							<thead>
								<tr><th style="color:red;">点击添加碎片</th></tr>
							</thead>
							<tbody>
								<{foreach from=$splist item=i}>
								<tr><td><a href="javascript:;" class="sp" data-value="<{$i.id}>" data-name="<{$i.name}>" style="text-decoration:none;"><{$i.name}></a></td></tr>
								<{/foreach}>
							</tbody>
						</table>
					</div>
				</div>
	      	</div>
      	</div>
	</div>
</div>
<script>
	// 在textarea光标处插入文本
  	(function($) {  
        $.fn  
            .extend({  
                insertContent : function(myValue, t) {  
                    var $t = $(this)[0];  
                    if (document.selection) { // ie  
                        this.focus();  
                        var sel = document.selection.createRange();  
                        sel.text = myValue;  
                        this.focus();  
                        sel.moveStart('character', -l);  
                        var wee = sel.text.length;  
                        if (arguments.length == 2) {  
                            var l = $t.value.length;  
                            sel.moveEnd("character", wee + t);  
                            t <= 0 ? sel.moveStart("character", wee - 2 * t  
                                    - myValue.length) : sel.moveStart(  
                                    "character", wee - t - myValue.length);  
                            sel.select();  
                        }  
                    } else if ($t.selectionStart  
                            || $t.selectionStart == '0') {  
                        var startPos = $t.selectionStart;  
                        var endPos = $t.selectionEnd;  
                        var scrollTop = $t.scrollTop;  
                        $t.value = $t.value.substring(0, startPos)  
                                + myValue  
                                + $t.value.substring(endPos,  
                                        $t.value.length);  
                        this.focus();  
                        $t.selectionStart = startPos + myValue.length;  
                        $t.selectionEnd = startPos + myValue.length;  
                        $t.scrollTop = scrollTop;  
                        if (arguments.length == 2) {  
                            $t.setSelectionRange(startPos - t,  
                                    $t.selectionEnd + t);  
                            this.focus();  
                        }  
                    } else {  
                        this.value += myValue;  
                        this.focus();  
                    }  
                }  
            })  
    })(jQuery); 

	$(document).ready(function() {
		$('.sp').click(function(e){
			e.preventDefault();
			var html = '';
			var tid = parseInt($(this).attr('data-value'));
			var name = $(this).attr('data-name');
			if (tid)
			{
				html += "<!--" + name + " start--><FEILIU><tag>{tid:" + tid + "}</tag></FEILIU><!--" + name + " end-->";
				$('#content').insertContent(html);
			} else {
				alert('该碎片不可用~');
			}
		});
	});

</script>
 <{include file="footer.tpl"}>