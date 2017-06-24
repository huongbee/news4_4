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
			
			setcookie('thanhcong','Sửa thành công',time()+30);
			header('Location:index.php');
		}
		else{
			setcookie('thatbai','Lỗi',time()+30);
			header("Location:edit_loaitin.php?id=$id");
		}
	}
	public function getAddLoaitin(){
		$model = new AdminModel();
		$theloai = $model->getTheLoai();

		return $this->loadView('add_loaitin',$theloai);
	}


	public function postAddLoaitin(){
		$id_theloai = $_POST['id_theloai'];
		$name = $_POST['ten'];
		$alias = changeTitle($_POST['ten']);
		$model = new AdminModel();
		$result = $model->addLoaitin($id_theloai, $name, $alias);
		if($result>0){
			setcookie('thanhcong','Thêm thành công',time()+30);
			header('Location:index.php');
		}
		else{
			setcookie('thatbai','Lỗi',time()+30);
			header("Location:add_loaitin.php");
		}
	}

	public function getDeteleLoaitin(){
		$id = $_GET['id'];
		$model = new AdminModel();
		$result = $model->deleteLoaitin($id);

		if($result==true){
			setcookie('thanhcong','Xóa thành công',time()+30);
			header('Location:index.php');
		}
		else{
			setcookie('thatbai','Lỗi',time()+30);
			header("Location:index.php");
		}
	}

	public function getTintucAjax(){
		$idLoaitin = $_GET['id_loaitin'];
		$model = new AdminModel();
		$tintuc = $model->getTintucByIdLoai($idLoaitin);
		return $this->getView('ajax_get_news_by_type',$tintuc);
	}

















	public function getTintuc(){
		$idLoaitin = $_GET['id'];
		$model = new AdminModel();
		$tintuc = $model->getTintucByIdLoai($idLoaitin);
		return $this->loadView('danh_sach_tin',$tintuc);
	}

	public function getAllNews(){
		$model = new AdminModel;
		$loaitin = $model->getAllLoaitin();
		$tintuc = $model->getAllTintuc();

		$arrData = array('loaitin'=>$loaitin, 'tintuc'=>$tintuc);
		return $this->loadView('all_news',$arrData);
	}


	public function getInsertNews(){
		$model = new AdminModel();
		$loaitin = $model->getAllLoaitin();
		return $this->loadView('add_tintuc',$loaitin);
	}



	public function postAddNews(){
		$tieude = $_POST['ten'];
		$alias = changeTitle($_POST['ten']);
		$id_loai = $_POST['id_loai'];
		$tomtat = $_POST['tomtat'];
		$noidung = $_POST['noidung'];
		$hinh = '';
		if(isset($_FILES['hinh']['name'])){
			$hinh = $_FILES['hinh']['name'];
			move_uploaded_file($_FILES['hinh']['tmp_name'], '../public/images/tintuc/'.$_FILES['hinh']['name']);
		}
		$noibat = 0;
		if($_POST['noibat']==1 || $_POST['noibat']=='on'){
			$noibat = 1;
		}

		$model = new AdminModel();
		$result = $model->insertNews($tieude, $alias,$tomtat, $noidung,$hinh,$noibat,$id_loai);

		if($result > 0){
			setcookie('thanhcong','Thêm thành công',time()+30);
			header('Location:all_news.php');
		}
		else{
			setcookie('thatbai','Lỗi',time()+30);
			header("Location:all_news.php");
		}


	}

	public function getEditNews(){
		$model = new AdminModel();
		$loaitin = $model->getAllLoaitin();
		$id = $_GET['id'];
		$tintuc = $model->getTintucById($id);
		$arrData = array('loaitin'=>$loaitin, 'tintuc'=>$tintuc);
		return $this->loadView('edit_tintuc',$arrData);
	}


	public function postEditNews(){
		$id_tin = $_GET['id'];
		$tieude = $_POST['ten'];
		$alias = changeTitle($_POST['ten']);
		$id_loai = $_POST['id_loai'];
		$tomtat = $_POST['tomtat'];
		$noidung = $_POST['noidung'];
		$model = new AdminModel();
		//print_r($_FILES['hinh']); die;
		if(($_FILES['hinh']['name'])!=''){
			$hinh = $_FILES['hinh']['name'];
			move_uploaded_file($_FILES['hinh']['tmp_name'], '../public/images/tintuc/'.$_FILES['hinh']['name']);
			$model->editImageNews($hinh,$id_tin);
		}
		$noibat = 0;
		if($_POST['noibat']==1 || $_POST['noibat']=='on'){
			$noibat = 1;
		}

		
		$result = $model->editNews($tieude, $alias,$tomtat, $noidung,$noibat,$id_loai,$id_tin);

		if($result > 0){
			setcookie('thanhcong','Sửa thành công',time()+30);
			header('Location:all_news.php');
		}
		else{
			setcookie('thatbai','Lỗi',time()+30);
			header("Location:edit_tintuc.php");
		}


	}

	public function getDeteleTintuc(){
		$id = $_GET['id'];
		$model = new AdminModel();
		$result = $model->deleteTintuc($id);

		if($result==true){
			setcookie('thanhcong','Xóa thành công',time()+30);
			
		}
		else{
			setcookie('thatbai','Lỗi',time()+30);
			
		}
	}

}

?>