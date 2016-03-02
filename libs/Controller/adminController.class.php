<?php

	class adminController{

		public $auth;

		public function __construct(){
			//error_reporting(0);//禁止报告错误
			session_start();
			if(!(isset($_SESSION['auth']))&&(PC::$method!='login')){
				$this->showmessage('请登录后在操作！', 'admin.php?controller=admin&method=login');
			}else{
				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
			}
		}

		public function index(){
			// $newsobj = M('news');
			// $newsnum = $newsobj->count();
			// VIEW::assign(array('newsnum'=>$newsnum));
			VIEW::display('admin/index.html');
		}
		public function erweima(){


			$endData = $limit = TWO_D_CODE_NUMBER ;//配置分页显示条数
			$page = 1;
			$startData = 0;
			$data_count;

			if(isset($_GET['page'])){
				$page = $_GET['page'];
				if ($page>1) {
					$startData =($page-1)*$limit;
					$endData = $page*$limit;
				}
				
			}
			

			$erweima_obj = M('erweima');
			$data = $erweima_obj->find_limit_to($startData,$limit);
			$data_count = $erweima_obj->count();
			//var_dump($data);
			//检查二维码生成
			foreach ($data as $key => $value) {
				$url = $erweima_obj->urlForPNG($value['nid']);
				$data[$key]['url']= $url;
			}

			//生成分页
			$page_d = new Page( $data_count , $page , $limit , 6 , 'admin.php?controller=admin&method=erweima' );
			$page_d->__getpagelist();
		
			
			

			VIEW::assign(array('page'=>$page_d->result));

			VIEW::assign(array('data'=>$data));

			VIEW::display('admin/erweima.html');
		}

		public function erweima_find_one(){
			if(isset($_GET['erweima_id'])){
				$erweima_id = $_GET['erweima_id'];
			}
			$erweima_obj = M('erweima');
			$data = $erweima_obj->findOne_by_id($erweima_id);
			if($data){
			$url = $erweima_obj->urlForPNG($data['nid']);
			$data['url']= $url;
			$data_d = array();
			$data_d[0]=$data;
			}
			
			var_dump($data_d);
			VIEW::assign(array('data'=>$data_d));
			VIEW::display('admin/erweima.html');
		}







		public function login(){
			if(!isset($_POST['submit'])){
				VIEW::display('admin/login.html');
			}else{
				$this->checklogin();
			}
		}

		public function logout(){
			unset($_SESSION['auth']);
				$this->showmessage('退出成功！', 'admin.php?controller=admin&method=login');
		}

		private function checklogin(){
			if(empty($_POST['username'])||empty($_POST['password'])){
				$this->showmessage('请填写用户名、密码', 'admin.php?controller=admin&method=login');
			}
			$username = daddslashes($_POST['username']);
			$password = daddslashes($_POST['password']);
			$authobj = M('auth');
			if($auth = $authobj->checkauth($username, $password)){
				$_SESSION['auth'] = $auth;
				$this->showmessage('登录成功！', 'admin.php?controller=admin&method=index');
			}else{
				$this->showmessage('登录失败！用户名或密码错误！', 'admin.php?controller=admin&method=login');
			}
		}


		private function showmessage($info, $url){
			echo "<script>alert('$info');window.location.href='$url'</script>";
			exit;
		}
	}
?>