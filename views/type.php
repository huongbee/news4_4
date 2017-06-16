<?php

$tintheoloai = $data['tintheoloai'];
$loaitin = $data['loaitin'];
$list = $data['list'];
//print_r($tintheoloai);
?>
<div class="banner-bottom">
		<div class="container">
			<!-- news-and-events -->
				<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
							<h3><?=$loaitin->TenTheloai.' > '.$loaitin->Ten?></h3>
							<ul>
							<?php
							foreach($tintheoloai as $tin){
							?>

								<li>
									<div class="news-grid-left1">
										<img src="public/images/tintuc/<?=$tin->Hinh?>" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="<?=$tin->ten_khong_dau?>/<?=$tin->id?>-<?=$tin->TieuDeKhongDau?>.html"><?=$tin->TieuDe?></a></h4>
										<h5><i><?=date('d/m/Y',strtotime($tin->created_at))?></i></h5>
										<p><?=$tin->TomTat?></p>
									</div>
									<div class="clearfix"> </div>
								</li>

							<?php
							}
							?>
							</ul>
							<?=$list?>
						</div>
						<div class="col-md-4 upcoming-events-right">
							<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list resp-tab-item grid1 resp-tab-active">
									<span>Tin cùng loại</span>
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">

									
										<div class="facts">
											<div class="tab_list">
												<img src="public/images/tintuc/" alt=" " class="img-responsive" />
											</div>
											<div class="tab_list1">
												<ul>
													<li>12/12/2017</li>
												</ul>
												<p><a href="#">Tiêu đề
											</div>
											<div class="clearfix"> </div>
										</div>
									
									</div>
								</div>
								<script src="public/js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //news-and-events -->
		</div>
	</div>