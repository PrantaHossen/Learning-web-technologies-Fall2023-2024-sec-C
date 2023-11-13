<?php

require_once("../model/FunctionalitesModel.php");

$Username = $_POST['uname'];
$Useremail = $_POST['uemail'];
$UserGender = $_POST['ugender'];
$UserDateofBirth = $_POST['udob'];
$UserPhoneNumber = $_POST['uphone'];
$UserNID = $_POST['unid'];
$UserAddress = $_POST['uaddress'];
$Userpassword = $_POST['upassword'];
$repassword = $_POST['rePassword'];

$UsernameCondition = ((ctype_alpha($Username)) && (strlen($Username > 2)));
$UserPasswordCondition = (strlen($Userpassword) > 8);
$UserPhoneNumberCondition = ((strlen($UserPhoneNumber) == 11 || strlen($UserPhoneNumber) > 10) && (strlen($UserPhoneNumber) < 12) && is_numeric($UserPhoneNumber));
$UserNIDCondition = ((strlen($UserNID) == 10 || strlen($UserNID) > 9) && (strlen($UserNID) < 11));

if (isset($_POST['submit'])) {
    if ($Username != "" && $Useremail != "" && $UserGender != "" && $UserDateofBirth != "" && $UserPhoneNumber != "" && $UserNID != "" && $UserAddress != "" && $Userpassword != "") // UserName, UserPassword, Phonenumber and NID number validation
    {
        if ($UsernameCondition && $UserPasswordCondition && $UserPhoneNumberCondition && $UserNIDCondition) {
            if ($Userpassword == $repassword) {

                createUser_M($Username, $Useremail, $UserGender, $UserDateofBirth, $UserPhoneNumber, $UserNID, $UserAddress, $Userpassword);
            } elseif ($Userpassword != $repassword) {
                echo "Please provide the password properly";
            }
        } else {
            echo "Please fill the values properly";
        }

    }

}

?>