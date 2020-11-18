<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="<?= base_url('') ?>/assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light ml-auto">ADAJI</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('') ?>/assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Darul</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
        <li class="nav-header">Administrator</li>
        <a href="<?= base_url('admin') ?>" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <!-- <i class="right fas fa-angle-left"></i> -->
          </p>
        </a>
        </li>

        <li class="nav-item menu-open">
        <li class="nav-header">Info</li>
        <a href="<?= base_url('toko') ?>" class="nav-link">
          <i class="nav-icon fas fa-store"></i>
          <p>
            Toko
          </p>
        </a>
        <a href="<?= base_url('barang') ?>" class="nav-link">
          <i class="nav-icon fa fa-shopping-basket"></i>
          <p>
            Barang
          </p>
        </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>