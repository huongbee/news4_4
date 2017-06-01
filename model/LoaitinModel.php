<?php
include_once('database.php');


class LoaitinModel extends database{


	public function getNewsByIdType($id_loai){
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin=$id_loai";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loai));

	}


	function getTintucPhantrang($id_loai,$vt=0,$limit=1)
	{
		$sql="select tt.*, lt.TenKhongDau as ten_khong_dau from tintuc tt inner join loaitin lt on tt.idLoaiTin = lt.id where idLoaiTin = $id_loai limit $vt,$limit";
		$this->setQuery($sql);
		return $this->loadAllRows();	
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