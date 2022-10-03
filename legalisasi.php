<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legalinaja | Legalisasi UMKM</title>
  <link href="./asset/img/logo6.svg" rel="shortcut icon">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body style="background-color:#ffdac1;">
<!-- Nabvbar -->
  <nav class="navbar shadow-sm navbar-expand-lg bg-light">
    <div class="container container-fluid">
      <a class="mt-2" href="index.php">
        <img src="./asset/img/logo5.svg" alt="logo" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-xl-flex justify-content-lg-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 me-lg-5 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="legalisasi.php">Legalisasi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pengembangan UMKM
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="event.php">Event</a></li>
              <li><a class="dropdown-item" href="pelatihan.php">Pelatihan</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="artikel.php">Artikel</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>
          <li class="nav-item ">
        <?php
          if (empty($_SESSION['username']) ) {?>
          <a href="login.php"> <button id="button" type="button"  class="btn text-light" style="--bs-btn-border-radius: 30rem; background-color: #464F6A">Masuk</button></a>

          <?php }else{ ?>
            <a href="logout.php"> <button id="button" type="button"  class="btn text-light" style="--bs-btn-border-radius: 30rem; background-color: #464F6A">Keluar</button></a>
          <?php } ?>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
          <button class="btn rounded-circle d-flex justify-content-center align-items-center text-light" style="background-color: #464F6A;"
            type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
              class="bi bi-search" viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></button>
        </form>
      </div>
    </div>
  </nav>
<div class="text-center mt-5 mb-5">
    <img src="./asset/img/legalisasi_umkm.svg" alt="legalisai" width="500px">
</div>
<section id="legalisasi">
<div class="container" >
    <div class="row">
        <div class="col" >
            <img src="./asset/img/tata-cara-daftar.svg" alt="tata_cara_daftar" width="600px">
        </div>
        <div class="col">
        
        </div>
    </div>
    <div class="row">
        <div class="col">
            
        </div>
        <div class="col">
            <img src="./asset/img/tata-cara-daftar-2.svg" alt="tatacaradaftar" width="600px">
        </div>
    </div>
    <div class="d-grid mb-5 gap-2 col-6 mx-auto text-center ">
    <a href="https://ui-login.oss.go.id/login?action=register&type=umk"><button class="btn btn-light rounded-pill text-light" type="button" style="background-color: #fbbb90;" >Daftar Legalisasi UMKM</button></a>
    </div>
</div>
</section>
<?php include "footer.php"; ?>
