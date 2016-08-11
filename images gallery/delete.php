<?php
	
	include 'db.php';


	$id = $_GET["id"];

	$sql = "DELETE FROM gallery WHERE id='$id'";

	$query = mysqli_query($con, $sql);

	header('Location: index.php');



?>

