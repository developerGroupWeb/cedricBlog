
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include 'pills/cssLink.php' ?>

    <title>Cedric</title>
  </head>
  <body>

    <?php include 'template/nav.php' ?>

    <section class="home-section">
      <div class="" style="background-color: rgba(0,0,0,0.7); height: 100vh;">
        <div class="container">
          <div class="row">
            <h1 class="mx-auto text-center">Transformez votre vie par la puissance de votre pensée!</h1>
          </div>
          <div class="row mt-5">
            <!--<div class="btn btn-outline-primary col-sm-4 offset-sm-4 col-10 offset-1">Démarer maintenant</div>-->
          </div>
        </div>
      </div>
    </section>

    <section class="section-about">
      <div class="col-12">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <img src="images/IMG-20181212-WA0094.jpg" class="img-fluid">
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="row mt-5">
              <h1 class="mx-auto text-center font-weight-bold">À propos de Cedric</h1>
            </div>
            <div class="row">
              <h5 class="px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-newsletters bg-primary py-5">
      <div class="col-lg-8 offset-lg-2">
        <div class="row mb-4">
          <h2 class="mx-auto text-center text-white font-weight-bold">Recevez une capsule gratuit de Cedric</h2>
        </div>
        <div class="">
          <form class="row" method="post" action="traitement">
            <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
              <input type="name" id="fName" placeholder="Votre prenom..." class="form-control">
            </div>
            <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
              <input type="name" id="lName" placeholder="Votre nom..." class="form-control">
            </div>
            <div class="form-group col-sm-4 col-10 offset-1 offset-sm-0">
              <input type="email" id="email" placeholder="Votre email..." class="form-control">
            </div>

            <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-10 offset-1">
              <input type="submit" value="Je reçois" id="sendNewsletters" class="btn btn-info w-100">
            </div>
          </form>
        </div>
      </div>
    </section>



    <section class="col-12 section-overlay">
      <div class="row">
        <div class="col-md-4 box1">
          <div class="row" style="background-color: rgba(0,0,0,0.7); height: 300px;">
            <div class="col-12">
              <div class="row">
                <h2 class="mx-auto text-center">Formations</h2>
              </div>

              <div class="row">
                <div class="btn btn-outline-light mx-auto">EN SAVOIR PLUS</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 box2">
          <div class="row" style="background-color: rgba(0,0,0,0.7); height: 300px;">
            <div class="col-12">
              <div class="row">
                <h2 class="mx-auto text-center">Coaching</h2>
              </div>

              <div class="row">
                <div class="btn btn-outline-light mx-auto">EN SAVOIR PLUS</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 box3">
          <div class="row" style="background-color: rgba(0,0,0,0.7); height: 300px;">
            <div class="col-12">
              <div class="row">
                <h2 class="mx-auto text-center">Événements</h2>
              </div>

              <div class="row">
                <div class="btn btn-outline-light mx-auto">EN SAVOIR PLUS</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light py-5">
      <div class="container">
        <div class="row">
          <h1 class="mx-auto text-center mb-4 font-weight-bold">Les derniers articles parus</h1>
        </div>

        <div class="">
          <div class="card-deck row">
            <div class="card">
              <img src="images/9RdVGN.jpg" class="w-100 img-fluid img-fixed-top">

              <div class="card-body">
                <small class="text-muted">Carrière et affaires</small>
                <h4>Travailler chez soi: comment rester motivé ?</h4>
              </div>

              <div class="card-footer text-right">
                <a href="#" class="btn btn-outline-primary">LIRE L'ARTICLE</a>
              </div>
            </div>

            <div class="card">
              <img src="images/9RdVGN.jpg" class="w-100 img-fluid img-fixed-top">

              <div class="card-body">
                <small class="text-muted">Carrière et affaires</small>
                <h4>Travailler chez soi: comment rester motivé ?</h4>
              </div>

              <div class="card-footer text-right">
                <a href="#" class="btn btn-outline-primary">LIRE L'ARTICLE</a>
              </div>
            </div>

            <div class="card">
              <img src="images/9RdVGN.jpg" class="w-100 img-fluid img-fixed-top">

              <div class="card-body">
                <small class="text-muted">Carrière et affaires</small>
                <h4>4 astuces pour établir un budget solide pour les fêtes de fin d'année</h4>
              </div>

              <div class="card-footer text-right">
                <a href="#" class="btn btn-outline-primary">LIRE L'ARTICLE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include 'template/footer.php' ?>

   <?php include 'pills/jsLink.php' ?>
  </body>
</html>