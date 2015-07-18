<?php /* Smarty version Smarty-3.1.13, created on 2015-07-18 17:43:17
         compiled from "application/views/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109657686255aa0abfe1b515-69851673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd304e7d7913bc61a5ba57117e97d53a86f77f79d' => 
    array (
      0 => 'application/views/templates/header.tpl',
      1 => 1437212747,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109657686255aa0abfe1b515-69851673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa0abfee4959_08489633',
  'variables' => 
  array (
    'baseurl' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa0abfee4959_08489633')) {function content_55aa0abfee4959_08489633($_smarty_tpl) {?><!DOCTYPE html>
<html lang="cn">
<head>
	<meta charset="utf-8">
	<title>逍游天下游戏官网管理后台</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/css/bootstrap-responsive.min.css" rel="stylesheet">

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet"> -->

	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/css/base-admin-2.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/css/base-admin-2-responsive.css" rel="stylesheet">

	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/css/pages/dashboard.css" rel="stylesheet">

	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/css/custom.css" rel="stylesheet">

	<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/js/libs/jquery-1.10.2.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/js/libs/jquery-ui-1.10.0.custom.min.js"></script>

	<script src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
static/js/Application.js"></script>

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
								<i class="icon-user"></i>您好！尊敬的管理员(<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['truename'];?>
)<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0);">查看资料</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
home/loginout">退出</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--头部end-->
<?php }} ?>