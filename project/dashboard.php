<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        img{
            margin-top: 50px;
            margin-left: 100px;
        }
        #logout{
            text-decoration: none;
            border: 1px solid black;
            padding: 14px 25px;
            background-color: white;
            border-radius: 20px;
            margin-left:90%;
            margin-top: 30px;
        }
        #logout:hover{
            background-color: skyblue;
            color: white;
        }
    </style>
    
</head>
<body>
    <h1><i>Welcome <?php echo $_SESSION['name']; ?></i> </h1>
    <a href="./login.html" id="logout">LOG OUT</a>
    <a href="./automate.php?website_name=hackerrank"><img src="hackerrank-logo.jpg" alt="HACKER RANK"></a>
    <a href="./automate.php?website_name=hackerearth"><img src="hacker earth.png" alt="HACKER EARTH"></a>
    <a href="./automate.php?website_name=leetcode"><img src="leetcode.png" alt="LEETCODE"></a>
    <a href="./automate.php?website_name=geeksforgeeks"><img src="gfg.png" alt="GEEKS FOR GEEKS"></a>

</body>
</html>