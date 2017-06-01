<?php
include('controller.php');
include('model/LoaitinModel.php'); //bước 1
include('pager.php');

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


		$currentPage    = (isset($_GET['page'])) ? $_GET['page'] : 1;
		$pagination     = new pagination(count($tintheoloai),$currentPage,5,4); //tổng số trang,trang hien tai,so phần tử trên trang, số trang sẽ hiển thị
		$paginationHTML = $pagination->showPagination();
		$position       = ($currentPage-1)*$pagination->_nItemOnPage;

		$tintheoloai = $model->getTintucPhantrang($id_loai,$position, $pagination->_nItemOnPage);



		$loaitin = $model->getTypeById($id_loai);
		$arrayData = array(
						'menu'=>$menu,
						'tintheoloai'=>$tintheoloai,
						'loaitin'=>$loaitin,
						'list'=>$paginationHTML
					);
		return $this->loadView('type',$arrayData);
	}
}


?>