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
            <li class="active"><a href="onama.php">O Nama <span class="sr-only">(current)</span></a></li>
            <li><a href="galerija.php">Galerija Slika!</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Knjige <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Sve knjige</a></li>
                <li><a href="#">Casopisi</a></li>
                <li><a href="#">Mapa sajta</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Strana za stampu</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </li>
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
            <li><a href="registracija.php">Registracij te se</a>
            <li><a href="shop.php">Online prodavnica</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>                                                                              <!-- OVDE JE KRAJ NAVBARA -->



    <div class="row">
      <div class="col-md-6">

        <header class="page-header">
          <h1>Kontakt</h1>
        </header>

        <form name="forma">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="inputText">Vasa poruka</label>
            <textarea type="password" class="form-control" rows="5" id="inputText"></textarea>
          </div>
          

          <button type="submit" class="btn btn-danger btn-lg btn-block" onclick="KontaktValidation()">Posaljite</button>
        </form>

      </div>
      <div class="col-md-6">

        <header class="page-header">
          <h1>Gde se nalazimo</h1>
        </header>

          <p><i class="fas fa-map-marker"></i> Cukaricka Padina </p>
          <p><i class="fas fa-phone"></i> +381 11 20 30 222</p>
          <p><i class="fas fa-envelope"></i> office@its.edu.rs</p>
          

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.9758022439087!2d20.417924615338748!3d44.801681779098715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a6fed108da8a7%3A0x9c662a8e931516fb!2sITS%20-%20Visoka%20%C5%A1kola%20za%20informacione%20tehnologije!5e0!3m2!1sen!2srs!4v1663401396760!5m2!1sen!2srs" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




      </div>
    </div>



    <div class="row" style="padding: 15px;">                                                <!-- POCETAK  FOOTER DELA -->
      <div class="col-md-4">

        <div class="page-header">
          <h4>O Nama</h4>
          <p> Mi smo Kompjuterska biblioteka BookCook, koja se bavi onlajn prodajom kompjuterskih knjiga, nasa misija je da edukujemo sto vise ljudi prodajom najraznovrsnijih naslova u svetu IT-a</p>
        </div>

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



  <script src="js/validacija.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>