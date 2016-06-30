<?php

include ("db.php");

$axtaris = $_GET["axtaris"];


if($axtaris){
	$sql="SELECT * FROM xeberler WHERE news_title LIKE '%$axtaris%' ORDER BY id DESC";

	$query=mysqli_query($con, $sql);

	while($row3 = mysqli_fetch_assoc($query)){
?>


<div style="border:2px solid black; padding:10px; width:500px">
	<div style="border:1px solid pink; padding:10px;">   <?php   echo $row3["news_title"]  ?>    </div>
	<div style="border:1px solid pink; padding:10px;" >   <?php   echo $row3["news_text"]  ?>    </div>
</div>
<br>


<?php   } ?>
<?php

} else {
	echo "axtarmaq istediyiniz melumati daxil edin";
}


?>