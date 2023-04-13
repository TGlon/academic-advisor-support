<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>
  <body class="hold-transition layout-top-nav" style="overflow-x:hidden;" >
    <div class="wrapper">
    <?php require_once('inc/navigation.php') ?>       
    <div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title" style="margin-left:250px;font-weight:bold;">Bài Viết/Thông Báo Mới</h3>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<table class="table table-bordered table-stripped" style="margin-left:222px;">
				<colgroup>
					<col width="5%">
					<col width="18%">
					<col width="25%">
					<col width="55%">
				</colgroup>
				<thead>
					<tr>
						<th>STT</th>
						<th>Title</th>
						<th>Description</th>
						<th>File</th>
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
                            <td><a href="../chatbot/uploads/<?php echo $row['file']?>"><?php echo $row['file']?></a></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
      
		</div>
	</div>
</div>
    </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
  <style>
    h3{
        font-weight: bold;
        color: #000099;
        font-size: 30px
    }
  </style>
</html>
