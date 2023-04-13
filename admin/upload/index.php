<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">List of upload file</h3>
		<div class="card-tools">
			<a href="?page=upload/manage" class="btn btn-flat btn-info"><span class="fas fa-plus"></span>  Create New</a>
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<table class="table table-bordered table-stripped">
				<colgroup>
					<col width="5%">
					<col width="30%">
					<col width="25%">
					<col width="25%">
                    <col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Description</th>
						<th>File</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
						$qry = $conn->query("SELECT id, title, mota, file FROM `post` order by title asc ");
						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td><?php echo $row['title'] ?></td>
							<td><span class="truncate"><?php echo $row['mota'] ?></span></td>
                            <td><?php echo $row['file']?></td>
							<td align="center">
								 <button type="button" class="btn btn-flat btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <!-- <span class="sr-only">Toggle Dropdown</span> -->
				                  </button>
				                  <div class="dropdown-menu" role="menu">
				                    <!-- <a class="dropdown-item" href="?page=responses/manage&id=<?php echo $row['id'] ?>"><span class="fa fa-edit text-primary"></span> Edit</a> -->
				                    <!-- <div class="dropdown-divider"></div> -->
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.delete_data').click(function(){
			_conf("Are you sure to delete this data?","delete_upload",[$(this).attr('data-id')])
		})
		$('.table').dataTable();
	})
	function delete_upload($id){
		start_loader();
		$.ajax({
			url:_base_url_+"classes/Master.php?f=delete_upload",
			method:"POST",
			data:{id: $id},
			error:err=>{
				console.log(err)
				alert_toast("An error occured.",'error');
				end_loader();
			},
			success:function(resp){
				if(resp == 1){
					location.reload();
				}else{
					alert_toast("An error occured.",'error');
					end_loader();
				}
			}
		})
	}
</script>