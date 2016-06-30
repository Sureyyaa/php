<?php

$username=$_POST["username"];
$password=$_POST["password"];



if($username=="admin" and $password=="admin"){

	session_start();
	$_SESSION["duzgunUser"]=$username;
	$_SESSION["duzgunPass"]=$password;

	header("Location:admin.php");

}else{

	header("Location:index.php");
	}





?>