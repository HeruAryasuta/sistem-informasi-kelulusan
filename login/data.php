<?php
session_start();
if(isset($_SESSION['logged']) && !empty($_SESSION['logged'])){
include "../config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kelompok</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <a class="navbar-brand" href="index2.php">SMA 01 Konoha</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-primary" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Admin dan Siswa
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admin.php">Admin</a>
                                    <a class="nav-link" href="siswa.php">Siswa</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Data Kelompok</div>
                            <a class="nav-link active" href="data.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Kelompok
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container">
      <div class="jumbotron mt-5">
        <div class="card p-3">
          <h2>Data Mahasiswa Kelompok 3</h2>
        </div>
        <div class="card">
          <table class="table table-bordered " cellspacing="0">
          <thead>
				<tr>
          <th>No</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Asal</th>
				</tr>
			</thead>
      <tbody>
      <?php
			$qsiswa = mysqli_query($db_conn,"SELECT * FROM biodata");
      $i = 1;
				while($data = mysqli_fetch_array($qsiswa)){
                    $nim = $data['nim'];
                    $nama = $data['nama'];
                    $kelas = $data['kelas'];
                    $asal =  $data['asal'];
			?>
        <tr>
                <td><?=$i++;?></td>
                <td><?=$nim;?></td>
                <td><?=$nama;?></td>
                <td><?=$kelas;?></td>
                <td><?=$asal;?></td>
        </tr>
          <?php
            };
            ?>
      </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
    <?php
}
?>
    </body>
</html>