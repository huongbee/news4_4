<?php

if(isset($_POST['them'])){
	$c = new AdminController();
	$c->postAddLoaitin();
}
?>


<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Thêm loại tin</b></div>
        <div class="panel-body"> 
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<form method="POST">
		        	<label>Chọn thể loại:</label>
		        	<select name="id_theloai" class="form-control">
		        	<?php
		        	foreach($data as $theloai){
		   
		        	?>
		        		<option value="<?=$theloai->id?>"><?=$theloai->Ten?></option>
		        	<?php
		        	}
		        	?>
		        	</select>
		        	<br><br>
		        	<label>Tên loại tin:</label>
		        	<input type="text" name="ten"  placeholder="Nhập tên thể loại" class="form-control">
		        	<br><br>
		        	<button type="submit" class="btn btn-success" name="them">Lưu</button>
		        </form>
        	</div>
        	<div class="col-md-2"></div>
        </div>
    </div>
</section>