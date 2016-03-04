<?php /* Smarty version Smarty-3.1.16, created on 2016-03-02 09:27:32
         compiled from "tpl\admin\erweima_print.html" */ ?>
<?php /*%%SmartyHeaderCode:699056d6a17c71de72-82546735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c2251af805d68bfc372f84204329df0c8b5c87' => 
    array (
      0 => 'tpl\\admin\\erweima_print.html',
      1 => 1456907248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699056d6a17c71de72-82546735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56d6a17c7a2b93_59188276',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d6a17c7a2b93_59188276')) {function content_56d6a17c7a2b93_59188276($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>打印</title>
  <style>
    .erweimapng{
      width:170px;
      float:left;
      border: 1px solid;
      margin: 1px 1px 0 0;
    }
  </style>
</head>
<body>
  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf " style="width:700px;">

      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
      <div class="erweimapng" >
          <img class="am-margin-xs" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" alt="">
          <br/>
          <?php echo $_smarty_tpl->tpl_vars['value']->value['nid'];?>

      </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
        <div>无数据</div>
        <?php } ?>
     
    </div>

      

   
    </div>
    <!-- content end -->
</body>
</html>













<?php }} ?>
