<?php
			require_once ('header.php');
?>

    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>

            .container-fullwidth {
                position: relative;
                width: 100%;
            }
            /* .container img {
                width: 100%;
                height: auto;
            } */
            
            img {
                background-size: cover;
                overflow: hidden;
                height: 664px;
            }
            
            .container-fullwidth .btn {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color: green;
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
                text-align: center;
            }
            
            .container-fullwidth .btn:hover {
                background-color: #5DFF3E;
            }
        </style>
    </head>

    <body>
        <div class="container-fullwidth">
            <img src="images/background.jpg" style="width:100%;overflow: hidden;">
            <!-- <p>Hello</p> -->
            <button type="button" class="btn" onclick="redirect()">Take the survey</button><br>
            <!-- <button type="button" style="margin-top: 100px;" class="btn">Register</button> -->
        </div>
    </body>
    <script>
        function redirect() {
            location.replace("register.php");
        }
    </script>

    </html>