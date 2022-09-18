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
        <div class="col-md-6"> <!-- leva strana prikaza -->
          <div class="page-header">
            <h2>Registruj se</h2>
          </div>

          <!-- PHP -->

          <br>

          <form method="POST" action="registracija.php">



            <?php 



            $mysqli=new mysqli("localhost","root","","reg");


            if ($mysqli->error) {
             die("Neuspesno, Greska prilikom povezivanja sa bazom" . $mysqli->error);
           }

           $ime="";
           $prezime="";
           $email="";
           $password1="";
           $password2="";

           if (isset($_POST['dodaj'])) 
           {
             if ( (!$_POST['ime']) || (!$_POST['prezime']) || (!$_POST['email']) || (!$_POST['password1']) || (!$_POST['password2']) ) 
             {
               echo "Morate da unesete Vase ime, prezime, email, i passworde!!!";
             }
             else
             {
              $upit= "INSERT INTO profil VALUES ('" . $_POST['ime'] . "' , '" . $_POST['prezime'] . "' , '" . $_POST['email'] . "' , '" . sha1( $_POST['password1'] ) . "')";
                if ($_POST['password1'] === $_POST['password2']) 
                 $rez = $mysqli->query($upit);
               else $rez = false;
               if ($rez)
               {
                 ?> 
                 <div class="alert alert-success alert-dismissible" role="alert">
                   <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                     <strong>Success!</strong>Uspesno ste se registrovali                  
                   </div> 
                   <?php 
                 }
                 else
                 {
                   ?>
                   <div class="alert alert-warning alert-dismissible" role="alert">
                     <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                     <strong>Success!</strong>
                     Uspesno ste se registrovali                  
                   </div> 
                   <?php
                 }
               }
             }


             ?>

             <!-- HTML FORMA -->
             <div class="form-group">
              <label for="ime">Vaše ime</label>
              <input type="text" class="form-control" id="ime" name="ime" value="<?php echo $ime ?>" placeholder="Unesite ime" required>
            </div>
            <div class="form-group">
              <label for="prezime">Vaše prezime</label>
              <input type="text" class="form-control" id="prezime" name="prezime" value="<?php echo $prezime ?>" placeholder="Unesite prezime" required>
            </div>
            <div class="form-group">
              <label for="email">email adresa</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Unesite e-mail adresu" required>
            </div>
            <div class="form-group">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1 ?>"placeholder="Unesite Password" required>
            </div>
            <div class="form-group">
              <label for="password2">Password</label>
              <input type="password" class="form-control" id="password2" name="password2" value="<?php echo $password2 ?>" placeholder="Ponovite Password" required>
            </div>
            <button type="submit" name="dodaj" value="dodaj" class="btn btn-warning btn-lg btn-block"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> Registruj se</button>
          </div>

        </form>


        <form method="POST" action="admin.php">

          <div class="col-md-6"> <!-- desna strana prikaza -->
            <div class="page-header">
              <h2>Uloguj se</h2>
            </div>
            <?php 


            $mysqli=new mysqli("localhost","root","","reg");


            if ($mysqli->error) {
             die("Neuspesno, Greska prilikom povezivanja sa bazom" . $mysqli->error);
           }

           $email="";
           $password="";

           if (isset($_POST['submit2'])) {
             if ( (!$_POST['email2']) || (!$_POST['password3'])) 
             {
               echo "Morate da unesete Email i password!!!";
             }
             else{
              $upit2 = "SELECT password FROM profil WHERE password == " . $_POST['password3'];
              $rez2=$mysqli->query($upit2);
              $upit3 = "SELECT email FROM profil WHERE email == " . $_POST['email2'];
              $rez3=$mysqli->query($rez3);
              if ($rez2 != null && $rez3 != null) {
                 echo "<a href='admin.php'></a>";
              }
              else
              {
                echo "GRESKA PRI LOGOVANJU ! ";
              }
             }
           }






           ?>
           <div class="form-group">
            <label for="email">email adresa</label>
            <input type="email" name="email2" class="form-control" id="email" placeholder="Unesite e-mail adresu">
          </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name="password3" class="form-control" id="password" placeholder="Unesite Password">
          </div>
          <button type="submit" name="submit2" class="btn btn-success btn-lg btn-block">Uloguj se <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
        </div> <!-- kraj desne strane -->
      </div> <!-- kraj podele prikaza -->
    </form>





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