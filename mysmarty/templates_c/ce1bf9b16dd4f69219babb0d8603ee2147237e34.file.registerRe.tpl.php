<?php /* Smarty version Smarty-3.1.11, created on 2014-05-04 11:01:09
         compiled from "..\mysmarty\templates\registerRe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18214536600cd7134c5-50550836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce1bf9b16dd4f69219babb0d8603ee2147237e34' => 
    array (
      0 => '..\\mysmarty\\templates\\registerRe.tpl',
      1 => 1399194063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18214536600cd7134c5-50550836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_536600cd7ad7b3_86471424',
  'variables' => 
  array (
    'info' => 0,
    'ID' => 0,
    'name' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536600cd7ad7b3_86471424')) {function content_536600cd7ad7b3_86471424($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>
I++ 俱乐部14届招新报名
</title>
</head>
<link rel="stylesheet" type="text/css" href="../view/js/formChecker.js"/>
<link rel="stylesheet" type="text/css" href="../view/css/style.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../view/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="../view/Buttons/css/font-awesome-ie7.min.css"/>


<style type="text/css">
.info_frame{
    position: fixed;
    top: 26%;
    width: 60%;
    left: 40%;
    height: 60%;
}
.info_btn{
    position: fixed;
    text-align: center;
    top: 70%;
    width: 20%;
    left: 41%;
    height: 10%;
    font-family:"Microsoft Yahei";
    font-size: 30px;
}
.header{
    position: fixed;
    left: 36%;
    top: 15%;
}
h1{ font-family: "Microsoft Yahei"; font-weight: bold;}
h2{ font-family: "Microsoft Yahei"; }

</style>

<body>
<div class="header">
    <h1>I++ 俱乐部14届招新报名</h1>
</div>

<div class="info_frame">
    <h2 ><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</h2>
    <h2 >学号：<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
 </h2>
    <h2 >姓名：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </h2>
    <h2 >电话：<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
 </h2>
</div>
<div>
    <button class="info_btn btn btn-primary btn-lg" onclick="redirect()">返回首页</button>
</div>

</body>
</html><?php }} ?>