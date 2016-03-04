<?php /* Smarty version Smarty-3.1.16, created on 2016-03-03 08:45:06
         compiled from "tpl\admin\erweima.html" */ ?>
<?php /*%%SmartyHeaderCode:932156cebb4d1ad1c1-12396706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab51f43f1b172b5dbd101db3f8df273ccd1d5173' => 
    array (
      0 => 'tpl\\admin\\erweima.html',
      1 => 1456991103,
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
  <div class="am-cf">
    <h4>搜索</h4>
    <div class="am-u-sm-12 am-u-md-6">
      <div class="am-btn-toolbar">
        <div class="am-btn-group am-btn-group-xs">
          <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 全部</button>
          <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 未激活</button>
          <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 已激活</button>
          <form id='erweima_print' method="post" name='erweima_print' action="admin.php?controller=admin&method=erweima_print" target="_blank" style="float:left;">
            <input name="data" type="hidden"  value="">
           <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 打印</button>
          </form>

        </div>
      </div>
    </div>
    <div class="am-u-sm-12 am-u-md-3">
      <div class="am-form-group">
        <select multiple data-am-selected="{searchBox: 1,maxHeight: 200}">
          <option selected value="option1">所有类别</option>
          <option value="option2">IT业界</option>
          <option value="option3">数码产品</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
          <option value="option3">超极本</option>
          <option value="option3">笔记本电脑</option>
          <option value="option3">平板电脑</option>
          <option value="option3">只能手机</option>
          <option value="option3">超极本</option>
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
        <input name="method"  type="hidden" value="erweima_find_one">

        <input name="erweima_id" id="erweima_id" type="text" class="am-form-field">

        <span class="am-input-group-btn">
          <button class="am-btn am-btn-default" type="submit">搜索</button>
        </span>
       
      </div>
       </form>
    </div>
  </div>
    <div class="am-g">
          <div class="am-u-sm-12">
            <form class="am-form">
              <table id="table-single" class="am-table am-table-striped am-table-hover table-main" >
                <thead>
                  <tr>
                    <th class="table-check">
                      <input id = "check-all-box" type="checkbox" />
                    </th>
                    <th class="table-id">ID</th>
                    <th class="table-title">PID</th>
                    <th class="table-type">URL</th>
                    <th class="table-author am-hide-sm-only">作者</th>
                    <th class="table-date am-hide-sm-only">修改日期</th>
                    <th class="table-set">操作</th>
                  </tr>
              </thead>
              <tbody id="table-single-tbody">
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <tr>
                  <td><input type="checkbox" ></td>
                  <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nid'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
</td>
                  <td class="am-hide-sm-only">测试1号</td>
                  <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                  <td>
                    <div class="am-btn-toolbar">
                      <div class="am-btn-group am-btn-group-xs">
                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                      </div>
                    </div>
                  </td>
                </tr>
                        
    
                          <?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
                          </tr>
                            <td>无数据</td>
                           <td>无数据</td>
                           <td>无数据</td>
                           </tr>
                            <?php } ?>
                  
          </tbody>
        </table>


          <!-- 分页模板end -->
          <?php if ($_smarty_tpl->tpl_vars['page']->value['count']) {?>
          <div class="am-cf">
          共 <?php echo $_smarty_tpl->tpl_vars['page']->value['count'];?>
 条记录,每页<?php echo $_smarty_tpl->tpl_vars['page']->value['pagesize'];?>
条

          <div class="am-fr">
            <ul class="am-pagination">
                      <?php if ($_smarty_tpl->tpl_vars['page']->value['first']==1) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
">首页</a></li>
                        <?php } else { ?>

                        <li class="am-disabled"><a href="javascript:;">首页</a></li>
                      <?php }?>

                      <?php if ($_smarty_tpl->tpl_vars['page']->value['pre']==1) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value['page']-1;?>
">«</a></li>
                        <?php } else { ?>
                        <li class="am-disabled"><a href="javascript:;">«</a></li>
                      <?php }?>

                      <?php  $_smarty_tpl->tpl_vars['vols'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vols']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['pagelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vols']->key => $_smarty_tpl->tpl_vars['vols']->value) {
$_smarty_tpl->tpl_vars['vols']->_loop = true;
?>
                         <?php if ($_smarty_tpl->tpl_vars['vols']->value['link']==1) {?>
                          <?php if ($_smarty_tpl->tpl_vars['vols']->value['page']!='') {?>
                           <li><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['vols']->value['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['vols']->value['page'];?>
</a></li>
                          <?php }?>
                        <?php } else { ?>
                        <li class="am-active"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['vols']->value['page'];?>
</a></li>
                        <?php }?>
                      <?php } ?>

                      <?php if ($_smarty_tpl->tpl_vars['page']->value['next']==1) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value['page']+1;?>
">»</a></li>
                      <?php } else { ?>
                        <li class="am-disabled"><a href="javascript:;">»</a></li>
                      <?php }?>

                      <?php if ($_smarty_tpl->tpl_vars['page']->value['last']==1) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['baseurl'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['page']->value['pagecount'];?>
">尾页</a></li>
                      <?php } else { ?>
                        <li class="am-disabled"><a href="javascript:;">尾页</a></li>
                      <?php }?>
  
            </ul>
          </div>
          <?php }?>
          <!-- 分页模板end -->

 
  </div>
  <!-- content end -->

</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
