<?php
if(isset($_POST['dangki'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = trim($_POST['password']);
	$rePassword = trim($_POST['passwordAgain']);
	if($password == $rePassword){
		$user = new UserController();
		$user->postRegister2($name,$email,md5(md5($password)));
	}
	else{
		$_SESSION['error'] = 'Mật khẩu không giống nhau';
	}
}

?>
<div class="banner-bottom">
	<div class="container">
		<!-- news-and-events -->
		<div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
			  	<h2>Đăng kí</h2>
			  	<?php
			  	if(isset($_SESSION['error'])){
			  	?>
			  	<div class="alert alert-danger">
			  		<?=$_SESSION['error']?>
			  	</div>
			  	<?php
			  	}
			  	?>
			  	<div class="panel-body">
			    	<form method="POST" action="">
			    		<div>
			    			<label>Họ tên</label>
						  	<input type="text" class="form-control" placeholder="Nhập họ tên" name="name" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
						</div>
						<br>	
						<div>
			    			<label>Mật khẩu</label>
						  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
			    			<label>Nhập lại mật khẩu</label>
						  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
						</div>
						<br>
						<button type="submit" name="dangki" class="btn btn-success">Đăng kí
						</button>

			    	</form>
			  	</div>
			</div>
        </div>
        <div class="col-md-2">
        </div>
        <div class="clearfix"></div>
    </div>
		<!-- //news-and-events -->
	</div>
</div>