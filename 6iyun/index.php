<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<style>

	table,  tr, td, th{
		border: 1px solid black;
	}



		body{
			background: lightyellow;
		}
	</style>
<body>
<!-- 
	<table>
		<form action="form.php" method="post">
			<tr>
				<td>adiniz : </td><td><input type="text" name="adiniz"></td>
			</tr>
			<tr>
				<td>soyadiniz : </td><td><input type="text" name="soyadiniz"></td>
			</tr>
			<tr>
				<td>yasiniz : </td><td><input type="number" name="yasiniz"></td>
			</tr>
			<tr>
				<td>yasadiginiz seher : </td>
				<td><select name="seher">
					<option value="baki">baki</option>
					<option value="sumqayit">sumqayit</option>
					<option value="gence">gence</option>
					<option value="sabran">sabran</option>
				</select></td>
			</tr>
			<tr><td>sifreniz : </td><td><input type="password" name="sifreniz"></td></tr>
			<tr><td></td><td><input type="submit"></td></tr>
		</form>
	</table>
 -->



<?php


$arr3= [
		"ad"=>["a", "b", "sureyya"],
		"soyad"=>["aaaa", "bbbbbb", "sadiqova"],
		"yas"=>[19, 20, 23],
		];


	// $arr4=[
	// 		"bir"=>["bla", "blaa", 23],
	// 		"iki"=>["blabla", "blablaaa", 23],
	// 		"uc"=>["sureyya", "sadiqova", 23],
	// 	];

		echo "<table cellpadding=5><th>ad</th><th>soyad</th><th>yas</th>";


		
	// 		foreach ($arr4 as $key => $value) {
	// 			echo "<tr>";
	// 				for ($i=0; $i<count($arr4[$key]); $i++) { 
	// 					echo "<td>".$value[$i]."</td>";
	// 				};
	// 			echo "</tr>";
	// 		}





		for ($i=0; $i <count($arr3["ad"]) ; $i++) { 
			echo "<tr>
					<td>".$arr3["ad"][$i]."</td>
					<td>".$arr3["soyad"][$i]."</td>
					<td>".$arr3["yas"][$i]."</td>
				</tr>";
		};



		echo "</table>";

?>







</body>
</html>