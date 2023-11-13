<?php 

require_once('../model/FunctionalitesModel.php');

$Email = $_POST['email'];
$Password = $_POST['password'];
$Repass = $_POST['repassword'];

if($Email == "" || $Password == "" || $Repass = "" )
{
    echo "Invalid Email or password!"; 
}
else
{
    forgetPassword($Email,$Password);
}

?>