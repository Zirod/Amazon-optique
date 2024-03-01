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
  <header id="header" class="fixed-top header-transparent">
    <?php
        include('header.php');
    ?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Bienvenue chez Amazon Optique</h1>
      <a href="#about" class="btn-get-started scrollto">A propos de nous</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>A propos de nous</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Nous vous proposons des lunettes pour une vision de qualitée</h3>
            <p>
              Nous mettons à votre disposition une multitude de verre classé en catégorie. Nous vous aidons a choisir une monture à votre goût. 
            </p>
            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-receipt"></i>
                <h4>Choix du type de lunette</h4>
                <p>Nous vous proposons une solution en mettant à votre disposition le type de verre convenable à vos yeux</p>
              </div>
              <div class="col-md-6">
                <i class="bx bx-cube-alt"></i>
                <h4>Choix de monture</h4>
                <p>Nous vous aidons a choisir une monture à votre goût et qui convient à votre visage </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <i class="bx bx-help-circle"></i>
              </div>
              <h4><a href="">Accompagner</a></h4>
              <p>Nous sommes à vos côtés pour vous conseiller et vous aider à protéger et préserver votre vue, en vous proposant des offres et services adaptés.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <i class="bx bxs-calendar"></i>
              </div>
              <h4><a href="">Prise de Rendez-vous</a></h4>
              <p>Nous vous proposons la prise de rendez-vous en ligne. Le site vous proposera différents services tels que le contrôle de votre vue, le choix de vos lunettes,</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <i class="bx  bx-badge-check"></i>
              </div>
              <h4><a href="">Choix de monture</a></h4>
              <p>Que vous ayez un style sobre ou un style plutôt sophistiqué, vous aurez l’occasion de choisir la monture qu’il vous faut.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <i class="bx bxs-droplet"></i>
              </div>
              <h4><a href="">Entretien et nettoyage</a></h4>
              <p>Nous pouvons également réaliser gratuitement un nettoyage complet de votre équipement optique ou de celui votre enfant. Pour un nettoyage en profondeur de vos lunettes.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <i class="bx bxs-face"></i>
              </div>
              <h4><a href="">Un service qui vous donne le choix</a></h4>
              <p>Vous devez porter pour la première fois des lunettes de vue ou vous avez décidé de changer vos lunettes, votre opticien met à votre disposition un coffret de 3 montures de votre choix (optique, solaire).</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <i class="bx bxs-happy-heart-eyes"></i>
              </div>
              <h4><a href="">Nous vous donnons des conseil pour préservé la vue</a></h4>
              <p>Car selon l’âge de votre enfant, la façon de l’aborder, mais aussi ses besoins sont différents. Aussi, il est essentiel que les lunettes soient bien portées en privilégiant l’ergonomie de la monture.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Nos Produits</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".optique">Médical</li>
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
                <div class="col-lg-4 col-md-6 portfolio-item <?php echo($reponse['type']);?>">
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
                    <div class = "d-flex justify-content-between p-1">
                      <strong class = "article-name">
                      <?php
                        if(strlen($reponse['nom']) > 15){
                          echo(substr($reponse['nom'], 0, 30).'...');
                        }else{
                          echo($reponse['nom']);
                        }
                      ?>
                      </strong>
                      <strong class = "prix-article"><?php echo($reponse['prix']);echo(' .');echo($reponse['valeur']) ?></strong>
                    </div>
                      <p class = ""><?php echo(substr($reponse['description'], 0, 30));?></p>
                  </div>
                </div>
        <?php
            }
        ?>
        </div>
          
        <div class = "text-center">
          <a href="produits.php"><button class = "btn btn-primary  p-2"> Voir tous les produits</button></a>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing" style= "background:beige;border-radius:15px;">
      <div class="container">

        <div class="section-title">
          <h2>Prendre un Rendez-vous</h2>
          <p></p>
        </div>

        <div class = "card p-3">
          <div class = "p-3"></div>
          <form action="traitement.php" method="post">
            <div class = "p-1">
              <input type="text" class = "form-control" placeholder = "Objet de votre Rendez-vous" required name ="objet">
            </div>
            <div class = "row ">
              <div class = "col-lg-6 p-3">
                <input type="text" class = "form-control" placeholder = "Nom et Prénom" required name = "nom_prenom">
              </div>
              <div class = "col-lg-6 p-3">
                <input type="email" class = "form-control" placeholder = "Adresse E-mail" required name = "email">
              </div>
            </div>
            <div class="row">


              <div class = "col-lg-6 p-3">
                <input type="date" class = "form-control" name = "date">
              </div>
              
              <div class = "col-lg-6 p-3">
                <select name="heure" id="" class = "form-control">
                    <option value="08h-09h">08h - 09h</option>
                    <option value="09h-10h">09h - 10h</option>
                    <option value="10h-11h">10h - 11h</option>
                    <option value="11h-12h">11h - 12h</option>
                    <option value="14h-15h">14h - 15h</option>
                    <option value="15h-16h">15h - 16h</option>
                    <option value="16h-17h">16h - 17h</option>
                    <option value="17h-18h">17h - 18h</option>
                </select>
              </div>
              
                <div class="text-center p-3"><button class = "btn btn-info" type="submit" name = "RDV">Prendre mon RDV</button></div>
            </div>
          </form> 
        </div>

        <?php
          if(isset($_GET['rdv_prise']) == 1){
          ?>
            <div class="alert alert-success alert-dismissible fade show alert_succes" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                  Votre rendez-vous a bien été envoyer. Nous vous enverons un mail au cas ou votre rendez-vous n'a pas été approuvé. 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php
          }
        ?>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Nous Contacter</h2>
          <p>Nous somme disposer à écouté votre requête. Nous recevrons votre requête lorque vous rempliser ce formulaire, un mail vous serait envoyer en retour de votre requête</p>
        </div>

        <div class="row">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Nous envoyer un mail</h3>
                  <p>amazonoptique@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Nous appeler</h3>
                  <p>+229 96687276<br>+229 ...</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-12">
            <form action="traitement.php" method="post" role="form" class="info-box p-3">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nom" class="form-control" id="name" placeholder="Votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class = "p-2"></div>
              <div class="text-center"><button type="my_mail" name= "my_mail" class = "btn btn-warning">Envoyer le message</button></div>
            </form>
          </div>

        </div>

      </div>
        <?php
          if(isset($_GET['mon_mail']) == 1){
          ?>
            <div class="alert alert-warning alert-dismissible fade show alert_succes" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                  Votre message a bien été envoyer. Nous vous ferons un retour par mail dans les plus bref délais. Si aucun retour dans les prochaines 72h veuillez bien nous recontacter. 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php
          }
        ?>
    </section><!-- End Contact Section -->

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

<style>
  .alert_succes{
    position:fixed;top:7%;right:10%;left:10%;
    z-index: 100000;
  }
</style>