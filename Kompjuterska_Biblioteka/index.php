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


    <h3> Placanje </h3>
    <p>Plaćanje kuriru

      Kuriru Dxpressa ne možete da platite karticom.

    Ali ako imate elektronsku banku na mobilnom telefonu, možete da skenirate QR kod koji se nalazi na predračunu koji ćemo vam poslati i tako jednostavno izvršite plaćanje. Svi podaci iz predračuna se kopiraju u nalog elektronske banke. Tako ćete izbeći kontakt sa kurirom vezan za plaćanje i samo ćete primiti knjigu.</p>

    <h1 align="center">Najprodavanije Knjige Trenutno!</h1>



                            <!-- ARTIKLI PRVI RED-->
    <div class="row">
  <div class="col-md-4">

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="width:200%">
      <img src="img/knjige/c++.jpg" alt="C++ , C PLUS PLUS | Knjiga">
      <div class="caption">
        <h3>C++ Knjiga</h3>
        <p>2640rsd</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

</div>
  <div class="col-md-4">

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="width:200%">
      <img src="img/knjige/csharp.jpg" alt="C# , C SHARP | Knjiga">
      <div class="caption">
        <h3>C# Knjiga</h3>
        <p>2640rsd</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

</div>
  <div class="col-md-4">

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="width:200%">
      <img src="img/knjige/MySQL.png" alt="MySQL , MySQL Baze Podataka | Knjiga">
      <div class="caption">
        <h3>MY SQL Knjiga</h3>
        <p>2200rsd</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
                                        <!-- KRAJ ARTIKALA PRVI RED -->
                                        <!-- ARTIKLI DRUGI RED -->
<div class="row">
  <div class="col-md-4">

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="width:200%">
      <img src="img/knjige/NapredniWebDizajn.jpg" alt="Web , Napredni Web Dizajn | Knjiga">
      <div class="caption">
        <h3>Napredni Web Dizajn</h3>
        <p>1410rsd</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

</div>
  <div class="col-md-4">

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="width:200%">
      <img src="img/knjige/javaProgramiranje.jpg" alt="Java , Java Programiranje | Knjiga">
      <div class="caption">
        <h3>Java Programiranje Knjiga</h3>
        <p>1210rsd</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

</div>
  <div class="col-md-4">

  <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="width:200%">
      <img src="img/knjige/WebProgramiranje.jpg" alt="Web Programiranje , WEB | Knjiga">
      <div class="caption">
        <h3>Web Programiranje Knjiga</h3>
        <p>1540rsd</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

</div>
</div>                                      <!-- KRAJ ARTIKLI DRUGI RED -->


    <div class="row">                                                <!-- POCETAK  FOOTER DELA -->
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




  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>