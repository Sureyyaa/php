<?php

	include 'db.php';




	

	$file = $_FILES["name"];



	$file_name = $file["name"];
	$file_tmp = $file["tmp_name"];



	$newName = "sekil".rand().".".substr($file_name, -3);

	$yukle = move_uploaded_file($file_tmp, "images/$newName");



	// if($yukle){
	// 	echo 'yuklendi';

	// }
	// else{
	// 	echo 'yuklenmediiiiiiiiiii';
	// }

	$sql = "INSERT INTO gallery (img_name) VALUES ('$newName')";

	$query = mysqli_query($con, $sql);

	header('Location: index.php');

?>