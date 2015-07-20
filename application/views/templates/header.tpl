<!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset="utf-8">
	<title>逍游天下游戏官网管理后台</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<link href="<{$baseurl}>static/css/bootstrap.min.css" rel="stylesheet">
	<link href="<{$baseurl}>static/css/bootstrap-responsive.min.css" rel="stylesheet">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- <link href="<{$baseurl}>static/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet"> -->

	<link href="<{$baseurl}>static/css/base-admin-2.css" rel="stylesheet">
	<link href="<{$baseurl}>static/css/base-admin-2-responsive.css" rel="stylesheet">

	<link href="<{$baseurl}>static/css/pages/dashboard.css" rel="stylesheet">

	<link href="<{$baseurl}>static/css/custom.css" rel="stylesheet">

	<script src="<{$baseurl}>static/js/libs/jquery-1.10.2.min.js"></script>
	<script src="<{$baseurl}>static/js/libs/jquery-ui-1.10.0.custom.min.js"></script>

	<script src="<{$baseurl}>static/js/Application.js"></script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>
	<!--头部start-->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-cog"></i></a>
				<a class="brand" href="javascript:void(0);">逍游天下游戏官网管理后台</a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-user"></i>您好！尊敬的管理员(<{$userinfo.truename}>)<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0);">查看资料</a></li>
								<li class="divider"></li>
								<li><a href="<{$baseurl}>home/loginout">退出</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--头部end-->
