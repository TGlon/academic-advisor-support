<?php
	if(isset($_POST['dangnhap'])){
		$u = $_POST['username'];
		$p = $_POST['password'];
		$db = mysqli_connect("localhost","root","","chatbot_db");
		$sql = "select * from  student where username='$u' and password='$p'";
		$rs = mysqli_query($db,$sql);
		if(mysqli_num_rows($rs)>0){
			// echo '<script>alert("Đăng nhập thành công!")</script>';
			require_once 'index.php';
		}else {
			echo '<script>alert("Đăng nhập thất bại!")</script>';
			require_once 'login_st.php';
		}
	}
?>
<style>
	h3{
		font-size:20px;
		color:green;
		font-weight:bold;
	}
</style>

