<?php 

require_once('../model/FunctionalitesModel.php');


if(!isset($_POST['update']))
{
    echo "Something Else";
}
elseif(isset($_POST['update']))
{
    $Newname = $_POST['username'];
    $NewEmail =$_POST['useremail'];
    $NewGender =$_POST['usergender'];
    $NewDOB = $_POST['udob'];
    $NewPhoneNo = $_POST['uphone'];
    $NewNIDNo = $_POST['unid'];
    $NewAddress = $_POST['uAdd'];

    updateMember($Newname, $NewEmail,$NewGender,$NewDOB,$NewPhoneNo,$NewNIDNo,$NewAddress);
}


?>