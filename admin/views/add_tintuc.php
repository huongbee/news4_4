
<?php

if(isset($_POST['them'])){
	
	
	$c = new AdminController;
	$c->postAddNews();
}
?>

<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Thêm tin tức mới</b></div>
        <div class="panel-body"> 
        	<div class="col-md-12">
        		<form method="POST" enctype="multipart/form-data">
		        	
		        	<div class="col-md-8">
		        		<label>Tiêu đề:</label>
		        		<input type="text" name="ten"  placeholder="Nhập tiêu đề " class="form-control">
		        	</div>
		        	<div class="col-md-4">
		        		<label>Chọn loại tin:</label>
		        		<select name="id_loai" class="form-control">
			        	<?php
			        	foreach($data as $loaitin){
			        	?>
			        		<option value="<?=$loaitin->id?>"><?=$loaitin->Ten?></option>
			        	<?php
			        	}
			        	?>
			        	</select>
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label>Tóm tắt:</label>
		        		<textarea name="tomtat" rows="5" class="form-control"></textarea>
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label>Nội dung đầy đủ:</label>
		        		<textarea name="noidung" rows="5" class="form-control" id="summary"></textarea>
		        		<script>
		        			CKEDITOR.replace('summary')
		        		</script>
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label>Hình:</label>
		        		<input type="file" name="hinh" >
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label><input type="checkbox" name="noibat" >Nổi bật</label>
		        	</div>
		        	<div class="col-md-12">
		        		<button type="submit" class="btn btn-success" name="them">Lưu</button>
		        	</div>
		        </form>
        	</div>
        	
        </div>
    </div>
</section>