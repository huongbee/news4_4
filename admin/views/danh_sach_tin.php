<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Danh sách tin tức</b>
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
			    foreach($data as $tin){

			    
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
