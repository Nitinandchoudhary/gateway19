<?php 
require_once ('config.php');
if(isset($_POST['log']))
{
	
	$emailid = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['pass']);
	
	// $query=mysql_query("select * from artist where emailid='$uname' and password='$pwd'");

	$sql = "select * from specialperson where email='$emailid' and password='$password'";
    
    $result = mysqli_query($link, $sql) or die(mysqli_error());

if($result){
	if($r=mysqli_fetch_array($result))
	{
		session_start();

         $_SESSION['pid'] = $r['pid'];
         $_SESSION['specialperson'] = true;
	
	header("location:index.php");
		
	}

}
	
 else
 {
 	$sql = "select * from teacher where email='$emailid' and password='$password'";
 	$result = mysqli_query($link, $sql) or die(mysqli_error());
if($result)
{
if($r=mysqli_fetch_array($result))
	{
		session_start();

         $_SESSION['tid'] = $r['tid'];
         $_SESSION['teacher'] = true;
	
	header("location:index.php");
		
}	
}

 	else
	{
		?>
					<script type="text/javascript">
	alert('Wrong credentials');
	window.location='login.php';
	</script>
	<?php
	}
 }
	

}
?>
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
		<form method="post">
		<h2 style="margin-top: 100px;">Login</h2><br/><br/>
		<span style="margin-right: 8px;">UserName : </span><input type="text" id="uname" name="email" required><br/><br/>
		<span>Password : </span><input name="pass" type="password" id="pass" required style="margin-left: 13px;"><br/><br/>
		<button onclick="login()" name="log" class="btn btn-primary">Submit</button>
		<button class="btn btn-dark" style="margin-left: 30px;" onclick="reset()">Reset</button>
		<div style="margin-top: 30px;" id="result"></div>
	</form>
		<script>
			// function login(){
			// 	let uname=document.getElementById('uname').value;
			// 	let pass=document.getElementById('pass').value;
			// 	document.getElementById('result').innerHTML+="<b>Username is </b>"+uname+"<br>";
			// 	document.getElementById('result').innerHTML+="<b>Password is </b>"+pass+"<br>";
			// }
			// function reset(){
			// 	document.getElementById('uname').value="";
			// 	document.getElementById('pass').value="";
			// }
		</script>
	</center>
</body>
</html>
