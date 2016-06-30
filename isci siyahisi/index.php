<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table, tr, td, th{
			border: 1px solid black;
		}
		.red{
			color:red;
		}
	</style>
</head>
<body>
<table cellpadding="10px"; cellspacing="3px">
	<tr>
		<th>Ad</th>
		<th>Soyad</th>
		<th>Status</th>
		<th>Dogum tarixi</th>
	</tr>
	
<?php

class Workers {
	public $name;
	public $surname;
	public $position;
	public $birthDate;
	
	public function addWorker($ad, $soyad, $status, $tarix){
			
			if(date("d-m")==date("d-m",strtotime($tarix))){
				echo "<tr class='red'>";
				echo "<td>".$this->name = $ad."</td>";
				echo "<td>".$this->surname = $soyad."</td>";
				echo "<td>".$this->position = $status."</td>";
				echo "<td>".$this->birthDate = $tarix."</td>";
				echo "</tr>";
				}else{
					echo "<tr>";
					echo "<td>".$this->name = $ad."</td>";
					echo "<td>".$this->surname = $soyad."</td>";
					echo "<td>".$this->position = $status."</td>";
					echo "<td>".$this->birthDate = $tarix."</td>";
					echo "</tr>";
				}


			
		}
	}


	$isci = new Workers;

	echo $isci->addWorker("sureyya", "sadiqova", "ne is yaptigi belli deyil", "13-06-1993");
	echo $isci->addWorker("adi", "soyadi", "isci", "25-03-1992");
	echo $isci->addWorker("sureyya","sadiqova","isci","30-06-2014");
?>






</table>
</body>
</html>