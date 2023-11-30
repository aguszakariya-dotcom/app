

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= BASEURL; ?>/images/logo.png" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">SOVANA BALI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= BASEURL; ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= BASEURL; ?>/" class="d-block"><?= $data['nama']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link <?= (strpos($data['title'], 'Dasboard') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASEURL; ?>" class="nav-link <?= (strpos($data['subTitle'], 'Home') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link <?= (strpos($data['title'], 'Forms') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= BASEURL; ?>/form/salary_karyawan" class="nav-link <?= (strpos($data['subTitle'], 'Salary Karyawan') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-fuchsia"></i>
                  <p>Salary Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= BASEURL; ?>/form/sovana" class="nav-link <?= (strpos($data['subTitle'], 'Breakdown Salary') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Breakdown Salary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?= (strpos($data['title'], 'Invoice') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Invoice
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="<?= BASEURL; ?>/invoice/karyawan" class="nav-link <?= (strpos($data['subTitle'], 'Salary Karyawan') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Salary Karyawan</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= BASEURL; ?>/invoice/sovana" class="nav-link <?= (strpos($data['subTitle'], 'Sovana') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Sovana</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?= BASEURL; ?>/invoice/other" class="nav-link <?= (strpos($data['subTitle'], 'Other') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Other</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?= (strpos($data['title'], 'Tables') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/sample" class="nav-link <?= (strpos($data['subTitle'], 'Sample') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-green"></i>
                  <p>Sample </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/produksi" class="nav-link <?= (strpos($data['subTitle'], 'Produksi') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Produksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-header">EXAMPLES</li> -->
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?= BASEURL; ?>/karyawan" class="nav-link <?= (strpos($data['title'], 'Karyawan') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Karyawan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?= (strpos($data['title'], 'Akuntansi') !== false) ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Akuntansi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/akuntansi" class="nav-link <?= (strpos($data['subTitle'], 'Bagan Akun') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Bagan Akun</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/entri" class="nav-link <?= (strpos($data['subTitle'], 'Entri Jurnal') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Entri Jurnal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/mutasi" class="nav-link <?= (strpos($data['subTitle'], 'Mutasi Transaksi') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Mutasi Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/rincian" class="nav-link <?= (strpos($data['subTitle'], 'List Rincian Transaksi') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>List Rincian Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/laporan/laba" class="nav-link <?= (strpos($data['subTitle'], 'Laporan Laba-Rugi') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-primary"></i>
                  <p>Laporan Laba-Rugi</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/karyawan/daftar_gaji" class="nav-link <?= (strpos($data['subTitle'], 'List Gaji Karyawan') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon text-fuchsia"></i>
                  <p>List Gaji Karyawan</p>
                </a>
              </li>              
            </ul>
          </li>  
          <li class="nav-item">
          <a href="#" class="nav-link <?= (strpos($data['title'], 'Extras') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="<?= BASEURL; ?>/pages" class="nav-link <?= (strpos($subTitle, 'Animasi') !== false) ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Animasi</p>
              </a>
            </li>
              <li class="nav-item">
              <a href="<?= BASEURL; ?>/pages/fendi" class="nav-link <?= (strpos($subTitle, 'Tahapan Fendi') !== false) ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle text-success"></i>
                <p class="text">Fendi</p>
              </a>
              </li>
              <li class="nav-item">
              <a href="<?= BASEURL; ?>/pages/hafidz" class="nav-link <?= (strpos($subTitle, 'Tahapan Hafidz') !== false) ? 'active' : ''; ?>">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p class="text">Hafidz</p>
              </a>
              </li>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">EXTRAS</li>
          <li class="nav-item">
          <a href="<?= BASEURL; ?>/pages" class="nav-link <?= (strpos($subTitle, 'Animasi') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Animasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- /.content-header -->
    <div class="float-right mr-5 mt-3">

      <?php Flasher::flash(); ?>
    </div>
    <!-- Main content -->
    <section class="content py-2">
      <div class="container-fluid mt-5 pb-5 justify-content-center">