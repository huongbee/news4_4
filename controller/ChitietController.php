<?php

include('controller.php');
class ChitietController extends Controller{

	public function getChitiettin(){

		return $this->loadView('chitiet');
	}
}


?>