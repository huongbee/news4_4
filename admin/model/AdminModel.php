<?php

include('database.php');
class AdminModel extends database{

	public function getLoaitin(){
		$sql = "SELECT * FROM loaitin";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getTintucByIdLoai($id){
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin=$id";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id));
	}
}


?>