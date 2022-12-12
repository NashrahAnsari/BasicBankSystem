<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body{
            background:white;
        }

        .panel1{
            height:500px;
            width:50%;
            background:white;
            margin-left:25%;
            margin-top:3%;
            border:1px solid black;
            
        }

        .side1{
            background:url('p1.jpg');
            width:50%;
            height:500px;
            background-size:cover;
            float: left;
        }

        .main1{
            width:50%;
            height:500px;
            float: left;
            margin-top:10%;
        }

        h1{

            text-align:center;
            font-size:30px;
            font-weight:Bold;
        }
        form{
            margin-left:45px;
        }

        input{
            border-radius:2px;
            border:2px solid black;
        }
        input[type=submit]{
            font-size:14px;
            font-weight:bold;
        }
    </style>
</head>
<body>
<?php

include('header.php');
?>
    <div class="panel1">
    <div class="side1"></div>
<div class="main1">
<h1>Registration Form</h1>
<br>
<form action="Backend.php" method="POST">
    <label>Name</label><br>
    <input type="text" name="Name" size="35"><br><br>
    <label>Email</label><br>
    <input type="email" name="Email" size="35"><br><br>
    <label>Password</label><br>
    <input type="password" name="Password" size="35"><br><br>
<a href="login.php" style="color:blue;"><p>Already Hava a Account? Login Here</p></a>
<br>
    <input type="submit" value="Register">
</form>
</div>
</div>
</body>
</html>