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
  <title>Objavuj Svet | O nás</title>
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
              <a class="nav-link active text fw-bold" href="o_nas.html">O nás</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text fw-bold" href="galeria.html">Galéria</a>
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
  <div class="container mt-5 mb-5 text-center py-5">
    <div class="container w-75">
      <h1 class="pt-5 text text-uppercase fw-bold">kto sme</h1>
      <p class="mb-5 mt-5">
        Sme váš spoľahlivý sprievodca svetom! Naša cestovateľská spoločnosť je zameraná na poskytovanie jedinečných a
        nezabudnuteľných zážitkov v cestovaní pre našich klientov. Sme váš partner pri objavovaní najkrajších kútov
        sveta s bezpečím a pohodlím na mysli.
      </p>
    </div>
    <div class="container w-75">
      <h1 class="pt-5 text text-uppercase fw-bold">často kladané otázky</h1>
      <div class="accordion mt-5 mb-5" id="accordionExample">
        <div class="accordion-item button-primary">
          <h2 class="accordion-header">
            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Čo ponúkame?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Poskytujeme široký výber cestovateľských služieb vrátane individuálnych a skupinových zájazdov,
              dobrodružných výletov, luxusného ubytovania a prispôsobených dovoleniek pre všetky typy cestovateľov. Bez
              ohľadu na to, či túžite po dovolenke na pláži, dobrodružstve v horách alebo kultúrnom pobyte v
              historických mestách, sme tu pre vás.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Ako sa môžem spojiť s vašou spoločnosťou?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Je to jednoduché! Kontaktujte nás prostredníctvom našej webovej stránky, telefonicky alebo e-mailom. Naši
              odborní poradcovia vám radi pomôžu s plánovaním vašej nasledujúcej nezabudnuteľnej dovolenky.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Ako zabezpečujete bezpečnosť cestujúcich?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Bezpečnosť našich cestujúcich je našou najvyššou prioritou. Sledujeme aktuálne bezpečnostné smernice a
              spolupracujeme s renomovanými partnermi na poskytovaní spoľahlivých a bezpečných služieb. Naši
              sprievodcovia a personál sú dobre vyškolení a pripravení zabezpečiť vaše bezpečné a príjemné cestovanie.
            </div>
          </div>
        </div>
      </div>
      <h1 class="pt-5 text text-uppercase fw-bold">kde nás najdete</h1>
      <div class="google-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42651.06138028969!2d18.227304031430585!3d48.0776005326773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476b1cb96148f7c3%3A0xfad3a4b1688bd8d9!2s941%2043%20Doln%C3%BD%20Ohaj!5e0!3m2!1ssk!2ssk!4v1702657637464!5m2!1ssk!2ssk"
          width="600" height="450" style="border:10px;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-light text-black mt-auto">
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
</body>
<script src="js/app.js"></script>
<script src="https://kit.fontawesome.com/e3fb291045.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>