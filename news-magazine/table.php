<?php

	include ("db.php");

	$query = mysqli_query($con, "SELECT * FROM xeberler");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		table, tr, td {
			border: 1px solid pink;
			padding: 7px;

		}
	</style>
</head>
<body>


<table>
	
<tr>
	<td>id</td>
	<td>xeberin basligi</td>
	<td>xeberin metni</td>
	<td> fayl </td>
	<td>xeberin daxil edilme tarixi</td>
</tr>

<?php while($row=mysqli_fetch_assoc($query)): ?>

<tr>
	<td>  <?php echo $row['id']  ?>  </td>
	<td>  <?php echo $row['news_title']  ?>  </td>
	<td>  <?php echo $row['news_text']  ?>  </td>
	<td>  <?php echo $row['news_img']  ?>  </td>
	<td>  <?php echo $row['news_date']  ?>  </td>
	<td>  <?php echo "<a href='edit.php?id=".$row['id']."'>Edit</a>"  ?>  </td>
	<td>  <?php echo "<a href='delete.php?id=".$row['id']."'>Delete</a>"  ?>  </td>
</tr>

<?php  endwhile; ?>

</table>
<br>
<a href="news_insert.php">Yeni xeber elave edin</a>
<br><br>
<a href="index.php">Sayta Get</a>

</body>
</html>