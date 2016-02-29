<?php /* Smarty version Smarty-3.1.16, created on 2016-02-29 07:28:01
         compiled from "tpl\admin\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1192656d25f8a9884f1-49216905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54776a2ba0d3ed82a608f3e41cd42dee93e05e0b' => 
    array (
      0 => 'tpl\\admin\\footer.html',
      1 => 1456727275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1192656d25f8a9884f1-49216905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d25f8a9884f0_66306526',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d25f8a9884f0_66306526')) {function content_56d25f8a9884f0_66306526($_smarty_tpl) {?>

<a href="#" class="am-print-hide am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer class="am-print-hide">
  <hr>
  <p class="am-padding-left">© 2016 家盛时代.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
    $(".erweimapng").on('click',function () {
      $(this).remove();
    })
</script>
</body>
</html>
<?php }} ?>
