<?php session_start();

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
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
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td width="250px">
                    <a href="viewadmin.php">ADMIN PROFILE</a>
                </td>
                <td rowspan="10">

                </td>
            </tr>
            <tr>
                <td>
                    <a href="./AdminPanel/viewUserPanel.php">USER PANEL</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/viewDeliverymanPanel.php">DELIVERY MAN PANEL</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/parcelmanagementPanel.php">PARCEL MANAGEMENT PANEL</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/deliverypanel.php">DELIVERY PANEL</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/inventoryPanel.php">INVENTORY PANEL</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/careerPanel.php">CAREER PANEL</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/messagingSystem.php">MESSAGING SYSTEM</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/receiverHistory.php">RECEIVER HISTORY</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="./AdminPanel/notificationPanel.php">NOTIFICATION PANEL</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>