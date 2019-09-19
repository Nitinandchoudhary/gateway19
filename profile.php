<?php
session_start();
?>
<html>
<head>
	<title>Profile</title>

<style type="text/css">
	#profile-img{
		height: 130px;
		width: 130px;
		border-radius: 50%;
	}
</style>
</head>
<body>



<div  class="wrap" style="width: 90%; margin-top: 10%">

<!-- style="background-image: url(images/123.jpg); -->
<?php 
require_once ('config.php');
include('header.php');
$pid1 = $_SESSION['pid'];
// echo "$pid1";
$sql = "select * from specialperson where pid='$pid1'";
    
    $result = mysqli_query($link, $sql) or die(mysqli_error());

    // $sql1 = "select * from survey_mental where pid='$pid'";
    
    // $result1 = mysqli_query($link, $sql) or die(mysqli_error());
    
  if($r=mysqli_fetch_array($result))
  {
      
         $pname = $r['pname'];
         $uname = $r['username'];
         $email = $r['email'];
         $age = $r['age']; 

  ?>

<div class="row">
<div class="column" style="width:50%" align="center">
   
   	<br>
   	
   		<img id="profile-img" src="images/ii.png" >
<p style="font-size:22px"><?php echo $pname; ?></p>  


<div class="card" style="margin: 10px">
      <div class="container">
        <h2 style="font-weight: 600;font-size: 15px; text-transform: uppercase;" align="center">About me</h2>
        <hr>
        <p style="font-size: 16px" >Sometimes I like to work on my field, but because of lack of decision making and confidence I'm not able to..</p>
      </div>
    </div>

<div>
  <?php 

  $sql1 = "select * from survey_mental where pid='$pid1'";
    
    $result1 = mysqli_query($link, $sql1) or die(mysqli_error());
    if($r1=mysqli_fetch_array($result1))
    {

    }
    else
    {
      echo '<h2>Its mandatory to take the <a href="survey.php">Survey</a></h2>';
    }
    ?>
</div>

</div>
	

	<div class="column" style="width:50%">
    <div class="card">
      <div class="container" align="center">
        <h2 style="font-weight: 600;font-size: 15px; text-transform: uppercase;" align="center">Interest</h2>
        <hr>
        <div class="row" align="center">
        	<div class="column" style="width: 50%" align="center">
        	<p style="font-size: 13px" >120 Points</p>
         	<a href="userordersview.php"><p style="margin-top: -5px;font-size: 18px;">cycling</p></a>
     		</div>
     		<div class="column" style="width: 50%" align="center">
        	<p style="font-size: 13px" >90 Points</p>
         	<a href="userordersview.php"><p style="margin-top: -5px;font-size: 18px;">Paintings</p></a>
     		</div>
     	</div>
      </div>
    </div>
    
    
    <div class="card" style="margin-top: 11px">
      <div class="container">
      <h2 style="font-weight: 600;font-size: 15px; text-transform: uppercase;" align="center">Current mentors</h2>
        <hr>
        <a href="userordersview.php"><p align="center" style="font-size: 13px;">Sham</p></a>
        <a href="userordersview.php"><p align="center" style="font-size: 13px;">Vaibhav</p></a>
      </div>
    </div>
  
    
    <div class="card" style="margin-top: 11px">
      <div class="container">
      <h2 style="font-weight: 600;font-size: 15px; text-transform: uppercase;" align="center">Personal Information</h2>
        <hr>
        
        <p align="center" style="font-size: 13px;">Email:<?php echo $email ?></p>
        <p align="center" style="font-size: 13px;">Gender: Male</p>
        <p align="center" style="font-size: 13px;">Age:<?php echo $age ?></p>
        <p align="center" style="font-size: 13px;">Address: Bangalore</p>
      </div>
    </div>
	</div>
</div>
<?php
}
?>
<br>
</div>

</body>
</html>