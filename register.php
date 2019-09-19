<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
		input{
			border: 1px solid black;
			border-radius: 5px;
		}
		label{
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<div>
		<?php
			require_once ('header.php');
			require_once ('config.php');

			if (isset($_POST['create'])){

				$name_user = mysqli_real_escape_string($link, $_POST['name_user']);
    			$uname = mysqli_real_escape_string($link, $_POST['uname']);
    			$age = mysqli_real_escape_string($link, $_POST['age']);
    			$email = mysqli_real_escape_string($link, $_POST['email']);
    			$pass = mysqli_real_escape_string($link, $_POST['pass']);
			

			// Escape user inputs for security

    // attempt insert query execution
    $sql = "INSERT INTO specialperson(pname, username, age , email, password) VALUES ('$name_user','$uname','$age','$email','$pass');";
    $result = mysqli_query($link, $sql) or die(mysqli_error());
    if($result){
        ?>
					<script type="text/javascript">
	alert('successfully registered');
	window.location='login.php';
	</script>
	<?php
    } 
    else{
        	?>
					<script type="text/javascript">
	alert('There was a problem, please try again');
	window.location='register.php';
	</script>
	<?php
    }
 }
		?>	
		
	<center>
	    <form method="POST" action="register.php">
			<div style="margin-top: 80px;">
					<h3>Registration Form</h3>
					<p>Please fill all the fields</p>
					<hr class="col-mb-3">
					<label for="name" style="margin-left: 15px;"><b>Name </b></label>
					<input type="text" name="name_user" id="name_user" required><br><br>

					<label for="uname" style="margin-left: -7px;"><b>UserName </b></label>
					<input type="text" name="uname" id="uname" required><br><br>

					<label for="age" style="margin-left: 30px;"><b>Age </b></label>
					<input type="number" name="age" id="age" required><br><br>

					<label for="email" style="margin-left: -30px;"><b>Email Address </b></label>
					<input type="email" id="email" name="email" required><br><br>

					<label for="pass"><b>Password  </b></label>
					<input type="password" id="pass" name="pass" required><br><br>

					<button class="btn btn-primary" type="submit" name="create">Register</button>
					<button class="btn btn-dark" style="margin-left: 30px;" onclick="reset()">Reset</button>
			</div>
		</form>
	</center>
</div>
	<script>
		function reset(){
				document.getElementById('name').value="";
				document.getElementById('uname').value="";
				document.getElementById('age').value="";
				document.getElementById('email').value="";
				document.getElementById('pass').value="";
			}
	</script>
</body>
</html>