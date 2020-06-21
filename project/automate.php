<?php
session_start();
require "connection.php";
require_once "phpwebdriver/WebDriver.php";
require_once "phpwebdriver/LocatorStrategy.php";

$website_name=$_GET['website_name'];
$username=$_SESSION['name'];
$web="select * from automate where website_name='$website_name'";
$select="select web_user_name , password from website where user_name='$username' and website_name='$website_name';";

$auth=$database->query($select);
$data=$auth->fetch_assoc();
$webdata=$database->query($web);
$info=$webdata->fetch_assoc();
if($auth->num_rows>0 )
{
    $webdriver = new WebDriver("localhost", "4444");
    $webdriver->connect("chrome");                            
    $webdriver->get($info['login']);

    $ele= $webdriver->findElementBy(LocatorStrategy::id, $info['user_name']);
    $ele->sendkeys(array($data['web_user_name']));
    $ele=$webdriver->findElementBy(LocatorStrategy::id, $info['password']);
    $ele->sendkeys(array($data['password']));
    $webdriver->findElementBy(LocatorStrategy::className, $info['submit'])->click();
    header("Location: ./dashboard.php");

}
else
{
    $_SESSION["error"]=1;
    header("Location: ./register1.php?website_name=$website_name");
}



?>