<?php

session_start();

if(isset($_SESSION["duzgunUser"])){
	echo "xos geldin    ".$_SESSION["duzgunUser"];
	echo "<hr>";
	echo "<a href='../index.php'>exit</a>";
}else{
	echo "bura gire bilmezsen";
}
	
	// echo "<hr>";
	// echo "<a href='../index.php'>cix  cole</a>";






?>