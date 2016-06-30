<?php
session_start();
unset($_SESSION["duzgunUser"]);
unset($_SESSION["duzgunPass"]);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		#login{
			font-size: 20px;
			color: white;
			background: #0CB68B;
			height: 400px;
			width: 300px;
			margin: 0 auto;
			margin-top: 30px;
			padding: 20px;
			box-shadow: 0px 5px 10px 5px #ccc;
		}
		input{
			display: inline-block;
			height: 20px;
			width: 100%;
		}
		#buton{
			font-size: 25px;
			color: #0CB68B;
			border-style: none;
			height: 40px;
			background: #F9F6F3;
			cursor: pointer;
		}
		#buton:hover{
    		box-shadow: inset 0 2px 5px #636363;
		}
		#login div{
			background: #F24D4B;
			display: none;
		}
		</style>
</head>
<body>
	
	<div id="login">
		<h1>Login</h1>
		<div id="bos">Please fill in a username and password</div>
		<div id="sehv">Username or Password incorrect</div>
		<form action="yoxla.php" method="post">
			Username:
			<input id="in1" type="text" name="username">
			<br><br>
			password:
			<input id="in2" type="password" name="password">
			<br><br>
			<input id="buton" type="submit" value="Login !">
		</form>
	</div>
	<script type="text/javascript" src="jquery-1.12.4.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>