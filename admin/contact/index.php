<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">List of contact</h3>
		<!-- <div class="card-tools">
			<a href="?page=upload/manage" class="btn btn-flat btn-info"><span class="fas fa-plus"></span>  Create New</a>
		</div> -->
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<table class="table table-bordered table-stripped">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
                    <col width="30%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Họ Tên</th>
						<th>Email</th>
						<th>Chủ Đề</th>
                        <th>Nội Dung</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
						$qry = $conn->query("SELECT id, hoten, email,chude,noidung FROM `contact` order by id asc ");
						while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center"><?php echo $i++; ?></td>
							<td><?php echo $row['hoten'] ?></td>
							<td><span class="truncate"><?php echo $row['email'] ?></span></td>
                            <td><?php echo $row['chude']?></td>
							<td><?php echo $row['noidung']?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
