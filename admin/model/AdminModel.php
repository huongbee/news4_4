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


	public function getTheLoai(){
		$sql = "SELECT * FROM theloai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function getLoaitinById($id){
		$sql = "SELECT * FROM loaitin WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}

	public function editLoaiTin($idTheLoai, $name, $alias, $id){
		$sql = "UPDATE loaitin SET idTheLoai=$idTheLoai, Ten='$name', TenKhongDau = '$alias' WHERE id=$id";
		$this->setQuery($sql);
		$result = $this->execute(array($idTheLoai, $name, $alias, $id));
		if($result==true){
			return $id;
		}
		else{
			return false;
		}
	}


	public function addLoaitin($id_theloai,$ten, $alias){
		$sql = "INSERT INTO loaitin(idTheLoai,Ten,TenKhongDau) VALUES($id_theloai,'$ten', '$alias')";
		$this->setQuery($sql);
		$result = $this->execute(array($id_theloai,$ten, $alias));
		if($result){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}

	public function deleteLoaitin($id){
		$sql = "DELETE FROM loaitin WHERE id=$id";
		$this->setQuery($sql);
		return $this->execute(array($id));
	}


	public function getAllTintuc(){
		$sql = "SELECT * FROM tintuc ORDER BY id DESC LIMIT 0,200 ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}


	public function getAllLoaitin(){
		$sql = "SELECT * FROM loaitin";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}


?>