<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "validate";


    // $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
    // set the PDO error mode to exception
    // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php	
	
    // $dbname = "validate";

	// $con=mysqli_connect("localhost","root","") or die("cannot connect!");
	// mysqli_select_db($con, "hackathon") or die("db not found");
?>


<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "hackathon");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security

    // attempt insert query execution

    // close connection
