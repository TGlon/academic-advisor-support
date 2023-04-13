<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>
  <body class="hold-transition layout-top-nav" >
    <div class="wrapper">
    <?php require_once('inc/navigation.php') ?>       
     
    <section class="contact" id="contact">
    <div class="row">
        <form action="" method="POST">
            <h3>Liên hệ chúng tôi</h3>
            <label for="">Họ Và Tên:</label>
            <input type="text" name="hoten" placeholder="" class="box">
            <label for="">Email:</label>
            <input type="email" name="email" placeholder="" class="box">
            <label for="">Chủ Đề:</label>
            <input type="tel" name="chude" placeholder="" class="box">
            <label for="">Nội Dung:</label>
            <textarea placeholder="" name="noidung" class="box" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" value="send message" class="btn">
        </form>

    </div>

    </section>    
    </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
    <script>
        <?php
            $conn = mysqli_connect("localhost","root","","chatbot_db");
            if(isset($_POST['submit'])){
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $chude = $_POST['chude'];
                $noidung = $_POST['noidung'];
                if($hoten == "" || $email == "" || $chude == "" || $noidung == ""){
                    echo "Vui lòng nhập đầy đủ nội dung";
                }else{
                    $sql = "insert into contact(hoten,email,chude,noidung) values('$hoten','$email','$chude','$noidung')";
                    mysqli_query($conn,$sql);
                }
            }
        ?>
    </script>
  </body>
  <style>
    section{
        margin-left:600px;
        margin-right: 600px;
        height:640px;
        
    }
    label{
        margin-right: 50px;
    }
    .btn{
        margin-top:10px;
        color: white;
        background: blue;
    }
    h3{
        font-weight: bold;
        color: #000099;
        font-size: 30px
    }
  </style>
</html>
