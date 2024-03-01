<?php
    include('traitement.php');
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include('head.php');
    ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="index.html">Amazon Optique</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto" href="index.php">Accueil</a></li>
            <li><a class="nav-link scrollto" href="index.php #about">A Propos</a></li>
            <li><a class="nav-link scrollto" href="index.php #services">Services</a></li>
            <li><a class="nav-link scrollto active" href="index.php #portfolio">Nos Produits</a></li>
            <li><a class="nav-link scrollto" href="index.php #pricing">Prendre un RDV</a></li>
            <li><a class="nav-link scrollto" href="index.php #contact">Nous Contacter</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tous les produits</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Tous les produits</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <!-- ======= Portfolio Section ======= -->
        <section id="" class="portfolio">
        <div class="container">

            <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".optique">Optique</li>
                <li data-filter=".soleil">soleil</li>
                <li data-filter=".sport">Sport</li>
                </ul>
            </div>
            </div>

            <div class="row portfolio-container">

                <?php
                    $connexion = $bdd;
                    $find_article = $connexion->query('SELECT * FROM all_article ORDER BY ID DESC LIMIT 9');
                    while($reponse = $find_article->fetch()){
                ?>
                        <div class="col-lg-4 col-md-6 portfolio-item <?php echo($reponse['type']); ?>">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                            <img src="Admin/<?php echo($reponse['illustration1']); ?>" class="img-fluid1" alt="">
                            </div>

                            <div class="swiper-slide">
                            <img src="Admin/<?php echo($reponse['illustration2']); ?>" class="img-fluid1" alt="">
                            </div>

                            <div class="swiper-slide">
                            <img src="Admin/<?php echo($reponse['illustration3']); ?>" class="img-fluid1" alt="">
                            </div>

                            </div>
                        </div>
                        <div class="portfolio-info text-center">
                            <h4><a href="produit-details.php?ID=<?php echo($reponse['ID']); ?>" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox details-link" title="Détails du produit"><i class="bx bx-link"></i></a></h4>
                        </div>
                        <div class = "card-footer"> 
                            <div class = "d-flex justify-content-between p-2">
                            <strong class = "article-name"><?php echo($reponse['nom']); ?></strong>
                            <strong class = "prix-article"><?php echo($reponse['prix']);echo(' .');echo($reponse['valeur']) ?></strong>
                            </div>
                            <p class = "p-2"><?php echo(substr($reponse['description'], 0, 30));echo('...'); ?></p>
                        </div>
                        </div>
                <?php
                    }
                ?>
                </div>

            </div>
        </div>
        </section><!-- End Portfolio Section -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php
        include('footer.php');
    ?>
  </footer><!-- End Footer -->
    <?php
        include('script.php');
    ?>

</body>

</html>