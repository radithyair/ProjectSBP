<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motorasion || Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  </head>
  <body class="bg-dark">
    <!-- Nav Section Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light sticky-top">
      <div class="container">
        <a class="navbar-brand" href="SBP/index.php">Motorasion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="SBP/index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Sepeda Motor </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/SBP/Motorcycle/Motor Populer/mp.php">Motor Populer</a></li>
                <li><a class="dropdown-item" href="/SBP/Motorcycle/Motor Terbaru/mt.php">Motor Terbaru</a></li>
                <li><a class="dropdown-item" href="/SBP/Motorcycle/Motor Yang Akan Datang/myad.php">Motor Yang Akan Datang</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="/SBP/Motorcycle/Merk Motor Populer/mmp.php">Merk Motor Populer</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/SBP/Compare/index.php">Bandingkan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/SBP/About/index.php">Tentang Kami</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Nav Section End -->

    <!-- First Layout Start -->
    <div class="container-fluid text-light" style="height: 100%">
      <!-- Carousel Images -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/2560x1440.png" class="d-block w-100" alt="..." style="height: 500px" />
            <div class="carousel-caption">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/2560x1440.png" class="d-block w-100" alt="..." style="height: 500px" />
            <div class="carousel-caption">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/2560x1440.png" class="d-block w-100" alt="..." style="height: 500px" />
            <div class="carousel-caption">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- End Of Carousel Images -->
      <div class="row text-center align-items-center mt-4">
        <div class="col-12">
          <h2 class="mt-4">Motorasion</h2>
          <p>Temukan Rekomendasi Sepeda Motor Disini</p>
        </div>
      </div>
      <div class="row text-dark mt-2">
        <div class="col-sm-3 g-4">
          <div class="card">
            <div class="card-body" style="height: 170px">
              <h5 class="card-title text-center">Motor Terbaru</h5>
              <p class="card-text">Daftar Motor - Motor Keluaran Terbaru</p>
              <a href="/Motorcycle/Motor Terbaru/mt.php" class="btn btn-dark d-block" style="margin-top: 15%">Lihat Disini</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              *
          </div>
        </div>
        <div class="col-sm-3 g-4">
          <div class="card">
            <div class="card-body" style="height: 170px">
              <h5 class="card-title text-center">Motor Populer</h5>
              <p class="card-text">Daftar Motor - Motor Terpopuler</p>
              <a href="#" class="btn btn-dark d-block" style="margin-top: 15%">Lihat Disini</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              *
          </div>
        </div>
        <div class="col-sm-3 g-4">
          <div class="card">
            <div class="card-body" style="height: 170px">
              <h5 class="card-title text-center">Motor Yang Akan Datang</h5>
              <p class="card-text">Daftar Sepeda Motor Yang Akan Hadir</p>
              <a href="#" class="btn btn-dark d-block" style="margin-top: 15%">Lihat Disini</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              *
          </div>
        </div>
        <div class="col-sm-3 g-4">
          <div class="card">
            <div class="card-body" style="height: 170px">
              <h5 class="card-title text-center">Merk Motor Populer</h5>
              <p class="card-text">Daftar Merk - Merk Motor Populer</p>
              <a href="#" class="btn btn-dark d-block" style="margin-top: 15%">Lihat Disini</a>
            </div>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              *
          </div>
        </div>
      </div>
    </div>
    <!-- First Layout End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
