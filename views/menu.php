<!-- menu -->
	<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
			<div class="logo">
				<a class="navbar-brand" href="index.html"><span>T</span> Trendy Blog</a>
			</div>
		</div>
<?php

$menu = $data['menu'];
//print_r($menu )
?>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
				<li class="act"><a href="index.php" class="effect1 active">Trang chủ</a></li>

				<?php
				foreach($menu as $mn){
					//print_r($mn)
					$loaitin = $mn->LoaiTin;
					$arrLoaitin = explode(',', $loaitin);
					//print_r($arrLoaitin);
					//list() = explode(':', string)
				?>

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					  <?=$mn->Ten?> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">

					<?php
					foreach($arrLoaitin as $loai){
						//print_r($loai)
						list($idloaitin,$tenloai,$aliasLoai) = explode(':', $loai)
					?>
					  <li><a href="<?=$idloaitin?>-<?=$aliasLoai?>"><?=$tenloai?></a></li>
					<?php
					}
					?>
					</ul>
				</li>

				<?php
				}
				?>
				<li><a href="contact.html">Liên hệ</a></li>

				<?php

				if(isset($_SESSION['name'])){
				?>

				<li role='presentation' class='dropdown'>
					<a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>Chào bạn <?=$_SESSION['name']?>
					<span class='caret'></span>
					</a>
						<ul class='dropdown-menu'>
							<li><a href='logout.php'>Đăng xuất</a></li>
						</ul>
				</li>
				<?php
				}
				else{

				?>
				<li><a href="dang-ki">Đăng kí</a></li>
				<li><a href="dang-nhap">Đăng nhập</a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</nav>
	<!-- //menu -->