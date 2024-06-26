<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Matej Medvec">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=YourFont&display=swap" rel="stylesheet">
  <title>Objavuj Svet | Domov</title>
</head>

<body>
  <?php include_once 'includes/header.php'; ?>
  <div class="body">
    <div class="container" id="container">
      <div class="container mt-5 mb-5 text-center py-5">
        <div class="container w-75">
          <h1>Začni objavovať svet s nami</h1>
          <p class="mb-2 mt-5">
            Vitajte v našom unikátnom svete dobrodružstva a objavovania! Sme váš spoľahlivý sprievodca na ceste za
            novými zážitkami, fascinujúcimi miestami a neopakovateľnými chvíľami. Od vrcholov majestátnych hôr po príboj
            tajomných morí, pozývame vás na cestu, kde každý krok je novým objavom.
          </p>
        </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <img src="img/map.jpg" alt="mapa" class="rounded-5 mb-2 mt-1">
          <div class="col pt-5">
            <i class="fa-solid fa-earth-americas fa-2x"></i>
            <h2 class="text-primary fw-bold text-uppercase pb-2">Amerika</h2>
            <p class="text">Kde sa spája minulosť s prítomnosťou, je miesto nekonečných objavov.</p>
          </div>
          <div class="col pt-5">
            <i class="fa-solid fa-earth-europe fa-2x"></i>
            <h2 class="text-success fw-bold text-uppercase pb-2">Európa</h2>
            <p>Vysoká kultúrna diverzita, efektívna doprava a mestský pulz robia Európu jedinečnou destináciou pre
              cestovateľov.</p>
          </div>
          <div class="col pt-5">
            <i class="fa-solid fa-earth-asia fa-2x"></i>
            <h2 class="text-danger fw-bold text-uppercase pb-2">Ázia</h2>
            <p>Vychutnajte si rozmanitú kuchyňu, spoznajte spirituálne tradície a objavte rýchlo rastúce hospodárstva.
            </p>
          </div>
          <div class="col pt-5">
            <i class="fa-solid fa-earth-africa fa-2x"></i>
            <h2 class="text-warning fw-bold text-uppercase pb-2">Afrika</h2>
            <p>Od saván a púští po historické poklady a exotickú faunu. Rôznorodé kultúry, hudba a tance oživujú tento
              kontinent.</p>
          </div>
          <div class="col pt-5">
            <i class="fa-solid fa-earth-oceania fa-2x"></i>
            <h2 class="text-info fw-bold text-uppercase pb-2">Oceánia</h2>
            <p>Pláže s bielym pieskom, koralové útesy a pestrý podmorský život tvoria krásu tohto kontinentu.</p>
          </div>
        </div>
      </div>
      <div class="container mt-3 mb-4 text-center">
        <a href="galeria.php" class="btn btn-primary rounded-5 btn-lg text-white fw-bold">GALÉRIA</a>
      </div>
    </div>
    <div class="container" id="container2">
      <div class="container mt-5">
        <div class="container mt-5 mb-5 text-center py-5">
          <div class="col pt-1 text-center">
            <i class="fa-solid fa-earth-americas fa-2x"></i>
            <h2 class="text-reset fw-bold text-uppercase pb-2">NAJ DESTINÁCIE</h2>
          </div>
          <br><br>
          <div class="row justify-content-around">
            <div class="col-md-4 mb-3">
              <div class="card d-flex flex-column">
                <img src="img/egypt.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body d-flex flex-column flex-grow-1 align-items-center">
                  <h5 class="card-title text-uppercase fw-bold">Egypt</h5>
                  <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="book.php" class="btn btn-primary">Rezervovať</a>
                    <p class="card-text">od <strong>924 €</strong></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card d-flex flex-column h-100">
                <img src="img/cyprus.jpeg" class="card-img-top img-fluid" alt="...">
                <div class="card-body d-flex flex-column flex-grow-1 align-items-center">
                  <br>
                  <h5 class="card-title text-uppercase fw-bold">Cyprus</h5>
                  <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="book.php" class="btn btn-primary">Rezervovať</a>
                    <p class="card-text">od <strong>930 €</strong></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card d-flex flex-column">
                <img src="img/grecko.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body d-flex flex-column flex-grow-1 align-items-center">
                  <h5 class="card-title text-uppercase fw-bold">Grécko</h5>
                  <div class="w-100 d-flex justify-content-between align-items-center">
                    <a href="book.php" class="btn btn-primary">Rezervovať</a>
                    <p class="card-text">od <strong>815 €</strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="container" id="container2">
    <div class="container mt-5">
      <div class="card-body text-center">
        <figure class="text-center">
          <blockquote class="blockquote">
            <p>
              "Skutočné cestovanie nie je hľadanie nových krajín, ale nových očí."
            </p>
          </blockquote>
          <figcaption class="blockquote-footer">
            <cite title="Source Title">Marcel Proust</cite>
          </figcaption>
        </figure>
        <div class="card-group">
          <div class="card">
            <img src="img/Objavuj.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-uppercase fw-bold">Objavuj</h5>
              <p class="card-text">Objavuj kultúry, ľudí, miesta a chuťové dobrodružstvá. Zanechaj stopy tam, kde si
                ešte nebol, a nechaj sa unášať <strong>dobrodružstvom.</strong></p>
            </div>
          </div>
          <div class="card">
            <img src="img/jedlo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-uppercase fw-bold">Skúšaj nové veci</h5>
              <p class="card-text"> Nebojte sa objavovať rôznorodé chute neznámych jedál a ponorte sa do kultúr, ktoré
                ti ešte nie sú známe. Otvor si chute na svete a nechaj sa unášať arómami a dojmami z celého sveta.</p>
            </div>
          </div>
          <div class="card">
            <img src="img/relax.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-uppercase fw-bold">Relaxuj</h5>
              <p class="card-text">okolo sveta s duchom relaxácie je terapeutickou oázou pre dušu. Otvárajte svoje
                srdce pokojným plážam, meditujte v prírode a doprajte si pohodové zážitky v relaxačných oázach.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container align-text-top mt-0 text-center">
      <div class="container mt-5 mb-5">
        <p class="mt-5">Cestovanie je dobrodružstvo bez konca, nekonečná odysea objavovania. Každý krok je nový
          príbeh, každý výhľad nový obraz, a každé stretnutie nová kapitola v rozprávke života. Vo svete cestovania sa
          stávame svedkami krásy prírody, diverzity kultúr a sily ľudskej tvorivosti. Je to príležitosť stretávať
          nových ľudí, okúsiť nové chute, a predovšetkým, spoznať sám seba v každom kroku. Cestovanie je viac ako
          pohyb, je to cesta objavovania a obohacovania našich životov neopakovateľnými zážitkami a nekonečným rastom.
        </p>
      </div>
      <div class="text-center fw-bold">
        <h1>ZAUJÍMAVOSTI A FAKTY</h1>
      </div>
      <div class="accordion mb-5" id="accordionExample">
        <div class="accordion-item button-primary">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Pyramídy v Gíze
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Staroveké pyramídy sú jednými z najznámejších archeologických pamiatok sveta a sú považované za jedno z
              Sedem svetských divov.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Najväčší Počet Turistov
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Paríž priláka viac než 80 miliónov návštevníkov ročne, čím sa radí medzi najnavštevovanejšie mestá na
              svete.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Curry v Indii
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Indická kuchyňa je pestrá a každá oblasť má svoje vlastné špecifické curry. S rôznymi koreninami a
              bylinkami ponúka rozmanité a výrazné chute.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <?php include_once 'includes/footer.php'; ?>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Naspäť</button>
  <script src="js/app.js"></script>
  <script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>