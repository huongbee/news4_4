<?php
ob_start();
include('controller.php');
include('model/AdminModel.php');
include('../inc/functions.php');
class AdminController extends Controller{

	public function getLoaitin(){
		$model = new AdminModel;
		$loaitin = $model->getLoaitin();
		return $this->loadView('danh_sach_loai_tin',$loaitin);
	}


	public function getEditLoaitin(){
		$model = new AdminModel();
		$theloai = $model->getTheLoai();

		$idLoaitin = $_GET['id'];
		$loaitin = $model->getLoaitinById($idLoaitin);


		$arrData = array('theloai'=>$theloai,'loaitin'=>$loaitin);
		return $this->loadView('edit_loaitin',$arrData);
	}

	public function postEditLoaitin(){
		$id_theloai = $_POST['id_theloai'];
		$name = $_POST['ten'];
		$alias = changeTitle($_POST['ten']);
		$id = $_GET['id'];
		$model = new AdminModel();
		$result = $model->editLoaiTin($id_theloai, $name, $alias, $id);
		if($result == $id){
			
			setcookie('thanhcong','Sửa thành công',time()+60);
			header('Location:index.php');
		}
		else{
			setcookie('thatbai','Lỗi',time()+60);
			header("Location:edit_loaitin.php?id=$id");
		}
	}
















	public function getTintuc(){
		$idLoaitin = $_GET['id'];
		$model = new AdminModel();
		$tintuc = $model->getTintucByIdLoai($idLoaitin);
		return $this->loadView('danh_sach_tin',$tintuc);
	}
}

?>