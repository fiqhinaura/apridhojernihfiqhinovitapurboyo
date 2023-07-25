<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css"
      rel="stylesheet"
    />
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="index.html">APOTEK K24</a>
      <!-- Sidebar Toggle-->
      <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Navbar Search-->
      
      <!-- Navbar-->
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      </ul>
    </nav>
    <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              
              <div class="sb-sidenav-menu-heading">Tabel</div>
              <a class="nav-link" href="obat.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-chart-area"></i>
                </div>
                Obat
              </a>
              <a class="nav-link" href="alatmedis.php">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Alat Medis
              </a>
            </div>
          </div>
          <div class="sb-sidenav-footer">
            
            <a class="nav-link" href="login.php"><button type="button" class="btn btn-secondary">Logout</button</a>
            
          </div>
        </nav>
      </div>
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../AKADEMIK/kemenkes.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Berita Terkini</h5>
 
    <a href="https://sehatnegeriku.kemkes.go.id/" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../AKADEMIK/drugbank.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Informasi Obat</h5>
 
    <a href="https://go.drugbank.com/" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../AKADEMIK/iai.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Ikatan Apoteker Indonesia</h5>
 
    <a href="https://iai.id/" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
              
            
            <!-- tabel obat -->
            <div class="card mb-4">
              <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Obat
              </div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <tbody>
                    <table class="table table-striped table-sm">
                      
                            <tr>
                              <th scope="col">NO</th>
                              <th scope="col">Kode</th>
                              
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Fungsi</th>
                                <th scope="col">Stock</th>
                               
                            </tr>
                            <?php
                            include 'koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"select * from obat");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['kode_obat']; ?></td>
                                    <td><?php echo $d['nama_obat']; ?></td>
                                    <td><?php echo $d['jenis']; ?></td>
                                    <td><?php echo $d['fungsi']; ?></td>
                                    <td><?php echo $d['stock']; ?></td>
                                    
                                </tr>
                                <?php
                            }
                            ?>
                            </thead>
                  </tbody>
                </table>
              </div>
              
            </div>
            <br/>
            <!-- tabel Alat medis -->
            <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-table me-1"></i>
                  Tabel Alat Medis
                </div>
                <div class="card-body">
                  <table id="datatablesSimple">
                    <tbody>
	<table class="table table-striped table-sm" border="1">
		<tr>
			<th scope="col">NO</th>
			<th scope="col">Kode Alat</th>
			<th scope="col">Alat Medis</th>
			<th scope="col">Fungsi</th>
			<th scope="col">Stock</th>
		
		</tr>
		<?php 
		include 'koneksi1.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from alatmedis");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_alat']; ?></td>
				<td><?php echo $d['nama_alat']; ?></td>
				<td><?php echo $d['fungsialat']; ?></td>
				<td><?php echo $d['stockalat']; ?></td>
				
			</tr>
			<?php 
		}
		?>
	</table>
</thead>
</tbody>
</table>
</div>

</div>
          </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Your Website 2023</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>
