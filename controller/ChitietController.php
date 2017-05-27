<?php

include('controller.php');
class ChitietController extends Controller{

	

	public function getChitiettin(){
		$menu = $this->getMenu();

		$arrayData = array('menu'=>$menu);

		return $this->loadView('chitiet',$arrayData);
	}
}


?>