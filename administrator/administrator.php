<?php
session_start();
include_once('../function/koneksi.php');
$pelanggan = 'SELECT * FROM pelanggan';
$result_pelanggan = $conn->query($pelanggan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - Rumata Coffee</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="../css/administrator.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="administrator.php">Rumata Coffee</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <?php
          if (isset($_SESSION['is_logged_in'])) {
            echo ('<li><a href="../function/logout.php" class="dropdown-item">Logout</a></li>');
          } else {
            echo ('<li><a href="../login.php" class="dropdown-item">Login</a></li>');
          }
          ?>
        </ul>
      </li>
    </ul>
  </nav>

  <div id="layoutSidenav">
    <!-- SideNav Start -->
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="administrator.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              Dashboard
            </a>
            <a class="nav-link" href="deskripsi.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-file-alt"></i>
              </div>
              Deskripsi
            </a>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduk" aria-expanded="false" aria-controls="collapseProduk">
              <div class="sb-nav-link-icon">
                <i class="fas fa-columns"></i>
              </div>
              Tabel Produk
              <div class="sb-sidenav-collapse-arrow">
                <i class="fas fa-angle-down"></i>
              </div>
            </a>
            <div class="collapse" id="collapseProduk" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="produk_kopi_kekinian.php">Kopi Kekinian</a>
                <a class="nav-link" href="produk_bubuk_kopi.php">Bubuk Kopi</a>
              </nav>
            </div>
            <a class="nav-link" href="masukan.php">
              <div class="sb-nav-link-icon">
                <i class="fas fa-envelope-open-text"></i>
              </div>
              Masukan
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Log in sebagai:</div>
          <?php
          if (isset($_SESSION['is_logged_in'])) {
            echo $_SESSION['nama_adm'];
          } else {
            echo "Pengguna";
          }
          ?>
        </div>
      </nav>
    </div>
    <!-- SideNav End -->
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Dashboard</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body">Halaman Beranda</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="../index.php">Lihat Detail</a>
                  <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-warning text-white mb-4">
                <div class="card-body">Halaman Produk</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="../menu.php">Lihat Detail</a>
                  <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-success text-white mb-4">
                <div class="card-body">Halaman Tentang Kami</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="../about.php">Lihat Detail</a>
                  <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-danger text-white mb-4">
                <div class="card-body">Halaman Masukan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                  <a class="small text-white stretched-link" href="../feedback.php">Lihat Detail</a>
                  <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-4">
            <div class="card-header">
              <i class="fas fa-table me-1"></i>
              Data Akun Pelanggan
            </div>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  while ($row = $result_pelanggan->fetch_assoc()) {
                    echo ('<tr>');
                    echo ('<td>' . $row['id_pelanggan'] . '</td>');
                    echo ('<td>' . $row['nama_pelanggan'] . '</td>');
                    echo ('<td>' . $row['alamat_pelanggan'] . '</td>');
                    echo ('<td>' . $row['no_telp_pelanggan'] . '</td>');
                    echo ('<td>' . $row['email_pelanggan'] . '</td>');
                    echo ('<td>' . $row['username_pelanggan'] . '</td>');
                    echo ('<td>' . $row['password_pelanggan'] . '</td>');
                    echo ('</tr>');
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../js/administrator.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
</body>

</html>