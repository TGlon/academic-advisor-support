<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>
  <body class="hold-transition layout-top-nav" >
    <div class="wrapper">
    <?php require_once('inc/navigation.php') ?>       
     
     <div>
        <h1>Academic Advisor Support</h1>
        <p>CTU Academic Advisor Support là một trang web hỗ trợ CVHT trong việc truyền đạt, cập nhật thông tin đến 
          học sinh, sinh viên một cách dễ dàng và nhanh chóng. CVHT có thể kết nối và trao đổi với học sinh, sinh viên qua các chuyên mục như: học vụ, cập nhật thông báo,... </p>
     </div>   
      <div>
        <h3>Mô hình hệ thống</h3>
        <p>Xây dựng hệ thống hỗ trợ hỗ trợ CVHT cho phép người dùng nhập câu hỏi, file 
          dạng văn bản (text). Hệ thống được xây dựng trên nền tảng là một website sử dụng được trên máy 
          tính, tablet và smartphone.</p>
        </div> 
        <div style="margin-bottom:100px">
          <h3>Tính năng hệ thống</h3>
          <a style="margin-left:250px;" href="admin/login.php" class="nav-link nav-home" id="tn">
            <i class="nav-icon fas fa-bars"></i>
            Quản lý dữ liệu
          </a>
        <a style="margin-left:250px" href="hoidap.php" class="nav-link nav-home" id="tn">
          <i class="nav-icon fas fa-users"></i>
          Hỏi Đáp
        </a>
        <a style="margin-left:250px" href="contact.php" class="nav-link nav-home" id="tn">
          <i class="nav-icon fas fa-envelope"></i>
          Liên Hệ
        </a>
        <a style="margin-left:250px" href="baiviet.php" class="nav-link nav-home" id="tn">
          <i class="nav-icon fas fa-layer-group"></i>
          Bài Viết
        </a>
      </div>
    </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
  <style>
    #tn:hover{
      border:1px dashed black;width:270px
    }
      h1{
        margin-left: 260px;
        font-weight: bold;
        color: #000099;
      }
      p{
        /* margin-top:50px; */
        margin-left: 260px;
      }
      h3{
        margin-left: 260px;
        font-weight: bold;
        color: #000099;
      }
  </style>
</html>
