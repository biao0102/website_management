<?php /* Smarty version Smarty-3.1.13, created on 2015-07-22 06:39:24
         compiled from "application/views/templates/user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98780963155aa1dd868fa77-14692454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e7b74e601922a392b45ecdafb5bc51b1868b90b' => 
    array (
      0 => 'application/views/templates/user_list.tpl',
      1 => 1437547001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98780963155aa1dd868fa77-14692454',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55aa1dd8e10e53_81741471',
  'variables' => 
  array (
    'baseurl' => 0,
    'keyword' => 0,
    'userlist' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55aa1dd8e10e53_81741471')) {function content_55aa1dd8e10e53_81741471($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/lists" method="GET">
							<input class="input-large focused" type="text" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="请输入用户名">
					  		&nbsp;&nbsp;
							<input name="submit" type="submit" value="搜索" class="btn btn-primary">
						</form>
                        <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/add" method="post">
                            <input name="useraddreq" type="hidden" value="1" />
                            <input name="submit" type="submit" value="添加用户" class="btn btn-primary">
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
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['userid'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['username'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['truename'];?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
									<td class="center">
                                        <?php if ($_smarty_tpl->tpl_vars['i']->value['level']==1){?><b style="color:red;">超级管理员</b>
                                        <?php }elseif($_smarty_tpl->tpl_vars['i']->value['level']==2){?>普通管理员<?php }?>
                                    </td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['i']->value['updatetime'];?>
</td>
									<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/edit?userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['userid'];?>
" data-rel="tooltip" data-original-title="编辑">
											<i class="fa fa-edit icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
rights/distribute?userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['userid'];?>
" data-rel="tooltip" data-original-title="配权">
											<i class="fa fa-user-md icon-white"></i>
										</a>&nbsp;&nbsp;
										<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
menu/distribute?userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['userid'];?>
" data-rel="tooltip" data-original-title="配权">
											<i class="fa fa-user-md icon-white"></i>
										</a>
									</td>
								</tr>
							<?php } ?>		
							</tbody>
						</table>
					</div>
				</div>
				<!--<?php echo $_smarty_tpl->getSubTemplate ("page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
-->
			</div>
		</div>
	</div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>