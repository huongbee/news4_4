
<div class="media response-info">
	<div class="media-left response-text-left">
		<a href="#">
			<img class="media-object" src="<?=$data->avatar?>" alt="" style="width: 80px"/>
		</a>
		<h5><a href="#"><?=$data->name?></a></h5>
	</div>
	<div class="media-body response-text-right">
		<p><?=$data->NoiDung?></p>
		<ul>
			<li><?=date('d-m-Y h:i:s',strtotime($data->created_at))?></li>	
		</ul>		
	</div>
	<div class="clearfix"> </div>
</div>