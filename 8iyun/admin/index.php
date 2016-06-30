<?php




session_start();

if(isset($_SESSION["duzgunUser"])){
	echo "xos geldin    ".$_SESSION["duzgunUser"]." Bu admin sehifesidir..";
	echo "<hr>";
	echo "<a href='admin.php'>diger sehifeye kec</a>";
	echo "<hr>";
	echo "<a href='../index.php'>exit</a>";
}else{
	echo "bura gire bilmezsen";
}


	// echo "Bu admin sehifesidir..";
	// echo "<br>";
	// echo "<a href='admin.php'>diger sehifeye kec</a>";
	// echo "<br>";
	// echo "<a href='../index.php'>cix  cole</a>";





?>