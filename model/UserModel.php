<?php

include_once('database.php');

class UserModel extends database{
	public function addUser($data=array()){
		//print_r($data);die;
		if(!empty($data)){
			return $this->insert('users',$data);
		}
		else{
			return false;
		}
		
	}

	public function addUser2($name,$email,$password){
		$sql = "INSERT INTO users(name,email,password) VALUES (?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($name,$email,$password));
		if($result){
			return $this->getLastId();
		}
		else{
			return false;
		}
	}


	public function getUser($id){
		$sql = "SELECT * FROM users WHERE id=$id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}

	public function getUserLogin($email,$password){
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$this->setQuery($sql);
		return $this->loadRow(array($email,$password));
	}


}


?>