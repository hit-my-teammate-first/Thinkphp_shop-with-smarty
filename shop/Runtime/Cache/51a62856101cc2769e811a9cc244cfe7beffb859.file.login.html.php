<?php /* Smarty version Smarty-3.1.6, created on 2018-03-16 16:23:51
         compiled from "C:/wamp/www/tp/shop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:217245aab7be2a6bb70-78594283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51a62856101cc2769e811a9cc244cfe7beffb859' => 
    array (
      0 => 'C:/wamp/www/tp/shop/Home/View\\User\\login.html',
      1 => 1521188627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217245aab7be2a6bb70-78594283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5aab7be2bcf99',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aab7be2bcf99')) {function content_5aab7be2bcf99($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head lang="en">
		<meta charset="UTF-8">
		<title>登录</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
                <link rel="stylesheet" href="<?php echo @HOME_URL;?>
/AmazeUI-2.4.2/assets/css/amazeui.css" />
		<link href="<?php echo @HOME_URL;?>
/css/dlstyle.css" rel="stylesheet" type="text/css">
                
	</head>

	<body>

		<div class="login-boxtitle">
			<a href="home.html"><img alt="logo" src="<?php echo @HOME_URL;?>
/images/logobig.png" /></a>
		</div>

		<div class="login-banner">
			<div class="login-main">
				<div class="login-banner-bg"><span></span><img src="<?php echo @HOME_URL;?>
/images/big.jpg" /></div>
				<div class="login-box">

							<h3 class="title">登录商城</h3>

							<div class="clear"></div>
						
		<div class="login-form">
		<form method="post" action="" name="theForm" onsubmit="">
		 <div class="user-name">
								    <label for="username"><i class="am-icon-user"></i></label>
								    <input type="text" name="username" id="username" placeholder="用户名">
                                                                    <div  id="bb" style="height: 45px; width: 100px"></div>
                 </div>
                 <div class="user-pass">
								    <label for="password"><i class="am-icon-lock"></i></label>
								    <input type="password" name="password" id="password" placeholder="请输入密码"> 
                 </div>
                 <div class="user-pass">
								    <label for="captcha"><i class="am-icon-lock"></i></label>
								    <input type="captcha" name="captcha" id="captcha" placeholder="请输入验证码">
                 </div> 
                 <div colspan="2" align="right">                                      
                                        <img src="<?php echo @__CONTROLLER__;?>
/Captcha" 
                                        onclick="this.src='<?php echo @__CONTROLLER__;?>
/Captcha/'+ Math.random()" width="173" height="45" alt="CAPTCHA" border="1">
                 </div>
           </div>
            
            <div class="login-links">
                <label for="remember-me"><input id="remember-me" name="remember" type="checkbox">记住密码</label>
								<a href="#" class="am-fr">忘记密码</a>
								<a href="register.html" class="zcnext am-fr am-btn-default">注册</a>
								<br />
            </div>
								<div class="am-cf">
								<input type="submit" id="submit"  value="登 录" class="am-btn am-btn-primary am-btn-sm">
								</div>
             </form>
						<div class="partner">		
								<h3>合作账号</h3>
							<div class="am-btn-group">
								<li><a href="#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
								<li><a href="#"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
								<li><a href="#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
							</div>
						</div>	

				</div>
			</div>
		</div>


					<div class="footer ">
						<div class="footer-hd ">
							<p>
								<a href="# ">恒望科技</a>
								<b>|</b>
								<a href="# ">商城首页</a>
								<b>|</b>
								<a href="# ">支付宝</a>
								<b>|</b>
								<a href="# ">物流</a>
							</p>
						</div>
						<div class="footer-bd ">
							<p>
								<a href="# ">关于恒望</a>
								<a href="# ">合作伙伴</a>
								<a href="# ">联系我们</a>
								<a href="# ">网站地图</a>
								<em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
							</p>
						</div>
					</div>
	</body>

</html><?php }} ?>