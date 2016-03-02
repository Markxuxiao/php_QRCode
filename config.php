<?php
	$config = array(
		'viewconfig' => array(
			'debugging' => false ,'left_delimiter' => '{{',  'right_delimiter' => '}}',  'template_dir' => 'tpl',  'compile_dir' => 'data/template_c'),
		'dbconfig' => array(
			'dbhost' => 'localhost', 'dbuser'=>'root', 'dbpsw' => '' , 'dbname' => 'mark_qrcode', 'dbcharset' => 'utf8')
	);

	//配置二维码图片存放文件夹
	define('TWO_D_CODE_FILE', 'TWO_D_CODE_FILE/');
	//配置二维码每一页显示个数
	define('TWO_D_CODE_NUMBER', '300');
?>