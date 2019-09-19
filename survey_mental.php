<?php
			require_once ('header.php');
                if (isset($_POST['submit'])){
                $name_user = mysqli_real_escape_string($link, $_POST['name']);
                $age = mysqli_real_escape_string($link, $_POST['age']);
                $gender= mysqli_real_escape_string($link, $_POST['gender']);
                $email = mysqli_real_escape_string($link, $_POST['email']);
                $disability = mysqli_real_escape_string($link, $_POST['disability']);
                $issues = mysqli_real_escape_string($link, $_POST['issues']);
                $interest = mysqli_real_escape_string($link, $_POST['interest']);
                $problems = mysqli_real_escape_string($link, $_POST['problems']);
                $comments = mysqli_real_escape_string($link, $_POST['comments']);
            

            // Escape user inputs for security
$ppid  = $_SESSION['pid'];
    // attempt insert query execution
    $sql = "INSERT INTO survey_mental VALUES ('$ppid', '$name_user', '$age', '$gender', '$email', '$interest', '$disability', '$issues', '$problems', '$comments');";
    $result = mysqli_query($link, $sql) or die(mysqli_error());
    if($result){
        ?>
                    <script type="text/javascript">
    alert('Survey complete, You just got 10 points');
    window.location='profile.php';
    </script>
    <?php
    } 
    else{
            ?>
                    <script type="text/javascript">
    alert('There was a problem, please try again');
    window.location='profile.php';
    </script>
    <?php
    }
 }
?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <style>
        h2 {
            margin-top: 100px;
        }
        
        textarea {
            height: 100px;
            width: 300px;
        }
        
        input {
            border-radius: 3px;
        }
    </style>

    <body>
        <center>
            <form method="POST">
                <h2>Survey Form</h2>
                <hr size="20">

                <div style="margin-top: 50px;">
                    <span style="margin-right: 40px;"><b>1. Your Name</b></span>
                    <input type="text" name="name" id="name" required><br><br>

                    <span style="margin-right: 44px;"><b>2. Your Age</b></span>
                    <input type="number" name="age" id="age" required><br><br>

                    <span style="margin-left: -50px;"><b>3. Your Gender</b></span>
                    <input type="radio" name="gender" id="gender" value="male" style="margin-left: 30px;"> Male
                    <input type="radio" name="gender" id="gender" value="female" style="margin-left: 30px;"> Female<br><br>

                    <span style="margin-right: 40px;"><b>4. Your Email</b> </span>
                    <input type="email" name="email" id="email" required><br><br>

                    <span style="margin-right: 40px;"><b>4. Your Interest</b> </span>
                    <input type="text" name="interest" id="email" required><br><br>

                    <span style="margin-right: 40px;"><b>5. Could you briefly describe your disability/ies</b></span><br><br>
                    <textarea type="textarea" name="disability" id="disability"></textarea><br><br>

                    <span><b>6. Did you have any past, emotional or mental health issues?</b></span><br><br>
                    <input type="radio" name="issues" id="issues" value="yes">Yes&nbsp;&nbsp;
                    <input type="radio" name="issues" id="issues" value="No">No<br><br>

                    <span><b>7. If so, what sort of problems were they? Tick any that apply</b></span><br><br>
                    <input type="checkbox" name="problems" value="Depression"> Depression&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="problems" value="Self-Harming"> Self-Harming&nbsp;&nbsp;
                    <input type="checkbox" name="problems" value="Hyperactivity"> Hyperactivity<br><br>
                    <input type="checkbox" name="problems" value="Behavioural Problems"> Behavioural Problems&nbsp;&nbsp;
                    <input type="checkbox" name="problems" value="Sleep Problems"> Sleep Problems&nbsp;&nbsp;
                    <input type="checkbox" name="problems" value="Anxiety"> Anxiety&nbsp;<br><br>
                    <span style="margin-right: 10x;"> Other, Please Specify</span><br><br>
                    <textarea type="textarea" name="problems"></textarea><br><br>

                    <span style="margin-right: 40px;"><b>8. Any Other Comments</b></span><br><br>
                    <textarea type="textarea" name="comments"></textarea><br><br>

                    <button class="btn btn-primary" type="submit" name="submit">Submit</button><br><br><br>
                </div>
            </form>
        </center>

    </body>

    </html>