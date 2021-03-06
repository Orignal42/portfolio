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
  <style type="text/css">
    a:link {
      text-decoration: none
    }
  </style>
</head>



<body>



  <section id="header">

    <?php if (isset($_GET["message"])) : ?>

      <div style="padding:10px;background:green;color:#fff;">

        <?= $_GET["message"] ?>

      </div>

    <?php endif; ?>





    <nav class="navbar navbar-expand-lg navbar-light bg-light ">

      <div class="container-fluid">



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">

              <a class="nav-link " aria-current="page" href="#"> <img src="images/facebook_profile_image.png"></a>

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

      <img src="./images/moi.jpg">

    </div>

    </br>



    <h1>Romain Barriquand</h1>

    <h4>Développeur web et mobile junior</h4>

    <p> Romain Barriquand, développeur web et mobile junior en formation, j'ai commencé dans l'industrie puis au bout de 15 ans, j'ai decidé de me reconvertir.</p>

  </section>



  <section id="cv">

    <div class="container">
      <a href="./cv/rbarriquand.pdf"><button>Mon CV</button></a>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div id="content">
                <ul class="timeline">
                  <li class="event" data-date="2006 - 2010">
                    <p>Obtention de mon DUT génie industriel et maintenance et différentes missions intérims en tant que mécanicien monteur.</p>

                  </li>

                  <li class="event" data-date="2009- 2012">
                    <p>CDI à Europe géothermie en tant que technicien industriel.</p>
                  </li>
                  <li class="event" data-date="2013-2015">
                    <p>CDI pour la société r.Legrand en tant que technicien en signalisation ferrovaire.</p>
                  </li>
                  <li class="event" data-date="2015-2021">
                    <p>Différentes missions en tant que technicien SAV et électricien industriel et batiment.</p>
                  </li>
                  <li class="event" data-date="2021">
                    <p>Formation à Simplon Roanne pour devenir web développeur et développeur mobile junior.</p>
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
      <a href="http://rb-instaggeek.projets.simplon-roanne.com/index.php">
        <div class="col-sm-12 col-md-12 col-xl-6">
          <h5 class="card-title">Instageek</h5>
          <div class="carousel-cell">

            <div class="card">

              <div class="insta">

              </div>

            </div>

          </div>

        </div>
      </a>

      <a href="http://rb-compar.projets.simplon-roanne.com/index.php">
        <div class="col-sm-12 col-md-12 col-xl-6">
          <h5 class="card-title">Compar'operator</h5>
          <div class="carousel-cell">

            <div class="card">

              <div class="compar">

              </div>

            </div>

          </div>

        </div>
      </a>

      <a href="http://rb-morpion.projets.simplon-roanne.com/">

        <div class="col-sm-12 col-md-12 col-xl-6">

          <h5>Morpion</h5>
          <div class="carousel-cell">
            <div class="card ">
              <div class="morpion">



              </div>

            </div>

          </div>

        </div>
      </a>
    </div>



  </section>



  <section id="competences">

    <h1>Mes compétences</h1>

    <div class="row wrap">

      <div class=" col-sm-12 col-md-8 col-xl-6">

        <div class="images">

          <img src="images/HTML5_Logo_512.png">

        </div>

        <div class="progress">

          <div class="progress-bar progress-bar-success progress-bar-striped active html" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

            <span class="sr-only">80% </span>

          </div>

        </div>

      </div>

      <div class=" col-sm-12 col-md-8 col-xl-6 centre">
        <div class="images">
          <img src="images/CSS3_logo_and_wordmark.svg">
        </div>



        <div class="progress">

          <div class="progress-bar progress-bar-success progress-bar-striped active css" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

            <span class="sr-only">80% </span>

          </div>

        </div>

      </div>



      <div class=" col-sm-12 col-md-8 col-xl-6 json ">

        <div class="images">

          <img src="images/js-logo.png">

        </div>

        <div class="progress">

          <div class="progress-bar progress-bar-success progress-bar-striped active js" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

            <span class="sr-only">60%</span>

          </div>

        </div>

      </div>



      <div class=" col-sm-12 col-md-8 col-xl-6">

        <div class="images">

          <img src="images/php8.png">

        </div>

        <div class="progress">

          <div class=" progress-bar progress-bar-success progress-bar-striped active php" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

            <span class="sr-only">50%</span>

          </div>

        </div>

      </div>



      <div class=" col-sm-12 col-md-8 col-xl-6">

        <div class="images">

          <img src="images/mysql.png">

        </div>

        <div class="progress">

          <div class=" progress-bar progress-bar-success progress-bar-striped active mysql" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

            <span class="sr-only">50%</span>

          </div>

        </div>

      </div>



      <div class=" col-sm-12 col-md-8 col-xl-6">

        <div class="images">

          <img src="images\symfony.png">

        </div>

        <div class="progress">

          <div class=" progress-bar progress-bar-success progress-bar-striped active symfony" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

            <span class="sr-only">50%</span>

          </div>

        </div>

      </div>

    </div>

  </section>



  <h1>Contact</h1>

  <section id="contact">



    <form method="post" action="php/main.php">



      <div class="col-sm-12 col-md-8 col-xl-6">

        <label>Email:</label>

        <input class="champ" type="email" name="email" required><br>

      </div>



      <div class="col-sm-12 col-md-8 col-xl-6">

        <label>Message:</label>

        <textarea class="champ" name="message" required></textarea><br>

        <input type="submit">

      </div>



    </form>



  </section>



  <section id="footer">

    <div class="col-1"></div>

    <div class="col-sm-12 col-md-6 col-xl-4">
    <a href="https://github.com/">
      <img src="images/git.png" width="10%">
      </a>
    </div>

    <div class="col-sm-12 col-md-6 col-xl-4">
    <a href="https://www.linkedin.com/feed/">
      <img src="images/link.png" width="10%">
    </a>
    </div>



  </section>











  <!-- JavaScript Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="js/main.js"></script>



</body>



</html>