
<?php
 
	include ("db.php");

	$id = @$_GET['id'];

	$sql = mysqli_query($con, "SELECT * FROM xeberler WHERE id = '$id'");

	 while($row=mysqli_fetch_assoc($sql)){
		$title=$row["news_title"];
		$img=$row["news_img"];
		$text=$row["news_text"];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input, textarea{
			display: block;
			margin: 10px;
		}
	</style>

</head>
<body>

	<form action="edit2.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

		<input type="text" name="title" placeholder="xeber basligini daxil edin" value='<?php echo $title  ?>'>
		<input type="file" name="file" value='<?php echo $img  ?>'>
		<input type="hidden" name="file2" value='<?php echo $img  ?>'>
		<!-- <input type="checkbox" name="icaze" value="1"> -->
		<input name="text"  placeholder="xeberin metnini daxil edin" value='<?php echo $text  ?>'>
		<input type="submit" value="elave et">
	</form>

</body>
</html>