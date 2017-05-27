<?php
include('controller.php');

class HomeController extends Controller{


	public function getIndex(){
		$model = new HomeModel;
		$data = $model->getSlide();
		$menu = $this->getMenu();
		$tinnoibat = $model->getTinNoibat();

		$mangData = array(
						'slide'=>$data,
						'menu'=>$menu,
						'tinnoibat'=>$tinnoibat
					);
		
		return $this->loadView('trangchu',$mangData);
	}
}


?>