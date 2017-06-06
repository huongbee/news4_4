<?php
include_once('database.php');

class ChitietTinModel extends database{


	public function getNewsDetail($id_tin){
		$sql = "SELECT * FROM tintuc WHERE id = $id_tin";
		$this->setQuery($sql);
		return $this->loadRow(array($id_tin));

	}


	public function getComment($id_tin){
		$sql = "SELECT * FROM comment WHERE idTinTuc = $id_tin";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_tin));
	}


}

?>