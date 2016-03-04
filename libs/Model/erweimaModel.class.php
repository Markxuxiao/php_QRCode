<?php
	include(dirname(dirname(__FILE__)).'/ORG/phpqrcode/qrlib.php');
	class erweimaModel{

		public $_table = 'erweima';

		function findAll_orderby_dateline(){
			$sql = 'select * from '.$this->_table.' ';
			return DB::findAll($sql);
		}

		function find_limit_to($a,$b){
			$sql = 'select * from '.$this->_table.' limit '.$a.','.$b;
		
			return DB::findAll($sql);
		}
		function find_in($data){
			$sql = 'select * from '.$this->_table.' where nid IN ('.$data.')';
			return DB::findAll($sql);
		}
		function findOne_by_id($id){
			$sql = 'select * from '.$this->_table.' where nid='.$id;
			return DB::findOne($sql);
		}

		function del_by_id($id){
			return DB::del($this->_table, 'id='.$id);
		}

		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql, 0, 0);
		}

		//转换字符串为二维码图片，返回图片路径
		function urlForPNG($data) {
			//return dirname(dirname(__FILE__));
			$tempDir = TWO_D_CODE_FILE;
			$codeContents = $data; 
			$fileName = $data.'.png'; 
			 
			$pngAbsoluteFilePath = $tempDir.$fileName; 

			if (!file_exists($pngAbsoluteFilePath)) { 
			    QRcode::png($codeContents, $pngAbsoluteFilePath); 
				return $pngAbsoluteFilePath;
			} else { 
				return $pngAbsoluteFilePath;
			} 
		}



	}
?>