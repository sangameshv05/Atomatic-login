
<?php session_start();
require 'connection.php';

$username=$_SESSION['name'];
$websitename=strtolower($_POST['website']);
$wusername=$_POST["wusername"];
$password=$_POST["password"];

$insert="insert into website values('$username','$websitename','$wusername','$password');";

if($database->query($insert)){
    header("Location: ./dashboard.php");
    $_SESSION['register']="successfully registered";
    if(isset($_SESSION['error'])){
        $_SESSION['error']=0;
    }

}
else{
    echo 'error';
    
}

