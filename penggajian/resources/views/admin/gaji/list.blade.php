<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Data Gaji</title>
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
            <a href="/admin/index." class="nav-link active">
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
          <h1 class="m-0">Data Gaji</h1>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-md-3">
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
                <div class="col-md-3">
                  <select class="form-control">
                    <option>-- Pilih Tahun --</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <button class="btn btn-primary">Filter</button>
                  <button class="btn btn-secondary">Cetak</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="alert alert-success">
                Menampilkan data gaji karyawan bulan 02 tahun 2023
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Gaji Pokok</th>
                    <th>Transportasi</th>
                    <th>Uang Makan</th>
                    <th>Potongan</th>
                    <th>Total Gaji</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>123456789</td>
                    <td>Samantha</td>
                    <td>Perempuan</td>
                    <td>Frontend Developer</td>
                    <td>Rp. 5.000.000</td>
                    <td>Rp. 25.000</td>
                    <td>Rp. 15.000</td>
                    <td>Rp. 75.000</td>
                    <td>Rp. 4.965.000</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>987654321</td>
                    <td>John Doe</td>
                    <td>Laki-laki</td>
                    <td>Backend Developer</td>
                    <td>Rp. 8.000.000</td>
                    <td>Rp. 25.000</td>
                    <td>Rp. 30.000</td>
                    <td>Rp. 60.000</td>
                    <td>Rp. 7.995.000</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</body>

</html>