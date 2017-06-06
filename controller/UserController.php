<?php
include('controller.php');
include('model/UserModel.php');
class UserController extends Controller{

	public function getRegister(){
		$menu = $this->getMenu();
		$arrData = array('menu'=>$menu);
		return $this->loadView('register',$arrData);
	}


	public function postRegister($name,$email,$password){
		$model = new UserModel();
		$user = $model->addUser(array('',$name,$email,$password,'',''));
		print_r($user); //thành công =>id
						//thất bại => false
	}


	public function postRegister2($name,$email,$password){
		$model = new UserModel();
		$user = $model->addUser2($name,$email,$password);
		
		if($user){
			$user = $model->getUser($user);
			$_SESSION['name'] = $user->name;
			//print_r($user);
			if(isset($_SESSION['error'])){
				unset($_SESSION['error']);
			}
			header('Location:index.php');
		}
		else{
			$_SESSION['error'] = "Đăng kí không thành công";
		}
	}


	public function getLogin(){
		$menu = $this->getMenu();
		$arrData = array('menu'=>$menu);
		return $this->loadView('login',$arrData);
	}


	public function postLogin($email,$password){
		$model = new UserModel();
		$user = $model->getUserLogin($email,$password);
		if($user){
			$_SESSION['name'] = $user->name;
			$_SESSION['id_user'] = $user->id;
			//print_r($user);
			if(isset($_SESSION['error2'])){
				unset($_SESSION['error2']);
			}
			header('Location:index.php');
		}
		else{
			$_SESSION['error2'] = "Đăng nhập không thành công";
		}
		
	}





}



?>