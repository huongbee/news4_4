<?php
include('inc/functions.php');

$tintuc = $data['tintuc'];
$thang = date('m',strtotime($tintuc->created_at)); //01
$thang = getMonth($thang);
$comment = $data['comment'];
?>
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-grid">
				<div class="col-md-8 blog-left">
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4><?=$thang?> <span><?=date('d',strtotime($tintuc->created_at))?></span></h4>
							
						</div>
						<div class="blog-leftr">
							<img src="public/images/tintuc/<?=$tintuc->Hinh?>" alt=" " class="img-responsive" />
							<p><?=$tintuc->NoiDung?></p>
							
						</div>
						<div class="clearfix"> </div>
						
						<div class="response" id="append-data">
							<h4>Bình luận</h4>
							<?php

							foreach($comment as $cm){

							
							?>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="<?=$cm->avatar?>" alt="" style="width: 80px"/>
									</a>
									<h5><a href="#"><?=$cm->name?></a></h5>
								</div>
								<div class="media-body response-text-right">
									<p><?=$cm->NoiDung?></p>
									<ul>
										<li><?=date('d-m-Y h:i:s',strtotime($cm->created_at))?></li>	
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
							<?php
							}
							?>

						</div>	
						<div class="coment-form">
							<h4>Gửi bình luận</h4>
							<form>
								<input type="hidden" value="<?=isset($_SESSION['id_user'])?$_SESSION['id_user']:''?>" id="idUser">
								<input type="hidden" value="<?=$tintuc->id?>" id="idTin">
								<textarea id="txtComment" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
								<input type="button" id="btnComment" value="Gửi bình luận" >
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4 upcoming-events-right">
					<h3>Loại tin</h3>
					
					<div class="banner-bottom-video-grid-left">
						
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<?php
						foreach($menu as $mn){

						?>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title">
								<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$mn->id?>" aria-expanded="true" aria-controls="collapse<?=$mn->id?>">
								  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i><?=$mn->Ten?>
								</a>
							  </h4>
							</div>
							<div id="collapse<?=$mn->id?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
							  <div class="panel-body">
								<ul style="padding-left: 20px">
								<?php
								$loaitin = $mn->LoaiTin;
								$arrLoaitin = explode(',', $loaitin);
								foreach($arrLoaitin as $loai){
									//print_r($loai)
									list($idloaitin,$tenloai,$aliasLoai) = explode(':', $loai)
								?>
									<li><a href="loaitin.php?id=<?=$idloaitin?>&alias=<?=$aliasLoai?>"><?=$tenloai?></a></li>
								<?php
								}
								?>
								</ul>
							  </div>
							</div>
						  </div>
						  
						  	<?php
							}
							?>
						</div>
						
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single -->
<script>
$(document).ready(function(){
	$('#btnComment').click(function(){
		var noidung = $('#txtComment').val()
		var idTin = $('#idTin').val()
		var idUser = $('#idUser').val()
		$.ajax({
			type:"POST",
			url:"http://localhost/news4_4/addcomment.php",
			data:{
				id_user:idUser, //tên biến truyền đi:giá trị của biến
				id_tin:idTin,
				noidung:noidung
			},
			success:function(){
				$('#append-data').append(noidung)
				$('#txtComment').val('')
			},
			error:function(){
				console.log('err')
			}

		})
		
	})
})

</script>