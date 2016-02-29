<?php /* Smarty version Smarty-3.1.16, created on 2016-02-29 06:09:24
         compiled from "tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:491556ceb64d5ea488-48883204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960134157fa259e4e66125a4a4ef37297a26b6d9' => 
    array (
      0 => 'tpl\\admin\\index.html',
      1 => 1456722562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '491556ceb64d5ea488-48883204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56ceb64d615408_46997833',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ceb64d615408_46997833')) {function content_56ceb64d615408_46997833($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="am-cf admin-main">
  <?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">一些常用模块</strong></div>
    </div>

    <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="admin.php?controller=admin&method=erweima" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>二维码打印<br/></a></li>

    </ul>

    <div class="am-g">
      <div class="am-u-sm-12">
      
      </div>
    </div>

 
  </div>
  <!-- content end -->

</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
