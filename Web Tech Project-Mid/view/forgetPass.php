<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form method="post" action="../controller/forgetpassChecker.php"
        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <td colspan=""><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right"><a href="index.php">Back to Home!?</a></td>
            </tr>

            <tr>
                <td colspan="2">
                    <fieldset>
                        <Legend>Forget Password Panel</Legend>
                        <table border="1" cellpadding="15" cellspacing="0" align="center">
                            <tr>
                                <td>E-mail</td>
                                <td><input type="text" name="email" id="" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id="" required></td>
                            </tr>
                            <tr>
                                <td>Re-type</td>
                                <td><input type="password" name="repassword" id="" required></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <input type="submit" name="Forgetsubmit" id="" value="Forget Password" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <a href="userLogin.php"> Back to LOGIN!?</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>