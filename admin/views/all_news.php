<?php

$tintuc = $data['tintuc'];
$loaitin = $data['loaitin'];
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading" style="height: 80px">
        	<div class="col-md-4"><b>Danh sách tin tức</b></div>
        	<div class="col-md-4">
	        	<label>Loại tin: </label>
	        	<select id="loaitin" class="form-control">
	        	<?php
	        	foreach($loaitin as $loai):
	        	?>
	        		<option value="<?=$loai->id?>"><?=$loai->Ten?></option>
	        	<?php
	        	endforeach 
	        	?>
	        	</select>
        	</div>
        	<div class="col-md-4"></div>
        </div>
        <div class="panel-body">
        	
         	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			    <thead>
			      <tr>
			        <th>STT</th>
			        <th>Tiêu đề</th>
			        <th style="width: 10%">Tóm tắt</th>
			        <th>Nội dung</th>
			        <th>Hình</th>
			        <th>Số lượt xem</th>
			        <th>Nổi bật</th>
			        <th style="width: 10%">#</th>
			      </tr>
			    </thead>
			    
			    <tbody>
			    <?php
			    $stt = 1;
			    foreach($tintuc as $tin){

			    
			    ?>
			   
			      <tr>
			        <td><?=$stt?></td>
			        <td><?=$tin->TieuDe?></td>
			        <td><?=$tin->TomTat?></td>
			        <td><?=$tin->NoiDung?></td>
			        <td><img src="../public/images/tintuc/<?=$tin->Hinh?>" width="100"></td>
			        <td><?=$tin->SoLuotXem?></td>
			        <td><input type="checkbox"<?=$tin->NoiBat==1?"checked":''?>></td>
			        <td><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size: 18px"></span> | <span class="glyphicon glyphicon-trash" aria-hidden="true" style="font-size: 18px"></span></td>
			      </tr>
			    <?php
			    $stt+=1; //stt=stt+1
			    }
			    ?>
			    </tbody>
			  </table>
        </div>
    </div>
</section>
<script src="public/js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$('#loaitin').change(function(){
			var id_loaitin = $(this).val()
			//alert(id_loaitin)
			$.ajax({
				type:"GET",
				data:{
					id_loaitin:id_loaitin //tên biến gửi đi:value
				},
				url:"",
				success:function(data){
					console.log(data)
				},
				error:function(){
					console.log('err')
				}
			})
		})
	})
</script>
