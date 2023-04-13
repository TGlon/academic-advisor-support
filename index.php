<?php
  if(!isset($_POST['dangnhap'])){
    header('Location:login_st.php');
  }
?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>
  <body class="hold-transition layout-top-nav" >
    <div class="wrapper">
     <?php require_once('inc/topBarNav.php') ?>
    </div>
    <div style="float:left;margin-top:100px;width:500px">
      <h1 style="margin-left:150px;color:#90CAF9;font-weight:bold;font-size:100px">CTU</h1>
      <h2 style="color:#3399FF;margin-left:150px;font-size:29px">Academic Advisor Support</h2>
      <p style="margin-left:150px;color:#bfccbf">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT.AT,OBCAECATI?</p>
    </div>
    <img style="width:500px;float:right;margin-right:40px" src="uploads\Thesis-pana.png" alt="">
    <button style="margin-top:10px;float:left;margin-right:50px;margin-left:150px" class="btn btn-primary" type="button" onclick="dieu_huong()">Get Started</button>
      <!-- /.content-wrapper -->
      <!--  -->
      
  </body>
  <script>
    function dieu_huong(){
            location.assign("about.php");
        }
  </script>
</html>
