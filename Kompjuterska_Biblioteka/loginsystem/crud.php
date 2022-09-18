<html>
<head>
 <title> Podaci o studentima </title>
 <style type="text/css">
   .auto-style1 {
    border: 2px solid #0000FF;
    background-color: #C0C0C0;
  }
  <style>
  .button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    cursor: pointer;
  }

  .button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
  }

  .button1:hover {
    background-color: #4CAF50;
    color: white;
  }

  .button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
  }

  .button2:hover {
    background-color: #008CBA;
    color: white;
  }

  .button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
  }

  .button3:hover {
    background-color: #f44336;
    color: white;
  }

  .button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
  }

  .button4:hover {background-color: #e7e7e7;}

  .button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
  }

  .button5:hover {
    background-color: #555555;
    color: white;
  }
</style>
</head>

<body style="background-color:#F0E68C">
 <h2 style="font:arial color:blue"> 
  Unos azuriranje podataka o studentima.
</h2>
<fieldset>
  <legend>Korisnici:</legend>
  <form method="post" action="crud.php">

    <!-- PHP --> 
    <!-- P R E T R A G A   P O   IMENU! -->
    <?php 
    $mysqli = new mysqli("localhost","root","","user_db");
    if ($mysqli->error)
    {
      die("Greska!" . $mysqli->error);
    }

    $id="";
    $name="";
    $email="";
    $user_type="";
    $password="";

    if (isset($_POST['trazi'])) 
    {
      $upit = "SELECT * FROM user_form WHERE name LIKE '" . $_POST['name'] . "'"; 
      $rez = $mysqli->query($upit);

      if (!$rez) {
        print("Ne moze se izvrsiti upit!!! <br>");
        die($mysqli->error);
      }
      if(!($red = $rez->fetch_assoc()))
      {
       print("Nema trazenog korisnika po imenu!<br>");
     }
     else
     {
      $id= $red['id'];
      $name= $red['name'];
      $email= $red['email'];
      $user_type= $red['user_type'];
      $password= $red['password'];

    }
  }
      // PRETRAGA PO ID-U
  elseif (isset($_POST['trazi2'])) 
  {
    $upit2 = "SELECT * FROM user_form WHERE id LIKE '" . $_POST['id'] . "'"; 
    $rez = $mysqli->query($upit2);

    if (!$rez) {
      print("Ne moze se izvrsiti upit!!! <br>");
      die($mysqli->error);
    }
    if(!($red = $rez->fetch_assoc()))
    {
     print("Nema trazenog korisnika po id-u!<br>");
   }
   else
   {
    $id= $red['id'];
    $name= $red['name'];
    $email= $red['email'];
    $user_type= $red['user_type'];
    $password= $red['password'];
  }
}
      // PRETRAGA PO SELEKTOVANIM KRITERIJUMIMA
elseif(isset($_POST['pretraga']))
{
 foreach($_POST['polje'] as $select) {}
   $upit3 = "SELECT * FROM user_form WHERE $select LIKE '" . $_POST['polje_p'] . "'";

 if(!($rez = $mysqli->query($upit3)))
 {
   print("Ne moze se izvrsiti upit! <br>");
   die($mysqli->error);
 }
 if(!($red = $rez->fetch_assoc()))
 {
   print("Nema trazenog korisnika po selektovanom kriterujumu!<br>");
   die($mysqli->error);
 }
 else
    //keriranje tabele
 {
  if ($rez->num_rows>1) 
  {
    echo "<table border='3px' <tr><th>id: </th><th>name: </th><th>email: </th><th>user_type: </th></tr>";
    while ($row = $rez->fetch_assoc()) {
      echo "<tr><td>" . 
      $row["id"] . "</td>" . "<td>" .
      $row["name"] . "</td>" . "<td>" .
      $row["email"] . "</td>" . "<td>" .
      $row["user_type"] . "</td>" . "</tr>";
    }
    echo "</table><br><br>";
  }
  else
  {
    echo "Imamo samo jednog korisnika";
  }

  $id= $red['id'];
  $name= $red['name'];
  $email= $red['email'];
  $user_type= $red['user_type'];
  $password= $red['password'];

}
}
// D O D A V A NJ E   N O V O G    K O R I S N I K A
elseif (isset($_POST['dodaj'])) 
{
  if ((!$_POST['id']) || (!$_POST['name']) || (!$_POST['email']) || (!$_POST['password']) || (!$_POST['user_type'])) 
  {
    echo "Mora biti unet id,name,email,password,user_type";
  }
  else
  {
    $upitdod = "INSERT INTO user_form(id,name,email,password,user_type) VALUES ('" . $_POST['id'] . "','" . $_POST['name'] . "','" . $_POST['email'] . "','". $_POST['password'] . "','" . $_POST['user_type'] . "')";
    $mysqli->query($upitdod);
    // if(!$rezd=$mysqli->query($upitdod))
    // {
    //   print("Ne moze se izvrsiti upit! <br>");
    //   die($mysqli->error);
    // }
    $message = "Slog je dodat!";
  }
}

