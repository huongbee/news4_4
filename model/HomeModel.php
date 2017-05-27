<?php
include('database.php');
class HomeModel extends database{

	public function getSlide(){
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getMenu(){
		$sql = "SELECT tl.id, tl.Ten, GROUP_CONCAT(DISTINCT lt.id,':',lt.Ten,':',lt.TenKhongDau) as LoaiTin FROM theloai tl INNER JOIN loaitin lt ON lt.idTheLoai = tl.id GROUP BY tl.id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	public function getTinNoibat(){
		$sql = "SELECT * FROM tintuc WHERE NoiBat=1 ORDER BY id DESC LIMIT 0,10";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

}

?>