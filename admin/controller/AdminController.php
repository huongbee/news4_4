<?php
include('controller.php');
include('model/AdminModel.php');
class AdminController extends Controller{

	public function getLoaitin(){
		$model = new AdminModel;
		$loaitin = $model->getLoaitin();
		return $this->loadView('danh_sach_loai_tin',$loaitin);
	}


	public function getTintuc(){
		$idLoaitin = $_GET['id'];
		$model = new AdminModel();
		$tintuc = $model->getTintucByIdLoai($idLoaitin);
		return $this->loadView('danh_sach_tin',$tintuc);
	}
}

?>