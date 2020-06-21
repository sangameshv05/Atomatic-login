
<?php 
    session_start();
    require_once "connection.php";
    
    $uname=$_POST['uname'];
    $password=$_POST["password"];

    $check="select * from users where user_name= '$uname' and password='$password';";

    
    $result=$database->query($check);
    
    $_SESSION['name']=$uname;
    if($result->num_rows>0)
    {
        
        header("Location: ./dashboard.php?");
        
    }
    else
    {
        
        header("Location: ./login.html");
    }
