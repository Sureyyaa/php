<!DOCTYPE html>
<html>

<?php

session_start();

if(isset($_SESSION["duzgunUser"])){

}else{
	header("Location:index.php");
}



?>
<head>
	<title></title>
	<style>
		#login2{
			font-size: 19px;
			color: white;
			background: #0CB68B;
			height: 400px;
			width: 300px;
			margin: 0 auto;
			margin-top: 30px;
			padding: 20px;
			box-shadow: 0px 5px 10px 5px #ccc;
		}
		#buton{
			font-size: 25px;
			height: 35px;
			background: #F9F6F3;
			cursor: pointer;
			width: 100%;
			text-align: center;
			padding: 5px;
		}
		#buton:hover{
    		box-shadow: inset 0 2px 5px #636363;
		}
		a{
			text-decoration: none;
			color: #0CB68B;
		}
		</style>
</head>
<body>
	
	<div id="login2">
		<h1>You are logged in!</h1>
		<br>

		<p>This page is protected. You can't visit this page if you're not logged in.</p>
		<br>
					
		<a href="index.php"><div  id="buton"  >Log out !</div></a>
	
	</div>

	<script type="text/javascript" src="jquery-1.12.4.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>