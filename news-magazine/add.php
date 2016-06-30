<?php

	include ("db.php");

	$title = $_POST["title"];
	$text = $_POST["text"];
	// $box = $_POST["icaze"]==1 ?  1  :  2;
	$file = $_FILES["file"];

	$file_name=$file["name"];
	$file_tmp=$file["tmp_name"];

	$newName = "sekil".rand().".".substr($file_name, -3);

	$yukle= move_uploaded_file($file_tmp, "img/$newName");

	// if($yukle){
	// 	return true;
	// }else{
	// 	echo "yuklenmedi";
	// }

	$sql="INSERT INTO xeberler (news_title, news_img, news_text) VALUES ('$title', '$newName', '$text')";
	$query=mysqli_query($con, $sql);

	header('Location: table.php');

	// if( $query){
	// 	echo "elave edildi";
	// }
	// else{
	// 	echo "problem yasandi";
	// }

?>