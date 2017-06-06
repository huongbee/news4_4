<?php
include_once('database.php');

class ChitietTinModel extends database{


	public function getNewsDetail($id_tin){
		$sql = "SELECT * FROM tintuc WHERE id = $id_tin";
		$this->setQuery($sql);
		return $this->loadRow(array($id_tin));

	}


	public function getComment($id_tin){
		$sql = "SELECT m.*, u.name,u.avatar FROM comment m JOIN users u ON m.idUser = u.id WHERE idTinTuc = $id_tin";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_tin));
	}


	public function addComment($idTinTuc, $idUser,$comment){
		$sql = "INSERT INTO comment(idUser,idTinTuc,NoiDung) VALUES (?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($idTinTuc, $idUser,$comment));
		if($result){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}


}

?>