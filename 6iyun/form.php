<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background:#D5FFFF;
		}
	</style>
</head>
<body>



<form>

	<select name="olkeler">
		<option value="azerbaycan"> azerbaycan</option>
		<option value="turkiye">turkiye</option>
		<option value="pakistan">pakistan</option>
	</select>

	<input type="submit" value="gonder">

</form>



	<?php

		// $ad=$_POST["adiniz"];
		// $soyad=$_POST["soyadiniz"];
		// $yas=$_POST["yasiniz"];
		// $seher=$_POST["seher"];
		// $sifre=$_POST["sifreniz"];

		// echo "adiniz:  $ad <br>  soyadiniz:  $soyad <br> yasiniz:  $yas <br> yasadiginiz seher:  $seher <br> sifreniz:  $sifre "


	@$olke=$_GET["olkeler"];

	if($olke=="azerbaycan"){

		echo "baki, seki, sumqayit";

	} else if ($olke=="turkiye"){

		echo "istanbul, ankara, bursa";

	} else if($olke=="pakistan"){

		echo "buranin seherlerini tanimiram";
	}
	else{

		echo "sen nerdesin aqa";
	}


	?>

</body>
</html>