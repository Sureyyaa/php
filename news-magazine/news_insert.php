
<?php
 
	include ("db.php");

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

	<form action="add.php" method="post" enctype="multipart/form-data">

		<input type="text" name="title" placeholder="xeber basligini daxil edin">
		<input type="file" name="file">
		<!-- <input type="checkbox" name="icaze" value="1"> -->
		<textarea name="text" rows="8" placeholder="xeberin metnini daxil edin"></textarea>
		<input type="submit" value="elave et">

	</form>

</body>
</html>