// A Z U R I R A NJ E   P O S T O J E C E G   S L O G A 
elseif (isset($_POST['azuriraj'])) {
  if ((!$_POST['id']) || (!$_POST['name']) || (!$_POST['email']) || (!$_POST['password']) || (!$_POST['user_type'])) {
    echo "Mora biti unet id,name,email,password,user_type";
  }
  else
  {
   // $upit4="update user_type SET id = '" . $_POST['id'] . "',
   // name = '" . $_POST['name'] . "',
   // email = '" . $_POST['email'] . "',
   // password = '" . $_POST['password'] . "',
   // user_type = '" . $_POST['user_type'] . "'
   // WHERE id = '" . $_POST['id'] . "'";
    $upit4="UPDATE user_form SET name= '" . $_POST['name'] . "', email = '" . $_POST['email'] . "', password = '" . $_POST['password'] . "' , user_type = '" . $_POST['user_type'] . "' WHERE id = '" . $_POST['id'] . "'";
    $mysqli->query($upit4);


  //  if(!($rez = $mysqli->query($upit4)))
  //  {
  //   print("Ne moze se izvrsiti azuriranje u tabeli! <br>");
  //   die($mysqli->error);
  // }
  $message = "SLOG JE AZURIRAN";
}

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$user_type=$_POST['user_type'];
}


// B R I S A NJ E   P O S T O J E C E G   S L O G A 
elseif (isset($_POST['obrisi'])) {
  $upitbris = "DELETE FROM user_form WHERE id = '" .$_POST['id'] . "'";
  $rezb=$mysqli->query($upitbris);
  if(!$rezb)
  {
   print("Ne moze se izvrsiti brisanje!<br>");
   die($mysqli->error);
 }
 printf("Obrisano redova: %d\n", $mysqli->affected_rows);
 $id="";
 $name="";
 $email="";
 $password="";
 if($mysqli->affected_rows!=0)
  $message="Slog je usupesno obrisan";
}

$id= TRIM($id);
$name=TRIM($name);
$email=TRIM($email);
$password=TRIM($password);


?>
<!--  PHP -->

<table class="auto-style1">
 <col span="1" align="left">
 <tr>
  <td> id:</td>
  <td>
   <input name="id" value="<?php echo "$id" ?>" type="text" size="7" style="width: 180px; border-radius: 4px; height: 30px;" align="left"></td>
 </tr>
 <tr>
   <td>email: </td>
   <td>
    <input name="email" value="<?php echo "$email" ?>" type="text" size="7" style="width: 180px; border-radius: 4px; height: 30px;" align="left"></td>
    <td>name</td>
    <td>
     <input name="name" type="text" value="<?php echo "$name" ?>" size="7" style="width: 141px; border-radius: 4px; height: 30px;" align="left"></td>
   </tr>
   <tr>
     <td>password</td>
     <td><input type="text" value="<?php echo "$password" ?>" name="password"></td>
   </tr>
   <tr>
     <td>user_type:</td>
     <td>
      <?php 
      if($user_type=="User"){?>   
        <label> Admin
         <input name="user_type" value="<?php echo "$user_type" ?>" type="radio" value="Admin">
         User
         <input name="user_type" type="radio" value="User" checked="checked">
       </label>
       <?php
     } else{ ?>
      <label> Admin
       <input name="user_type" type="radio" value="Admin" checked="checked">
       User
       <input name="user_type" type="radio" value="User">
     </label>
   <?php }?>
 </td>
</tr>
</table>
<br>
<input class="button button3" type="submit" name="dodaj" value="dodaj" style="background-color:blue color:yellow; font-weight:bold; width: 100px; height: 40px;">
<input class="button button3" type="submit" name="azuriraj" value="azuriraj" style="background-color:blue color:yellow; font-weight:bold; width: 140px; height: 40px;">
<input class="button button3" type="submit" name="obrisi" value="obrisi" style="background-color:blue color:yellow; font-weight:bold; width: 140px; height: 40px;">
<br><br>
<input type="submit" name="trazi" value="trazi po imenu" style="background-color:blue color:yellow; font-weight:bold; width: 170px; height: 40px;">
<input type="submit" name="trazi2" value="trazi po id-u" style="background-color:blue color:yellow; font-weight:bold; width: 150px; height: 40px;">
<input type="reset" name="reset1" value="reset" style="width: 180px; height: 40px;">
<br><br>
<select name="polje[]" style="width: 132px; height: 31px">
  <option value="id">id</option>
  <option value="name">name</option>
  <option value="user_type">user_type</option>
  <option value="email">email</option>
</select>
<input name="polje_p" type="text" size="7"  style="width: 141px; border-radius: 4px; height: 30px;" align="left">
<input type="submit" name="pretraga" value="pretraga" style="background-color:blue color:yellow; font-weight:bold; width: 100px; height: 40px;">
</form>
</fieldset>
</body>
</html>  