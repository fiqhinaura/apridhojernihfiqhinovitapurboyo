<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

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
      <form
        class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
      >
        <div class="input-group">
          <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
          />
          <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
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
        
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Data Alat Medis</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                  Export
                </button>
              </div>
              <button
                type="button"
                class="btn btn-sm btn-outline-secondary dropdown-toggle"
              >
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
              </button>
            </div>
          </div>

          <br/>
        
	<a href="alatmedis.php" class="btn btn-danger">KEMBALI</a>
	<br/>
	<br/>
	<!-- FORM TAMBAH ALAT MEDIS -->
  <h3>TAMBAH DATA ALAT MEDIS</h3>
      <form method="post" action="tambah_aksi1.php">
        <form method="post" action="update1.php">

          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
              <input type="text" name="kode_alat" class="form-control" id="inputnamaomat" placeholder="">
            </div>
            <Br></Br>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Alat Medis</label>
              <div class="col-sm-10">


                <input type="text" name="nama_alat" class="form-control" id="inputnamaomat" placeholder="">
              </div>
              <br>


              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Fungsi</label>
                <div class="col-sm-10">
                  <br>


                  <input type="text" name="fungsialat" class="form-control" id="inputnamaomat" placeholder="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">


                  <input type="text" name="stockalat" class="form-control" id="inputnamaomat" placeholder="">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
	</div>
        </main>
      </div>
    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
      integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG"
      crossorigin="anonymous"
    ></script>
    <script src="dashboard.js"></script>
</body>
</html>