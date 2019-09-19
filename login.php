<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<style>
		h2{
			margin-top: 130px;
		}
		span{
			font-family: monotype-corvisa;
			font-weight: bold;
		}
		input{
			border: 1px solid black;
			border-radius: 5px;
		}
		button{
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div>
		<?php
			require_once ('header.php');
		?>	.
	</div>

	<center>
		<h2 style="margin-top: 100px;">Login</h2><br/><br/>
		<span style="margin-right: 8px;">UserName : </span><input type="text" id="uname" required><br/><br/>
		<span>Password : </span><input type="password" id="pass" required style="margin-left: 13px;"><br/><br/>
		<button onclick="login()" class="btn btn-primary">Submit</button>
		<button class="btn btn-dark" style="margin-left: 30px;" onclick="reset()">Reset</button>
		<div style="margin-top: 30px;" id="result"></div>
		<script>
			function login(){
				let uname=document.getElementById('uname').value;
				let pass=document.getElementById('pass').value;
				document.getElementById('result').innerHTML+="<b>Username is </b>"+uname+"<br>";
				document.getElementById('result').innerHTML+="<b>Password is </b>"+pass+"<br>";
			}
			function reset(){
				document.getElementById('uname').value="";
				document.getElementById('pass').value="";
			}
		</script>
	</center>
</body>
</html>
