<?php /* Smarty version Smarty-3.1.13, created on 2015-07-21 09:33:20
         compiled from "application/views/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211911798555ae04e7521113-86163703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924517c391169c7919d10fe8e0386f933d6aa81c' => 
    array (
      0 => 'application/views/templates/login.tpl',
      1 => 1437471155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211911798555ae04e7521113-86163703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_55ae04e7557f43_46958354',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae04e7557f43_46958354')) {function content_55ae04e7557f43_46958354($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="container">
		<div class="row">
	      	<div class="span12">
				<div class="widget stacked">
					<div class="widget-header">
						<i class="icon-cog"></i>
						<h3>逍游天下科技有限公司简介</h3>
					</div>
                    <form action="user/login" method="post">
                        <table>
                            <tr>
                                <td>
                                    username:
                                </td>
                                <td>
                                    <input type="text" name="username"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    password:
                                </td>
                                <td>
                                    <input type="password" name="password" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="submit" />
                                </td>
                            </tr>

                        </table>

                    </form>
					<div class="widget-content">
						<p>逍游天下欢迎您</p>
						<p>本后台有问题联系方式 ：Email ( yuanshiwei@xiaoyou.com )</p>
			<!-- 			<br><br>
						<p></p>
						<p>新闻列表<a href="javascript:void(0);" class="btn btn-success"><i class="fa fa-th-list icon-white"></i></a>
						</p>
						<p><a href="javascript:void(0);" class="btn btn-mini btn-info">SEO设置</a></p>
						<p></p>
						<p></p>
						<p></p>
						<p></p> -->
					</div>
				</div>
		    </div> 
	    </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>