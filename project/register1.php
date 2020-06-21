<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Register</title>
    <style>
        #website{
            text-transform: uppercase;
        }
        #wusername {
            margin-left: 36px;
        }
        #password{
            margin-left: 42px;
        }
        #register{
            background-color: skyblue;
            margin-left: 170px;
            width: 100px;
        }
        
    </style>
</head>
<body>
    <h1>REGISTER YOUR WEBSITE INFO HERE</h1>
    <form action="./register.php" method="POST">
        <label for="website">WEBSITE NAME:</label>
        
        <input type="text" id="website" name="website" value="<?php echo $_GET['website_name'] ?>" ><br>           
              
        <label for="wusername" >USER NAME:</label>
        <input type="text" id="wusername" name="wusername" autofocus required><br>
        <label for="password" >PASSWORD:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Register" id="register">

    </form>
</body>
</html>