<?php

$username=$_POST["username"];
$password=$_POST["password"];


if(isset($username) and isset($password)){

	// echo "salammmm";

	if(empty($username) or empty($password)){

		echo "melumatlari doldur lannnnn";

	}else{ 
		// echo "melumatlar yoxlanacaq";

			if($username=="admin" and $password=="admin"){

				session_start();
				$_SESSION["duzgunUser"]=$username;
				$_SESSION["duzgunPass"]=$password;
				// echo "sisteme daxil oldunuz";
				header("Location:index.php");

			}else{
				// echo "bele bir user yoxdur";
				header("Location:../index.php");
			}
		}
}else{

	echo "sagolll" ;
}




?>