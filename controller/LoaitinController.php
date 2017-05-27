<?php
include('controller.php');

class LoaitinController extends Controller{

	public function getLoaitin(){
		$menu = $this->getMenu();
		$arrayData = array('menu'=>$menu);
		return $this->loadView('type',$arrayData);
	}
}


?>