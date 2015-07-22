<{include file="header.tpl"}>
<{include file="menu.tpl"}>
<style>
	#msgbox {text-align: center;}
	#msg  {font-size: 26px; color:red; font-weight: bold;}
	#time {font-size: 20px; color:blue;font-weight: bold;}
	#time span{color:red;font-size: 24px;font-weight: bold;}
</style>
<div class="main">
	<div class="container">
		<div class="row">
	      	<div class="span12">
				<div class="widget stacked">
					<div class="widget-header" style="text-align: center;">
						<i class="icon-cog"></i>
						<h3>消息提示</h3>
					</div>
					<div class="widget-content" id="msgbox">
						<p id="msg"><{$message}></p>
						<p id="time"><span>2</span>s后跳转</p>
					</div>
				</div>
		    </div> 
	    </div>
	</div>
</div>
<script>
	var url = "<{$url}>";
	console.log(url);
	var time = parseInt(<{$time}>);
	var lefttime = time;
	if (time > 0)
	{
		var timeInterval = setInterval("showtime()",1000);	

		setTimeout(function(){
			if (url)
			{
				window.location.href = url;
			} else {
				window.location.href = "javascript:history.go(-1)";
			}
		}, time*1000);

	}

	function showtime()
	{
		if(lefttime > 0)
		{
			lefttime = lefttime - 1;
			$('#time span').html(lefttime);
		} else {
			clearInterval(timeInterval);
			return false;
		}
	}
</script>
<{include file="footer.tpl"}>