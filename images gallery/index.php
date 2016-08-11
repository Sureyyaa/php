<?php

  include 'db.php';

  $sql = "SELECT * FROM gallery ORDER BY id DESC";
  
  $query = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Images Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
</head>
<body>
	
		<div class="gallery">
			<div class="main">
				<h1 style="color:#CA3F4D">* images gallery *</h1>
				<br>
				<form action="add.php" method="post" enctype="multipart/form-data">
					<div>
						<input type="file" class="btn" name="name">
					</div>
					<div>
						<input type="submit" class="btn" value="Add new image">
					</div>
				</form>
			</div>
			<div class="content">
				<?php while($row=mysqli_fetch_assoc($query)): ?>
					<div class="imgs">
						<?php echo "<a style='display: none' href='delete.php?id=".$row['id']."'>
							<i title='delete' class='fa fa-trash' aria-hidden='true'></i>
						</a>" ?>
						<img src="images/<?php echo $row['img_name']; ?>">
					</div>
				<?php  endwhile; ?>
			</div>
		</div>

		<div class="image">
		<button class="btn btn-danger">X</button>			
		</div>


<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>