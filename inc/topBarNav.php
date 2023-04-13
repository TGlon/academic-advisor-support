
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
          <span class="brand-text font-weight-light"><?php echo (!isMobileDevice()) ? $_settings->info('name'):$_settings->info('short_name'); ?></span>
        </a>
      
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto" id="navbar1">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="about.php">Giới Thiệu</a></li>
            <li><a href="hoidap.php">Hỏi Đáp</a></li>
            <li><a href="contact.php">Liên Hệ</a></li>
            <li><a href="baiviet.php">Bài Viết - Thông Báo</a></li>
            <li><a href="<?php echo base_url.'/classes/Login.php?f=logout_st' ?>">Đăng Xuất: <?php echo $u ?></a></li>
        </ul>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          
        </ul>
      </div>
      </nav>
      <!-- /.navbar -->
<style>
  #navbar1 li{
    /* float:right; */
    padding-right: 30px
  }

</style>