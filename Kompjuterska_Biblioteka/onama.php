<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BookCook</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/all.min.css"  rel="stylesheet">
  <link href="css/mojstil.css"  rel="stylesheet">

</head>
<body>
  <div class="container">                                                            <!-- OVDE OTVARAMO KONTEJNER -->
    <div class="page-header">
      <h1><img src="img/logo.jpg" class="img-responsive" alt="Kompjuterska Biblioteka | LOGO">
      Kompjuterska Biblioteka  ~ BookCook</h1>
    </div>
    <nav class="navbar navbar-default">                                               <!-- OVDE JE POCETAK NAVBARA -->
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
          Pocetna Strana</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="onama.html">O Nama <span class="sr-only">(current)</span></a></li>
            <li><a href="galerija.php">Galerija Slika!</a></li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Polje za unos">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="kontakt.php">Kontakt</a></li>
            <li><a href="loginsystem/register_form.php">Registujte se</a>
            <li><a href="loginsystem/login_form.php">Logujte se</a>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>                                                                              <!-- OVDE JE KRAJ NAVBARA -->


    <header class="page-header">                                                                <!-- O NAMA HEADING -->
      <h1>O Nama!</h1>
    </header>
    <section>                                                                            <!-- POCETAK SECTIONA -->
      <div class="row">
        <div class="col-md-6">

        Mi smo Kompjuterska biblioteka BookCook,
         koja se bavi onlajn prodajom kompjuterskih knjiga, 
         nasa misija je da edukujemo sto vise ljudi 
         prodajom najraznovrsnijih naslova u svetu IT-a

      </div>
        <div class="col-md-6">

        <img src="./img/sl5.jpg" alt="Slika O Nama" class="img-thumbnail">
       

      </div>
      </div>
    </section>                                                                            <!-- KRAJ SECTIONA -->




    <div class="row">                                                <!-- POCETAK  FOOTER DELA -->
      <div class="col-md-4">

      </div>
      <div class="col-md-4">

        <div class="page-header">
          <h4>Kontakt</h4>
          <p><i class="fas fa-map-marker"></i> Cukaricka Padina </p>
          <p><i class="fas fa-phone"></i> +381 11 20 30 222</p>
          <p><i class="fas fa-envelope"></i> office@its.edu.rs</p>
        </div>

      </div>
      <div class="col-md-4">

        <div class="page-header">
          <h4>Pratite nas </h4>
          <ul class="list-inline">
            <li> <a href="http://facebook.com"> <i class="fab fa-facebook fa-2x"> </i></a> </li>
            <li> <a href="http://instagram.com"> <i class="fab fa-instagram fa-2x"> </i></a> </li>
            <li> <a href="http://twitter.com"> <i class="fab fa-twitter fa-2x"> </i></a> </li>
            <li> <a href="http://linkedin.com"> <i class="fab fa-linkedin fa-2x"></i> </a> </li>
          </ul>
        </div>

      </div>                                                                                <!--  KRAJ GORNJEG DELA FOOTERA -->

      <div class="panel-footer">                                                                  <!-- DONJI DEO FOOTERA -->

        <div class="row">
          <div class="col-md-8">

            <ul class="list-inline">
              <li><a href="onama.php">O nama</a></li>
              <li><a href="#">Knjige</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="kontakt.php">Kontakt</a></li>
              <li><a href="#">Uslovi Koriscenja</a></li>
              <li><a href="#">Mapa Sajta</a></li>
            </ul>

          </div>
          <div class="col-md-4">

            Aleksandar Vidakovic 7419 @ ITS . EDU . RS

          </div>
        </div>

      </div>                                                                                      <!--   KRAJ DONJEG DELA FOOTERA -->

    </div>                                                                                  <!-- KRAJ  FOOTER DELA -->


  </div>                                                                                <!-- OVDE ZATVARAMO KONTEJNER -->




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>