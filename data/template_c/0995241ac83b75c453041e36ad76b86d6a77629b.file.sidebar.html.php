<?php /* Smarty version Smarty-3.1.16, created on 2016-02-29 05:57:31
         compiled from "tpl\admin\sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:1476956d25f8a978ae2-53718320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0995241ac83b75c453041e36ad76b86d6a77629b' => 
    array (
      0 => 'tpl\\admin\\sidebar.html',
      1 => 1456721846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1476956d25f8a978ae2-53718320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d25f8a97c961_56559180',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d25f8a97c961_56559180')) {function content_56d25f8a97c961_56559180($_smarty_tpl) {?>
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="admin.php"><span class="am-icon-home"></span> 首页</a></li>
        <li><a href="admin.php?controller=admin&method=erweima"><span class="am-icon-table"></span> 二维码打印</a></li>
        <li><a href="admin.php?controller=admin&method=logout"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

<div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          
        </div>
      </div>

      
    </div>
  </div>
  <!-- sidebar end -->

  
<?php }} ?>
