<?php
include('controller.php');

class HomeController extends Controller{


	public function getIndex(){
		$model = new HomeModel;
		$data = $model->getSlide();
		$menu = $this->getMenu();
		$tinnoibat = $model->getTinNoibat();
		$tinmoinhat = $model->getTinMoinhat(); ///
		$tinxemnhieu = $model->getTinXemnhieu();
		$mangData = array(
						'slide'=>$data,
						'menu'=>$menu,
						'tinnoibat'=>$tinnoibat,
						'tinmoinhat'=>$tinmoinhat, ///
						'tinxemnhieu'=>$tinxemnhieu
					);
		//return $this->getView('a',json_encode($mangData));

		return $this->loadView('trangchu',$mangData);
	}
}


?>