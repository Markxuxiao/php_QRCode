<?php
/*  Page.Class.php
 *  Page
 *  @link        http://www.sunboyu.cn
 *  @package     OA
 *  @version     V1.0
 *
 *  2008 08 28  sunboyu@gmail.com
*/
class Page {
    public $count; //结果总数
    public $page; //当前页
    public $pagesize; //每页结果数
    public $pagecount; //翻页数
    public $baseurl; //url
    public $result; //结果数组集
    public $pagelist; //每翻页数
    //构造函数，初始化变量
    function __construct($count, $page, $pagesize, $pagelist, $baseurl = false) {
        $this->count = $count;
        $this->page = $page;
        $this->pagesize = $pagesize;
        $this->baseurl = isset($baseurl) ? $baseurl : $this->__geturl();
        $this->pagelist = $pagelist;
    }
    //获得当前url
    function __geturl() {
        return ereg_replace("(^|&)page={$page}", "", $_SERVER['QUERY_STRING']);
    }
    //获得分页列表
    function __getpagelist() {
        $this->result['count'] = $this->count;
        $this->result['page'] = $this->page;
        $this->result['pagesize'] = $this->pagesize;
        $this->result['pagecount'] = ceil($this->count / $this->pagesize);
        if ($this->result['pagecount'] <= 1) //只有一页以下
        {
            $this->result['pagelist'] = 0;
        } else
        //一页以上
        {
            //第一页,下一页的算法
            $this->result['first'] = ($this->page == 1) ? 0 : 1;
            $this->result['pre'] = ($this->page == 1) ? 0 : 1;
            //后一页，尾页的算法
            $this->result['next'] = ($this->page == $this->result['pagecount']) ? 0 : 1;
            $this->result['last'] = ($this->page == $this->result['pagecount']) ? 0 : 1;
            //起始
            $pagearray = array();
            $start = floor(($this->page - 1) / $this->pagelist) * $this->pagelist + 1;
            for ($i = 0; $i < $this->pagelist; $i++) {
                if (($start + $i) <= $this->result['pagecount']) {
                    $pagearray[$i]['page'] = $start + $i;
                }
                if (($start + $i) != $this->page) {
                    $pagearray[$i]['link'] = 1;
                } else {
                    $pagearray[$i]['link'] = 0;
                }
            }
            //分页导航列表
            $this->result['pagelist'] = $pagearray;
            $this->result['baseurl'] = $this->baseurl;
        }
    }
}
?>
