<?php
require_once('../model/FunctionalitesModel.php');

if ($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}
$users = getSpeceficMember($_SESSION['Username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .editp {
            background: #36a420;
            border: 1px solid #36a420;
            color:aliceblue;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            padding: 8px;
            border-radius: 10px;
            text-decoration: none;
        }
        .deletep{
            background: red;
            border: 1px solid #36a420;
            color:aliceblue;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            padding: 8px;
            border-radius: 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <form action="">
        <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
        </h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="400px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="memberNotification.php">Notifications</a> |
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="../asset/profile.png" height="250px" width="250px" align="center">
                </td>

                <td width="1250px">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">ID</td>
                        <td align="center">NAME</td>
                        <td align="center">EMAIL</td>
                        <td align="center">Gender</td>
                        <td align="center">Date of Birth</td>
                        <td align="center">Phone Number</td>
                        <td align="center">NID Number</td>
                        <td align="center">Address</td>
                        <?php for ($i = 0; $i < count($users); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $users[$i]['UserID'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserName'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserEmail'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserGender'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserDateofBirth'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserPhoneNumber'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserNIDNumber'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserAdress'] ?>
                                </td>
                            </tr>


                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <table border="0" cellpadding="8" cellspacing="0">
                        <td>
                            <a href="editMember.php" class="editp">
                                Edit Profile</a>
                        </td>
                        <td>
                            <a href="deleteMember.php" class="deletep">
                                Delete Profile</a>
                        </td>
                    </table>
                </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="Memberdashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>