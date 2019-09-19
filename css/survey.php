<?php
			require_once ('header.php');
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

                    <span style="margin-left: -80px;"><b>5. Your Realtionship with the person</b></span><br><br>
                    <input type="radio" name="relation" id="relation" value="Mother">Mother&nbsp;&nbsp;
                    <input type="radio" name="relation" id="relation" value="Father">Father<br><br>
                    <input type="radio" name="relation" id="relation" value="Brother">Brother&nbsp;&nbsp;
                    <input type="radio" name="relation" id="relation" value="Sister">Sister<br><br>
                    <span style="margin-right: 10x;">Other, Please Specify</span>
                    <input type="text" name="relation" id="relation"><br><br>

                    <span style="margin-right: 40px;"><b>6. Could you briefly describe your child/children’s disability/ies</b></span><br><br>
                    <textarea type="textarea" name="disability" id="disability"></textarea><br><br>

                    <span><b>7. Do you feel any of your children currently have, or have had in the past, emotional or mental health issues?</b></span><br><br>
                    <input type="radio" name="issues" id="issues" value="yes">Yes&nbsp;&nbsp;
                    <input type="radio" name="issues" id="issues" value="No">No<br><br>

                    <span><b>8. If so, what sort of problems were they? Tick any that apply</b></span><br><br>
                    <input type="checkbox" name="problems"> Depression&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="problems"> Self-Harming&nbsp;&nbsp;
                    <input type="checkbox" name="problems"> Hyperactivity<br><br>
                    <input type="checkbox" name="problems"> Behavioural Problems&nbsp;&nbsp;
                    <input type="checkbox" name="problems"> Sleep Problems&nbsp;&nbsp;
                    <input type="checkbox" name="problems"> Anxiety&nbsp;<br><br>
                    <span style="margin-right: 10x;"> Other, Please Specify</span><br><br>
                    <textarea type="textarea" name="problems"></textarea><br><br>

                    <span style="margin-right: 40px;"><b>9. What strategies did you use to try and help your child? Please describe</b></span><br><br>
                    <textarea type="textarea" name="strategies"></textarea><br><br>

                    <span style="margin-right: 40px;"><b>10. Can you suggest any ways in which services aimed at helping children and young people, and their parents, <br>could be more accessible and open to disabled children and their parents?</b></span><br><br>
                    <textarea type="textarea" name="strategies"></textarea><br><br>

                    <span style="margin-right: 40px;"><b>11. Any Other Comments</b></span><br><br>
                    <textarea type="textarea" name="comments"></textarea><br><br>

                    <button class="btn btn-primary" type="submit" name="submit">Submit</button><br><br><br>
                </div>
            </form>
        </center>

    </body>

    </html>