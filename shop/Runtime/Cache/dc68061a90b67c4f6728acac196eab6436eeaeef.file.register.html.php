<?php /* Smarty version Smarty-3.1.6, created on 2018-03-16 13:32:10
         compiled from "C:/wamp/www/tp/shop/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:121215aa629c3a1b015-41265292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc68061a90b67c4f6728acac196eab6436eeaeef' => 
    array (
      0 => 'C:/wamp/www/tp/shop/Home/View\\User\\register.html',
      1 => 1521178328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121215aa629c3a1b015-41265292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5aa629c3c4833',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa629c3c4833')) {function content_5aa629c3c4833($_smarty_tpl) {?><html xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>注册</title>
    <script type="text/javascript" src='<?php echo @Public_URL;?>
js/jquery/jquery-3.3.1.js'></script>
    <script type="text/javascript" src='<?php echo @Public_URL;?>
js/jquery/register.js'/></script>
    <script type="text/javascript">
    //ajax请求地址
var checkPhone = "<?php echo @__CONTROLLER__;?>
/checkPhone";
var checkusername = "<?php echo @__CONTROLLER__;?>
/checkusername";
var checkCaptcha = "<?php echo @__CONTROLLER__;?>
/checkCaptcha";
    </script>
</head>
<body>
    <div id='logo'></div>
    <div id='reg-wrap'>
        <form action="<?php echo @__CONTROLLER__;?>
/CheckRegister" method='post' name='register'>
            <fieldset>
                <legend><span style="font-weight:bold;font-size:16px;">用户注册</span></legend>
                <p>
                    <label for="Phone">手机号：</label>
                    <input type="text" name='Phone' id='Phone' class='input' placeHolder="6~16个字符"  /><span style="margin-left:5px;color:red" id="Phoneflag"></span>
                </p>
                <p>
                    <label for="pwd">密码：</label>
                    <input type="password" name='pwd' id='password' placeHolder="6~16个字符" class='input'/><span style="margin-left:5px;color:red" id="passwordflag"></span>
                </p>
                <p>
                    <label for="pwded">确认密码：</label>
                    <input type="password" name='pwded' id="repassword" class='input'/>
                    <span style="margin-left:5px;color:red" id="repasswordflag"></span>
                </p>
                <p>
                    <label for="username">昵称：</label>
                    <input type="text"  name='username' id='username' placeHolder="3~10个字符" class='input'/>
                    <span style="margin-left:5px;color:red" id="usernameflag"></span>
                </p>
                <p>
                    <label for="Captcha">验证码：</label>
                    <input type="text" name='Captcha' class='input' id='Captcha'/>
                    <img src='<?php echo @__MODULE__;?>
/User/Captcha'.Math.random() width='137' height='40' id='Captcha-img'/>
                    <span style="margin-left:5px;color:red" id="Captchaflag"></span>
                </p>
                <p class='run'>
                    <input type="submit" value='马上注册' id='regis'/>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html><?php }} ?>