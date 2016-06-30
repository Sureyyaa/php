<?php

	include ("db.php");

	$id=$_GET["id"];

	$sql = "DELETE FROM `xeberler` WHERE id='$id'";

	$query = mysqli_query($con, $sql);

	header('Location: table.php');

?>