<?php
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = new UserController();
	$user->postLogin($email,md5(md5($password)));
}

?>

<div class="banner-bottom">
	<div class="container">
		<!-- news-and-events -->
	<div class="row carousel-holder">
		<div class="col-md-4"></div>
	    <div class="col-md-4">
	        <div class="panel panel-default">
			  	<h2>Login</h2>

			  	<?php
			  	if(isset($_SESSION['error2'])){
			  		echo "<div class='alert alert-danger'>$_SESSION[error2]</div>";
			  	}
			  	?>
			  	<div class="panel-body">
			    	<form method="POST">
						<div>
			    			<label>Email</label>
						  	<input type="email" class="form-control" placeholder="Email" name="email">
						</div>
						<br>	
						<div>
			    			<label>Password</label>
						  	<input type="password" class="form-control" name="password">
						</div>
						<br>
						<button type="submit" name="login" class="btn btn-success">Submit
						</button>
			    	</form>
			  	</div>
			</div>
	    </div>
	    <div class="col-md-4"></div>
	</div>
	<div class="clearfix" style="margin-bottom: 100px"></div>
		<!-- //news-and-events -->
	</div>
</div>