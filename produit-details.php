<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include('head.php');
        include('config.php');

        $connexion = $bdd;
    ?>
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

        <?php
            $detail_produit = $connexion->query('SELECT * FROM all_article WHERE ID='.$_GET['ID']);
            $req_detail = $detail_produit->fetch();
        ?>

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img class = "Img_details" src="Admin/<?php echo($req_detail['illustration1']); ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img class = "Img_details" src="Admin/<?php echo($req_detail['illustration2']); ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img class = "Img_details" src="Admin/<?php echo($req_detail['illustration3']); ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Détails de l'article</h3>
              <ul>
                <li><strong>Nom</strong>: <?php echo($req_detail['nom']); ?></li>
                <li style="color:green;"><strong>Prix</strong>: <?php echo($req_detail['prix']);echo(' ');echo($req_detail['valeur']) ?></li>
                <li><strong>Disponible depuis</strong>: <?php echo($req_detail['date']); ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description de l'article</h2>
              <p>
              <?php echo($req_detail['description']); ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php
        include('script.php');
    ?>

</body>

</html>

<style>
    .Img_details{
        width: 100%;
        height: 450px;
    }
</style>