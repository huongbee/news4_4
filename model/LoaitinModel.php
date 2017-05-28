<?php
include_once('database.php');


class LoaitinModel extends database{


	public function getNewsByIdType($id_loai){
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin=$id_loai";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));

	}


	public function getTypeById($id_loai){
		$sql = "SELECT lt.Ten, tl.Ten as TenTheloai FROM loaitin lt INNER JOIN theloai tl ON lt.idTheLoai=tl.id WHERE lt.id=$id_loai";
		$this->setQuery($sql);
		return $this->loadRow(array($id_loai));
	}



	public function getRelatedNews($id){
		
	}
}



?>