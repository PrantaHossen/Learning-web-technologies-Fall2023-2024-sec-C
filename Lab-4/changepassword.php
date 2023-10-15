<?php
if(isset($_REQUEST["submit"]))
{
    $currentpass=$_REQUEST["currentpass"];
    $newpass=$_REQUEST["newpass"];
    $retypepass=$_REQUEST["retypepass"];
    
    $error_message = '';
    
    if($currentpass==""||$newpass==""||$retypepass=="")
    {
        echo "Types All the data";
    }
    else if($currentpass==$newpass)
    {
        echo "Please give correct password. Don't type new password same as current pass  ";
    }
    
    else if($newpass!=$retypepass)
    {
        echo "Password Not matched";
    }
    else{
        echo"Password changed Successfully";
    }
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
    <form action="" method="">
        <fieldset>
            <legend>Change Password</legend>
            <table>
                <tr>
                    <td>Current Password</td>
                    <td><input type="password" name="currentpass" id=""></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td><input type="password" name="newpass" id=""></td>
                </tr>
                <tr>
                    <td>Retype Password</td>
                    <td><input type="password" name="retypepass" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type="submit" name="submit" id="" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>