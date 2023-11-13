<?php
require_once('../../model/FunctionalitesModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}
$career = getAllCarrer();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <a href="#">Notifications</a> |
                    <a href="../../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">CAREER ID</td>
                        <td align="center">JOB TITTLE</td>
                        <td align="center">JOB DESCRIPTION</td>
                        <td align="center">JOB POSTING DATE</td>
                        <td align="center">ENDING SUBMIT DATE</td>
                        <?php for ($i = 0; $i < count($career); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $career[$i]['careerID'] ?>
                                </td>
                                <td align="center">
                                    <?= $career[$i]['jobTittle'] ?>
                                </td>
                                <td align="center">
                                    <?= $career[$i]['jobDescription'] ?>
                                </td>
                                <td align="center">
                                    <?= $career[$i]['postingDate'] ?>
                                </td>
                                <td align="center">
                                    <?= $career[$i]['endingDate'] ?>
                                </td>
                            </tr>


                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <table border="1" cellpadding="8" cellspacing="0">
                        <td>
                            <a href="#" style="color: Green;">
                                Edit Job</a>
                        </td>
                        <td>
                        <a href="" style="color: Red;">
                        Delete Job</a>
                        </td>
                    </table>
                </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="a" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="../admindashboard.php"style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>