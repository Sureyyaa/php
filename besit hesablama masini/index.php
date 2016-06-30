<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:#ccc;
		}
	</style>
</head>
<body>



<?php

@$reqem1=$_POST["num01"];
@$reqem2=$_POST["num02"];

@$isare=$_POST["isare"];

if($isare=="topla"){
	$hesabla = $reqem1 + $reqem2;
}

if($isare=="cix"){
	$hesabla =$reqem1 - $reqem2;
}

if($isare=="vur"){
	$hesabla = $reqem1 * $reqem2;
}

if($isare=="bol"){
	$hesabla = $reqem1 / $reqem2;
}

?>

<form action="" method="post">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type="radio" name="isare" value="topla" >
	<span>-</span><input type="radio" name="isare" value="cix">
	<span>*</span><input type="radio" name="isare" value="vur">
	<span>/</span><input type="radio" name="isare" value="bol">
	<input type="submit" value="Hesabla">
	<p>Netice:
		<?php 
			echo @$hesabla;
		?>
	</p>
</form>




</body>
</html>

