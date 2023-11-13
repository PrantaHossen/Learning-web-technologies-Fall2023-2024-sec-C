<?php
require_once("../model/FunctionalitesModel.php");

if ($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "") 
{
    header("location: ../view/userLogin.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Dashboard</title>
</head>

<body>
    <form action="">
        <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
        </h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="../controller/logoutChecker.php">Logout?</a> ||
                    <a href="memberNotification.php">Notifications</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="viewprofile.php">View Profile</a>
                </td>
                <td width="1250px" rowspan="7"></td>
            </tr>
            <tr>
                <td>
                    <a href="percelmgt.php">Parcel Management Panel</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="percelHistory.php">Parcel History</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="parceltrack.php">Parcel Tracker</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="invoice.php">Invoice</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="updatepayment.php">Set/Update Payment Option</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="percelmgt.php">Assigned delivery man</a>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>