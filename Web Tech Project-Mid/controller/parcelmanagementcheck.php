<?php
require_once('../model/FunctionalitesModel.php');
if (isset($_POST['submit'])) {



    if (isset($_POST['percelName']) && isset($_POST['percelName']) && isset($_POST['percelType']) && isset($_POST['parcelFrom']) && isset($_POST['parcelTo']) && isset($_POST['rname']) && isset($_POST['rnumber'])) {
        $username = $_SESSION['Username'];
        $percelName = $_POST['percelName'];
        $percelType = $_POST['percelType'];
        $percelFrom = $_POST['parcelFrom'];
        $percelTo = $_POST['parcelTo'];
        $rname = $_POST['rname'];
        $rnumber = $_POST['rnumber'];

        addpercel($username, $percelName, $percelType, $percelFrom, $percelTo, $rname, $rnumber);
    }
} else {
    echo 'Invlaid';
}