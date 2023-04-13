<?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'chatbot_db';

$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");

if (isset($_POST["submit"])) {
    //lấy thông tin từ các form bằng phương thức POST
    $name = $_POST["txtFullname"];
    $phone = $_POST["txtPhone"];
    $address = $_POST["txtAddress"];
    $Sex = $_POST["txtSex"];
    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
    if ($name == "" || $phone == "" || $address == "" || $Sex == "" || $username == "" || $password == "") {
        echo "bạn vui lòng nhập đầy đủ thông tin";
    }else{
        //thực hiện việc lưu trữ dữ liệu vào db
        $sql = "INSERT INTO student(
            name,
            phone,
            address,
            Sex,
            username,
            password
        ) VALUES (
            '$name',
            '$phone',
            '$address',
            '$Sex',
            '$username',
            '$password'
        )";
        // thực thi câu $sql với biến conn lấy từ file connection.php
        mysqli_query($conn,$sql);
        echo "chúc mừng bạn đã đăng ký thành công";
        require_once('login_st.php');
            }
        }
?>