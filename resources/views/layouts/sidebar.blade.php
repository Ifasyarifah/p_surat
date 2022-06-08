 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('') }}img/ki_logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Komisi Informasi</a>
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
          <li class="nav-item menu-open">
            <a href="{{ route('home') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="{{ route('surat_masuk.index') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Surat Masuk
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('surat_keluar.index') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Surat Keluar
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('disposisi.index') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Disposisi Surat
              </p>
            </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('nomor_surat.index') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                 Nomor Surat
                </p>
              </a>
              </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
