<?php
include ("db.php");

	$id = $_GET["id"];

	$title = $_POST["title"];
	$text = $_POST["text"];
	// $box = $_POST["icaze"]==1 ?  1  :  2;
	$file = $_FILES["file"];

	// $file2 = $_FILES["file2"];

	$file_name=$file["name"];
	$file_tmp=$file["tmp_name"];

	$newName = "sekil".rand().".".substr($file_name, -3);
	
	$yukle= move_uploaded_file($file_tmp, "img/$newName");	

	if($yukle==""){

		$sql = "UPDATE xeberler SET news_title='$title', news_text='$text' WHERE id='$id'";

	} else {

		$sql = "UPDATE xeberler SET news_title='$title', news_img='$newName' , news_text='$text' WHERE id='$id'";
	}

	$query = mysqli_query($con, $sql);

	header('Location: table.php');

?>