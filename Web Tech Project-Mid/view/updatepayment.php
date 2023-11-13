<?php
require_once("../model/FunctionalitesModel.php");

if($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "")
{
    header("location: ../view/userLogin.php");
}
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
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
        <h2 align="center">Welcome <?php echo $_SESSION['Username']?></h2>
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="index.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="">View Profile</a>
                </td>
                <td width="1250px" rowspan="8">
                    <form action="">
                        <fieldset>
                            <legend>Set and Update Payment Option</legend>
                            <table border="1" cellpadding="10" cellspacing="0" align="center">
                                <tr>
                                    <td>Write Your Email Id: </td>
                                    <td><input type="email" name="email" placeholder="write your email here."></td>
                                </tr>
                                <tr>
                                    <td>Choose your Payment Option</td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">Card</option>
                                            <option value="">Bkash</option>
                                            <option value="">Nagad</option>
                                            <option value="">Rocket</option>
                                            <option value="">Cash On Delivery</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" name="submit" id="" value="Save/Update">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="oderhistory.php">Order History</a>
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
                    <a href="#">Set/Update Payment Option</a>
                </td>

            </tr>

            <tr>
                <td>
                    <a href="#">Assigned Delivery Man</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="percelmgt.php">Parcel Management Panel</a>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>