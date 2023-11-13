<?php 

require_once('../model/FunctionalitesModel.php');


if(isset($_POST['delete']))
{
    deleteDeliveryman($_SESSION['Username']);
}


?>


