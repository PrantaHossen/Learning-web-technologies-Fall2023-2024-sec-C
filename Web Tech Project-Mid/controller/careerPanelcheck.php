<?php
require_once('../model/FunctionalitesModel.php');
if (isset($_POST['submit'])) {



    if (isset($_POST['jobtitle']) && isset($_POST['jobDes']) && isset($_POST['postdate']) && isset($_POST['endDate'])) {
        $jobtitle = $_POST['jobtitle'];
        $jobDes = $_POST['jobDes'];
        $postdate = $_POST['postdate'];
        $endDate = $_POST['endDate'];

        addCareer($jobtitle, $jobDes, $postdate, $endDate);
    }
} else {
    echo 'Invlaid';
}