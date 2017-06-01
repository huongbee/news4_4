<?php
include('inc/functions.php');

$tintuc = $data['tintuc'];
$thang = date('m',strtotime($tintuc->created_at)); //01
$thang = getMonth($thang);
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
						
						<div class="response">
							<h4>Responses</h4>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="public/images/icon1.png" alt=""/>
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>October 25, 2016</li>
										<li><a href="single.html">Reply</a></li>
									</ul>
									<div class="media response-info">
										<div class="media-left response-text-left">
											<a href="#">
												<img class="media-object" src="public/images/icon1.png" alt=""/>
											</a>
											<h5><a href="#">Admin</a></h5>
										</div>
										<div class="media-body response-text-right">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<ul>
												<li>October 25, 2016</li>
												<li><a href="single.html">Reply</a></li>
											</ul>		
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="public/images/icon1.png" alt=""/>
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>October 25, 2016</li>
										<li><a href="single.html">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
						<div class="coment-form">
							<h4>Leave your comment</h4>
							<form>
								<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
								<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
								<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
								<input type="submit" value="Submit Comment" >
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