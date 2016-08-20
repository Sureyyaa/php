<?php
	
	include 'db.php';


	$id = $_GET["id"];

	$sekil_adi = "SELECT * FROM  gallery WHERE  id='$id'";

	$sql = "DELETE FROM gallery WHERE id='$id'";

	$query = mysqli_query($con, $sekil_adi);

	$query2 = mysqli_query($con, $sql);

	$row=mysqli_fetch_assoc($query);
  	
	unlink("images/".$row['img_name']);
	
	header('Location: index.php');



?>
