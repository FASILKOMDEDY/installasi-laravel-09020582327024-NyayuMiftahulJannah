<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tambah Penggajian</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Sistem Penggajian</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">admin</a>
        </div>
      </div>

      <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
        <li class="nav-item">
            <a href="/admin/index" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/jabatan/list" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Jabatan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/karyawan/list" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Karyawan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/absensi/list" class="nav-link">
                <i class="nav-icon fas fa-calendar-check"></i>
                <p>Absensi</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/gaji/list" class="nav-link">
                <i class="nav-icon fas fa-money-bill-wave"></i>
                <p>Data Gaji</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/laporan/slip" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Laporan</p>
            </a>
        </li>
    </ul>
</nav>

    </div>
  </aside>

  <!-- Content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Tambah Jabatan</h1>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <form action="#" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="gaji_pokok">Gaji Pokok</label>
                <input type="text" id="gaji_pokok" name="gaji_pokok" class="form-control">
              </div>
              <div class="form-group">
                <label for="transportasi">Transportasi</label>
                <input type="text" id="transportasi" name="transportasi" class="form-control">
              </div>
              <div class="form-group">
                <label for="uang_makan">Uang Makan</label>
                <input type="text" id="uang_makan" name="uang_makan" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</body>
</html>