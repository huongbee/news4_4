<?php
include_once('database.php');

class ChitietTinModel extends database{


	public function getNewsDetail($id_tin){
		$sql = "SELECT * FROM tintuc WHERE id = $id_tin";
		$this->setQuery($sql);
		return $this->loadRow(array($id_tin));

	}


	public function getComment($id_tin){
		$sql = "SELECT m.*, u.name,u.avatar FROM comment m INNER JOIN users u ON m.idUser = u.id WHERE idTinTuc = $id_tin";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_tin));
	}


	public function addComment($idTinTuc, $idUser,$comment){
		$sql = "INSERT INTO comment(idUser,idTinTuc,NoiDung) VALUES (?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($idUser, $idTinTuc, $comment));
		
		if($result){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}


	public function getCommentById($id){
		$sql = "SELECT m.*, u.name,u.avatar FROM comment m  INNER JOIN users u ON m.idUser = u.id WHERE m.id = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}


}

?>