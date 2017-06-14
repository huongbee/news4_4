<?php

class Controller{

	public function loadView($view,$data=array()){
		include('views/layout.php');
	}

	public function getView($view,$data=array()){
		include("views/$view.php");
	}


	
}

?>