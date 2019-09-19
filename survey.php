<?php
session_start();
?>
<?php
			require_once ('header.php');
?>
    <html>

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
    </style>

    <body>
        <center>
            <h2>Choose the correct Survey</h2><br><br><br>
            <h4 class="container">The survey helps us to find your personal interests, which can provide you the best customized content for domain improvement. </h4>
            <br/>
            <br/>
            <button type="submit" class="btn btn-outline-success" onclick="redirect1()">For Parents / Mentors</button><br><br>
            <button type="submit" class="btn btn-outline-warning" onclick="redirect2()">For the Mentally Challenged persons</button>
        </center>
    </body>
    <script>
        function redirect1() {
            location.replace("survey_parent.php");
        }

        function redirect2() {
            location.replace("survey_mental.php");
        }
    </script>

    </html>