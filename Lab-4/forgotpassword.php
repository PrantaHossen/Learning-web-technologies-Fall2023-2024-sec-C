<?php

if (isset($_POST['submit']))
{
    $error_messages = [];

    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $retype_password = $_POST['retype_password'];

    // Validation rules
    if ($new_password === $current_password) 
    {
        $error_messages[] = "New Password should not be the same as the Current Password.";
    }

    if ($new_password !== $retype_password) 
    {
        $error_messages[] = "New Password must match with the Retyped Password.";
    }

    if (empty($error_messages)) 
    {
        echo "Password changed successfully!";
    } 
    else
    {
        foreach ($error_messages as $error_message) {
            echo '<font color="black">' . $error_message . '</font><br>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>
<form method="post" action="#">
    <fieldset>
        <legend>Forget Password</legend>
        <table>
            <tr>
                <td>Current Password</td>
                <td><input type="text" name="current_password" id=""></td>
            </tr>
            <tr>
                <td>New Password</td>
                <td><input type="text" name="new_password" id=""></td>
            </tr>
            <tr>
                <td>Retype New Password</td>
                <td><input type="text" name="retype_password" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <br>
                <td><input type="submit" name="submit" id="" value="Submit"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
