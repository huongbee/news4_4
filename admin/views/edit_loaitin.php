<?php
ob_start();
$theloai = $data['theloai'];
$loaitin = $data['loaitin'];

if(isset($_POST['sua'])){
	$loaitin = new AdminController();
	$loaitin->postEditLoaitin();
}
?>

<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Sửa loại tin <?=$loaitin->Ten?></b></div>
        <div class="panel-body"> 
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<form method="POST">
		        	<label>Chọn thể loại:</label>
		        	<select name="id_theloai" class="form-control">
		        	<?php
		        	foreach($theloai as $tl){

		        	?>
		        		<option value="<?=$tl->id?>" <?=$loaitin->idTheLoai==$tl->id?"selected":''?>><?=$tl->Ten?></option>
		        	<?php
		        	}
		        	?>
		        	</select>
		        	<br><br>
		        	<label>Tên loại tin:</label>
		        	<input type="text" name="ten" value="<?=$loaitin->Ten?>" placeholder="Nhập tên thể loại" class="form-control">
		        	<br><br>
		        	<button type="submit" class="btn btn-success" name="sua">Lưu</button>
		        </form>
        	</div>
        	<div class="col-md-2"></div>
        </div>
    </div>
</section>