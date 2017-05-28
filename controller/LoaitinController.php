<?php
include('controller.php');
include('model/LoaitinModel.php'); //bước 1

class LoaitinController extends Controller{

	public function getLoaitin(){
		$menu = $this->getMenu();
		$model = new LoaitinModel(); //Bước 2

		
		if(isset($_GET['id'])){
			$id_loai = (int)$_GET['id'];
		}
		else{
			header('Location:index.php');
		}
		$tintheoloai = $model->getNewsByIdType($id_loai); //bước 3
		$loaitin = $model->getTypeById($id_loai);
		$arrayData = array(
						'menu'=>$menu,
						'tintheoloai'=>$tintheoloai,
						'loaitin'=>$loaitin
					);
		return $this->loadView('type',$arrayData);
	}
}


?>