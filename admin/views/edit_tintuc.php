<?php
$loaitin = $data['loaitin'];
$tin = $data['tintuc'];
if(isset($_POST['sua'])){
	$c = new AdminController;
	$c->postEditNews();
}
?>
<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Sửa tin tức <?=$tin->TieuDe?></b></div>
        <div class="panel-body"> 
        	<div class="col-md-12">
        		<form method="POST" enctype="multipart/form-data">
		        	
		        	<div class="col-md-8">
		        		<label>Tiêu đề:</label>
		        		<input type="text" name="ten"  placeholder="Nhập tiêu đề " class="form-control" value="<?=$tin->TieuDe?>">
		        	</div>
		        	<div class="col-md-4">
		        		<label>Chọn loại tin:</label>
		        		<select name="id_loai" class="form-control">
			        	<?php
			        	foreach($loaitin as $lt){
			        	?>
			        		<option value="<?=$lt->id?>" <?=$tin->idLoaiTin==$lt->id?"selected":''?>><?=$lt->Ten?></option>
			        	<?php
			        	}
			        	?>
			        	</select>
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label>Tóm tắt:</label>
		        		<textarea name="tomtat" rows="5" class="form-control"><?=$tin->TomTat?></textarea>
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label>Nội dung đầy đủ:</label>
		        		<textarea name="noidung" rows="5" class="form-control" id="summary"><?=$tin->NoiDung?></textarea>
		        		<script>
		        			CKEDITOR.replace('summary')
		        		</script>
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label>Hình:</label>
		        		<input type="file" name="hinh" >
		        	</div>
		        	<div class="col-md-12" style="margin-top: 20px">
		        		<label><input type="checkbox" name="noibat" <?=$tin->NoiBat==1?"checked":''?> >Nổi bật</label>
		        	</div>
		        	<div class="col-md-12">
		        		<button type="submit" class="btn btn-success" name="sua">Lưu</button>
		        	</div>
		        </form>
        	</div>
        	
        </div>
    </div>
</section>