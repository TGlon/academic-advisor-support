<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('config.php'); ?>
 <?php require_once('inc/header.php') ?>
  <body class="hold-transition layout-top-nav" >
    <div class="wrapper">
      <?php require_once('inc/navigation.php') ?>        
     <!-- <?php require_once('inc/topBarNav.php') ?> -->
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'portal';  ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 567.854px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
         
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
          <div class="container">
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  include '404.html';
              }else{
                if(is_dir($page))
                  include $page.'/hoidap.php';
                else
                  include $page.'.php';

              }
            ?>
          </div>
        </section>        
      </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
