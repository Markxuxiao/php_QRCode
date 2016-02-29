<?php /* Smarty version Smarty-3.1.16, created on 2016-02-29 06:52:06
         compiled from "tpl\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1607256d3cc35a8d796-17541986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c80e3fb42803f2b44cb2faa36ed4473503b114f' => 
    array (
      0 => 'tpl\\admin\\login.html',
      1 => 1456725118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607256d3cc35a8d796-17541986',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d3cc35afadb1_42019051',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d3cc35afadb1_42019051')) {function content_56d3cc35afadb1_42019051($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">


</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>系统登录</h3>
    <hr>

    <br>

    <form method="post" action="admin.php?controller=admin&method=login" class="am-form">
      <label for="user">用户名:</label>
      <input type="text" name="username" id="username" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
     
      <br />
      <div class="am-cf">
        <input type="submit" name="submit" value="登 录" class="am-btn am-btn-primary am-btn-block am-fl">

      </div>
    </form>
    <hr>

  </div>
</div>
</body>
</html><?php }} ?>
