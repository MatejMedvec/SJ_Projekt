<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Matej Medvec">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=YourFont&display=swap" rel="stylesheet">
  <title>Objavuj Svet | Galéria</title>
</head>

<body>
  <?php include 'connection.php'; ?>
  <nav class="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="img/Logo.png" alt="logo" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-3">
            <li class="nav-item">
              <a class="nav-link text fw-bold" aria-current="page" href="index.html">Domov</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text fw-bold" href="o_nas.html">O nás</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text fw-bold" href="galeria.html">Galéria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text fw-bold" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text fw-bold" href="kontakt.html">Kontakt</a>
            </li>
        </div>
      </div>
    </nav>
  </nav>
  <div class="body">
    <div class="container text-center py-5 mt mt-sm-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Domov</a></li>
          <li class="breadcrumb-item active" aria-current="page">Galéria</li>
        </ol>
      </nav>
    </div>
    <div class="container" id="container3">
      <div class="col pt-3 text-center">
        <i class="fa-solid fa-earth-americas fa-2x"></i>
        <h2 class="text-reset fw-bold text-uppercase pb-2">GALÉRIA</h2>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide rounded-carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/berlin.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Berlín, Nemecko</h5>
              <p>Brandenburská brána, patrí k najznámejším pamätihodnostiam Berlína a k jeho významným symbolom.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/benatky.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Benátky, Taliansko</h5>
              <p>Benátky sú hlavné mesto severotalianskeho regiónu Benátsko, ležiace v močaristej Benátskej lagúne, v
                severnej časti Jadranského mora.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/norway.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Bergen, Nórsko</h5>
              <p>Bergen je druhé najväčšie mesto v Nórsku. Jeho centrum sa nachádza medzi skupinou hôr známych ako De
                syv fjell.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="container" id="container5">
    <div class="col pt-3 text-center">
      <i class="fa-solid fa-earth-americas fa-2x"></i>
      <h2 class="text-reset fw-bold text-uppercase pb-2">PRÍSPEVKY</h2>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="img/Brazil.jpg" class="card-img-top" alt="Brazilia">
        <div class="card-body">
          <h5 class="card-title">Západ slnka v Rio de Janeiro </h5>
          <p class="card-text">Nič nie je lepšie ako sa kochať na západ slnka v Riu.</p>
          <div class="pt-4" id="liveAlertPlaceholder"></div>
          <button type="button" class="btn btn-danger" id="liveAlertBtn">
            <i class="fa-solid fa-heart"></i>
          </button>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated pred 3 mesiacmi</small>
        </div>
      </div>
      <div class="card">
        <img src="img/japan.jpg" class="card-img-top" alt="Japonsko">
        <div class="card-body">
          <h5 class="card-title">Pestrofarebné Japonsko</h5>
          <p class="card-text">Nečakal by som, že japonsko je tak zaujímavé.</p>
          <div class="pt-5" id="liveAlertPlaceholder"></div>
          <button type="button" class="btn btn-danger" id="liveAlertBtn">
            <i class="fa-solid fa-heart"></i>
          </button>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated pred 4 mesiacmi</small>
        </div>
      </div>
      <div class="card">
        <img src="img/usa.jpg" class="card-img-top" alt="USA">
        <div class="card-body">
          <h5 class="card-title">Golden Gate</h5>
          <p class="card-text">Amerika.</p>
          <div class="pt-5" id="liveAlertPlaceholder"></div>
          <button type="button" class="btn btn-danger" id="liveAlertBtn">
            <i class="fa-solid fa-heart"></i>
          </button>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated pred 5 mesiacmi</small>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid bg-light text-black mt-0">
    <div class="row p-3">
      <div class="col-md-4">
        <h5>Informácie o stránke</h5>
        <p>Tu môžete vložiť informácie o vašej stránke.</p>
      </div>
      <div class="col-md-4">
        <h5>Ďalšie informácie</h5>
        <p>Ďalšie dôležité informácie môžete umiestniť sem.</p>
      </div>
      <div class="col-md-4">
        <h5>Kontakt</h5>
        <p>Pre viac informácii nás môžete kontaktovať <a class="text-reset fw-bold" href="kontakt.html">tu</a></p>
        <ul class="lisy-group list-group-flush">
          <p><i class="fa-solid fa-phone me-3"></i><a href="tel:+421904116288">+421 904 116 288</a></p>
          <p><i class="fa-solid fa-envelope me-3"></i><a href="mailto:matejmedvec@gmail.com">matejmedvec@gmail.com</a>
          </p>
        </ul>
      </div>
    </div>
  </div>
  <footer class="bg-light text-center p-4">
    <p class="mb-0 text-body-secondary">© Objavuj Svet. All rights reserved.</p>
  </footer>
  <script src="js/app.js"></script>
  <script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>