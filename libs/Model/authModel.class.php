<?php
	class authModel{

		function checkauth($username, $password){
			//$adminobj = M('admin');
			//$auth = $adminobj -> findOne_by_username($username);
			$auth = array('name' =>'admin' ,'password' => 'admin' );
			if((!empty($auth))&&$auth['password']==$password){
				return $auth;
			}else{
				return false;
			}
		}

	}
?>