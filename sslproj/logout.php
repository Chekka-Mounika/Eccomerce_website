<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:black;
            color:white;
        }
        .box{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            width:70%;
            border:2px solid grey;
            margin:auto;
            margin-top:150px;
            padding:20px

        }
        #btn{
            border:2px solid grey;
            padding:10px;
            background-color:grey;
            color:black;
            margin-top: 10px;
            cursor:pointer;
        }
    </style>
</head>
<body>
<?php
    include "dbconnect.php";
  ?>
<?php

session_start();
session_destroy();


?>
<div class="box">
<div >You are logged out successfully</div>
<div id="btn"><a style="text-decoration:none;color:white" href="try.php" >Go back to home</a></div>
    </div>
</body>
</html>