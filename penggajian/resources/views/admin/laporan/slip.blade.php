<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <title>Data Laporan</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light"></nav>

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
        <div class="container-fluid text-center">
          <h1 class="m-0">Data Laporan</h1>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid d-flex justify-content-center">
          <div class="card" style="width: 600px;">
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label>Nama Karyawan</label>
                  <select class="form-control">
                    <option>-- Pilih Karyawan --</option>
                    <option>Samantha</option>
                    <option>John Doe</option>
                    <!-- Tambah data karyawan lainnya -->
                  </select>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Bulan</label>
                      <select class="form-control">
                        <option>-- Pilih Bulan --</option>
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Tahun</label>
                      <select class="form-control">
                        <option>-- Pilih Tahun --</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-info"><i class="fas fa-print"></i> Cetak</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</body>

</html>