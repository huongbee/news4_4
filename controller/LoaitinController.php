<?php
include('controller.php');

class LoaitinController extends Controller{

	public function getLoaitin(){
		///$data = array();
		return $this->loadView('type');
	}
}


?>