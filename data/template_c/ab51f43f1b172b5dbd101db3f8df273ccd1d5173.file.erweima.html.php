<?php /* Smarty version Smarty-3.1.16, created on 2016-02-29 09:35:20
         compiled from "tpl\admin\erweima.html" */ ?>
<?php /*%%SmartyHeaderCode:932156cebb4d1ad1c1-12396706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab51f43f1b172b5dbd101db3f8df273ccd1d5173' => 
    array (
      0 => 'tpl\\admin\\erweima.html',
      1 => 1456734914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '932156cebb4d1ad1c1-12396706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56cebb4d1d42c9_07367262',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
    'page' => 0,
    'vols' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cebb4d1d42c9_07367262')) {function content_56cebb4d1d42c9_07367262($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="am-cf admin-main">
  <?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
  .erweimapng{
    width:170px;
    float:left;
    border: 1px solid;
    margin: 1px 1px 0 0;
  }
</style>
<!-- content start -->
<div class="admin-content">
  <div class="am-g">
    <div class="am-u-sm-12 am-u-md-6">
      <div class="am-btn-toolbar">
        <div class="am-btn-group am-btn-group-xs">
          <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
          <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
          <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
          <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
        </div>
      </div>
    </div>
    <div class="am-u-sm-12 am-u-md-3">
      <div class="am-form-group">
        <select data-am-selected="{btnSize: 'sm'}">
          <option value="option1">所有类别</option>
          <option value="option2">IT业界</option>
          <option value="option3">数码产品</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
        </select>
      </div>
    </div>
    <div class="am-u-sm-12 am-u-md-3">
         <form id="form1" name="form1" method="get" action="admin.php">
      <div class="am-input-group am-input-group-sm">
        <input name="controller"  type="hidden" value="admin">
        <input name="method"  type="hidden" value="erweima">
        <input name="erweima_id" id="erweima_id" type="text" class="am-form-field">

        <span class="am-input-group-btn">
          <button class="am-btn am-btn-default" type="submit">搜索</button>
        </span>
       
      </div>
       </form>
    </div>
  </div>

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

  	<!-- 分页模板 -->
  	<table class="am-print-hide" style="margin-top:10px;">
  	    <tr>
  		    <td>
  				共<?php echo $_smarty_tpl->tpl_vars['page']->value['count'];?>
条数据 每页<?php echo $_smarty_tpl->tpl_vars['page']->value['pagesize'];?>
条 共<?php echo $_smarty_tpl->tpl_vars['page']->value['pagecount'];?>
页 当前第<?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>
页
  			</td>
  			<td>
  				<?php if ($_smarty_tpl->tpl_vars['page']->value['first']==1) {?>
  					<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
">首页</a>
  				<?php } else { ?>
  					首页
  				<?php }?>

  				<?php if ($_smarty_tpl->tpl_vars['page']->value['pre']==1) {?>
  					<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value['page']-1;?>
">上一页</a>
  				<?php } else { ?>
  					上一页
  				<?php }?>

  				<?php  $_smarty_tpl->tpl_vars['vols'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vols']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['pagelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vols']->key => $_smarty_tpl->tpl_vars['vols']->value) {
$_smarty_tpl->tpl_vars['vols']->_loop = true;
?>
  					
  					   <?php if ($_smarty_tpl->tpl_vars['vols']->value['link']==1) {?>
                <?php if ($_smarty_tpl->tpl_vars['vols']->value['page']!='') {?>
  							<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['vols']->value['page'];?>
">[<?php echo $_smarty_tpl->tpl_vars['vols']->value['page'];?>
]</a>
                <?php }?>
  						<?php } else { ?>
  							[<?php echo $_smarty_tpl->tpl_vars['vols']->value['page'];?>
]
  						<?php }?>
  					
  				<?php } ?>

  				<?php if ($_smarty_tpl->tpl_vars['page']->value['next']==1) {?>
  					<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value['page']+1;?>
">下一页</a>
  				<?php } else { ?>
  				
  					下一页
  				<?php }?>

  				<?php if ($_smarty_tpl->tpl_vars['page']->value['last']==1) {?>
  					<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value['pagecount'];?>
">尾页</a>
  				<?php } else { ?>
  					尾页
  				<?php }?>
  			</td>
  		</tr>
  	</table>
  	<!-- 分页模板end -->

 
  </div>
  <!-- content end -->

</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
