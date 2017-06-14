<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<section class="content">
    <div class="panel panel-default">
        <div class="panel-heading"><b>Danh sách loại tin</b>
        </div>
        <div class="panel-body">
         	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			    <thead>
			      <tr>
			        <th>STT</th>
			        <th>Tên loại tin</th>
			        <th>Xem danh sách tin</th>
			        <th>#</th>
			      </tr>
			    </thead>
			    <tfoot>
		            <tr>
		                <th>STT</th>
				        <th>Tên loại tin</th>
				        <th>Xem danh sách tin</th>
				        <th>#</th>
		            </tr>
		        </tfoot>
			    <tbody>
			    <?php
			    $stt = 1;
			    foreach($data as $loaitin){

			    
			    ?>
			      <tr>
			        <td><?=$stt?></td>
			        <td><?=$loaitin->Ten?></td>
			        <td><a href="danh_sach_tin.php?id=<?=$loaitin->id?>"><button class="btn btn-info">Xem</button></a></td>
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
