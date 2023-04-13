<style>
	.q-item {
	    border-radius: 50px;
	}
</style>
<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'chatbot_db');

?>
<div class="card card-outline card-info">
	<div class="card-header">
		<h3 class="card-title">Create New File</h3>
	</div>
	<div class="card-body">
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="" class="control-label">Title</label>
                <input type="text" name="title">                 
			</div>
	
			<div class="form-group">
				<label for="" class="control-label">Description</label>
                <input type="text"  name="mota">
			</div>
            
			<div class="form-group">
				<label for="" class="control-label">File</label>
                <input type="file" id="file" name="file">
			</div>    
            <div class="card-footer">
                <input type="submit"  name="submit" class="btn btn-primary" value="Save" />
                <a class="btn btn-flat btn-default" href="?page=upload">Cancel</a>
            </div>
		</form>
	</div>
</div>
<?php
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $mota = $_POST['mota'];
        $file = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        if ($title == "" || $mota == "" || $file == "") {
            echo "bạn vui lòng nhập đầy đủ thông tin";
        }else{
            //thực hiện việc lưu trữ dữ liệu vào db
            $sql = "INSERT INTO post(
                title,
                mota,
                file
            ) VALUES (
                '$title',
                '$mota',
                '$file'
            )";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            mysqli_query($conn,$sql);
            move_uploaded_file($file_tmp,'../uploads/'.$file);
            echo "upload thành công";
        }
    }
?>
