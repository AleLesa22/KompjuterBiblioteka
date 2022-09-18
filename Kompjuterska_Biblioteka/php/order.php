<?php 
	if (empty($_POST['kolicina1'])) {
		$kolicina1=0;
	}
	else
	{
		$kolicina1 = $_POST['kolicina1'];
	}
	if (empty($_POST['kolicina2'])) {
		$kolicina2=0;
	}
	else
	{
		$kolicina2 = $_POST['kolicina2'];
	}
	if (empty($_POST['kolicina3'])) {
		$kolicina3=0;
	}
	else
	{
		$kolicina3 = $_POST['kolicina3'];
	}
	if (empty($_POST['adresa'])) {
		$adresa="";
	}
	else
	{
		$adresa = $_POST['adresa'];
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Racun!</title>
 </head>
 <body>
 <div>
 	<p>Prikaz racuna: </p>
 	<?php 

 	$ukupno = $kolicina1 + $kolicina2 + $kolicina3;
 	if ($ukupno!= 0 || (!empty($adresa))) {
 		echo "<p>Proizvod 1: " . $kolicina1 . "<br>";
 		echo "Proizvod 2: " . $kolicina2 . "<br>";
 		echo "Proizvod 3: " . $kolicina3 . "<br>";
 		echo "Ukupno: " . $ukupno . "<br>";
 		echo "Adresa: " .$adresa."<br>";
 		echo "</p>";
 	}
 	else
 	{
 		echo "Greska. Nisu uneti svi potrebni podaci";
 	}

 	 ?>
 </div>
 </body>
 </html>