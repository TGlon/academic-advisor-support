<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link text-sm">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;width: 2.5rem;height: 2.5rem;max-height: unset">
        <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" class="img-circle elevation-2" alt="User Image" style="height: 2rem;object-fit: cover">
                  </div>
                  <div class="info">
                    <a href="<?php echo base_url ?>admin/?page=user" class="d-block"><?php echo ucwords($_settings->userdata('firstname').' '.$_settings->userdata('lastname')) ?></a>
                  </div>
                </div> -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <li class="nav-header"></li>
                   <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="index.php" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Trang Chủ
                        </p>
                      </a>
                    </li> 
                    
                    <li class="nav-item dropdown">
                      <a href="about.php" class="nav-link nav-establishment">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                          Giới Thiệu
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="hoidap.php" class="nav-link nav-people">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                          Hỏi Đáp
                        </p>
                      </a>
                    </li>
                    <!-- <li class="nav-header"></li> -->
                    <li class="nav-item dropdown">
                      <a href="contact.php" class="nav-link nav-state">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                          Liên Hệ
                        </p>
                      </a>
                    </li> 
              
                    <li class="nav-item dropdown">
                      <a href="baiviet.php" class="nav-link nav-group">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                          Bài Viết - Thông Báo
                        </p>
                      </a>
                    </li>

                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url.'/classes/Login.php?f=logout_st' ?>" class="nav-link nav-city">
                        <i class="nav-icon fas fa-unlock"></i>
                        <p>
                          Đăng Xuất
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>