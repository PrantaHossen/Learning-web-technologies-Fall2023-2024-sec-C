<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Notification</title>
</head>

<body>

    <form method="POST" action="../../controller/notificationCheck.php">
        <table border="1" cellspacing="0" cellpadding="8" align="center" width="100%" height="600px">
            <tr>
                <td align="center">
                Notification Management System 
                </td>
                <td align="right">
                    <a href="notificationPanel.php" >Notification</a>&nbsp;||
                    <a href="../../controller/logoutChecker.php">Logout!?</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <table border="1" cellspacing="0" cellpadding="8" align="center" width="450px" height="300px">
            <tr>
                <td colspan="2" align="center" ><h3>ADDING CAREER..</h3>
                </td>
            </tr>
            <tr>
                <td>
                    Notification For
                </td>
                <td>
                    <select name="notificationFor" id="">
                        <option value="Member">Member</option>
                        <option value="DeliveryMan">Delivery Man</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Notification Description:
                </td>
                <td>
                    <textarea name="notDes" id="" cols="30" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Add Notification">
                    <input type="reset" name="reset" value="Reset Form">
                </td>
            </tr>

        </table>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>