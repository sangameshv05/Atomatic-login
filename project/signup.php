
<?php
    require_once "connection.php";

    $uname=$_POST['uname'];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    
    $insert="insert into users values ('$uname','$password');";
    

    if($database->query($insert))
    {
        echo "success";
        header("Location: ./login.html");
    }
    else{
        echo "error";
    }

