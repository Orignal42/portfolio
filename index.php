<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <!-- CSS only -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link href="./css/main.scss" rel="stylesheet">
</head>

<body>

  <section id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <div class="container-fluid">
        <img src="/portfolio/images/facebook_profile_image.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cv">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
       
            <li class="nav-item">
              <a class="nav-link" href="#competences">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>

        </div>

      </div>
    </nav>
  </section> </br>

  <section id="moi">
    <div class="photo">
      <img src="./images/1612435879747.jfif">
    </div>
    </br>

    <h1>Romain Barriquand</h1>
    <h4>Développeur web/ web mobile junior</h4>
    <p> Romain Barriquand, Web dev/webmobil junior en formation, j'ai commencé dans la maintenance puis j'ai decidé de me reconvertir au bout
      de 15 ans en webdev.</p>
  </section>

  <section id="cv">



    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">

              <div id="content">
                <ul class="timeline">

                  <li class="event" data-date="2006 - 2010">

                    <p>Obtention d'un DUT génie industriel et maintenance et différentes missions intérims en tant que mécanicien monteur</p>
                  </li>
                  <li class="event" data-date="2009- 2012">

                    <p>CDI à Europe géothermie en tant que technicien industriel </p>
                  </li>
                  <li class="event" data-date="2013-2015">

                    <p>CDI pour la société Rlegrand en tant que technicien en signalisation ferrovaire.</p>
                  <li class="event" data-date="2015-2021">

                    <p>Différentes missions en tant que technicien SAV et électricien industriel et batiment</p>
                  </li>
                  </li>
                  <li class="event" data-date="2021">

                    <p>Formation à Simplon Roanne pour devenir Dev web/web mobil junior.</p>
                  </li>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio">
    <H1>Portfolio</H1>

    <div class="carousel" data-flickity='{ "wrapAround": true }'>

      <div class="carousel-cell">
        <div class="card col-md-12 col-xl-12">
          <h5 class="card-title">ZOO</h5>
          <div class="card-body">
            <img src="./images/zoo.png">
            <div class="card-content">
              <p>Projet pour apprendre le POO PHP</p>
            </div>
          </div>
        </div>
      </div>


      <div class="carousel-cell">
        <div class="card col-md-12 col-xl-12">
          <h5 class="card-title">Cagnot'potes</h5>
          <div class="card-body">
            <img src="images/cagnot.png">
            <div class="card-content">
              <p>Projet pour apprendre symfony</p>
            </div>
          </div>
        </div>
      </div>


      <div class="carousel-cell">
        <div class="card col-md-12 col-xl-12">
          <h5 class="card-title">Instageek</h5>
          <div class="card-body">
            <img src="images/instageeks.png">
            <div class="card-content">
              <p>Petit challenge des 2 mois</p>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-cell ">
        <div class="card col-md-12 col-xl-12">
          <h5 class="card-title">Minichat</h5>
          <div class="card-body">
            <img src="images/minichat.png">
            <div class="card-content">
              <p>Projet pour apprendre le php et le sql</p>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-cell">
        <div class="card col-sd-12 col-md-8 col-xl-12">
          <h5 class="card-title">Combat</h5>
          <div class="card-body">
            <img src="images/mini jeu combat.png">
            <div class="card-content">
              <p>Pour apprendre la poo php</p>
            </div>
          </div>
        </div>
      </div>


      <div class="carousel-cell">
        <div class="card col-sd-12 col-md-8 col-xl-12">
          <h5 class="card-title">The Mountains</h5>
          <div class="card-body">
            <img src="images/the mountain.png">
            <div class="card-content">
              <p>Challenge en html, css et bootstrap.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
  </div>
  <section id="competences">
    <h1>Mes compétences</h1>
    <div class="row wrap">
      <div class=" col-sm-12 col-md-8 col-xl-2">
        <img src="/portfolio/images/HTML5_Logo_512.png">
        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped active html" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">100% </span>
          </div>
        </div>
      </div>
      <div class=" col-sm-12 col-md-8 col-xl-2">

        <img src="/portfolio/images/CSS3_logo_and_wordmark.svg">


        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped active css" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">90% </span>
          </div>
        </div>
      </div>

      <div class=" col-sm-12 col-md-8 col-xl-2">
        <img src="/portfolio/images/js-logo.png">
        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped active js" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">60%</span>
          </div>
        </div>
      </div>

      <div class=" col-sm-12 col-md-8 col-xl-2">
        <img src="/portfolio/images/php8.png">

        <div class="progress">
          <div class=" progress-bar progress-bar-success progress-bar-striped active php" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">50%</span>
          </div>
        </div>
      </div>


      <div class=" col-sm-12 col-md-8 col-xl-2">
        <img src="\portfolio\images\symfony.svg">
        <div class="progress">
          <div class="progress-bar progress-bar-success progress-bar-striped active symfony " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
            <span class="sr-only">30% </span>
          </div>
        </div>
      </div>
    </div>

  </section>
  <h1>Contact</h1>
  <section id="contact">

  
  <div class="row">
          <div class="col-sm-12 col-md-8 col-xl-4 mail ">        
            <p><h1>&#x1F4E7;</h1>romain.barriquand@laposte.net</p>
          </div>
          <div class="col-sm-12 col-md-8 col-xl-4 mail ">
              <p><h1>&#x260E;</h1> 06.89.88.85.71</p>
          </div>
          <div class="col-sm-12 col-md-8 col-xl-4 mail ">
            <img src="/portfolio/images/github.png" width="10%" height="auto">
            <a href="https://github.com/">
            <p>lien vers mon github</p></a>
          </div>
   </div>

  
     
      <form method="post" action="">
      <div id="email">
      <div class="col-sm-12 col-md-8 col-xl-4 mail ">
        <label>Email</label>
        <input type="email" name="email" required><br>
      </div>
      <div class="col-sm-12 col-md-8 col-xl-4 mail ">
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
      </div>
      </div>
      </form>



    <?php
    if (isset($_POST['message'])) {
      $position_arobase = strpos($_POST['email'], '@');
      if ($position_arobase === false)
        echo '<p>Votre email doit comporter un arobase.</p>';
      else {
        $retour = mail('romain.barriquand@laposte.net', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
        if ($retour)
          echo '<p>Votre message a été envoyé.</p>';
        else
          echo '<p>Erreur.</p>';
      }
    }
    ?>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


</body>

</html>