<?php


if(isset($_REQUEST['submit']))
{
    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirm_pass = $_REQUEST['confirm'];

    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    } else {
        $gender = '';
    }
    if($name == ''){
        $error_message .= "You must fill in your Name! <br>";
    }
    if($email == ''){
        $error_message .= "You must fill in your Email! <br>";
    }
    if($username == ''){
        $error_message .= "You must fill in your User Name! <br>";
    }
    if($password == ''){
        $error_message .= "You must fill in your Password! <br>";
    }

    if($confirm_pass == '' && $confirm_pass !== $password){
        $error_message .= "Your password doesn't match! <br>";
    }
    if($gender == ''){
        $error_message .= "You must fill in your Gender! <br>";
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
    <form action="" method="request">
        
        <fieldset>
        <table>
        <legend>Registration</legend>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email" id="">
                    <input type="submit"  value="i" title="hint: example@example.com">
                </td>
                
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="confirm" id=""></td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" id="" value="male">Male
                    <input type="radio" name="gender" id="" value="female">Female
                    <input type="radio" name="gender" id="" value="other">Other
                    </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <fieldset>
                    <legend>Date Of Birth</legend>
                    <input type="text" name="date" id="" size="1"> /
                    <input type="text" name="moth" id="" size="1"> /
                    <input type="text" name="year" id="" size="1"><i>(dd/mm/yyyy)</i>
                    </fieldset> 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" id="" value="Submit">
                    <input type="reset" name="reset" id="" value="Reset">
                </td>
            </tr>


        </fieldset>
        </table>
    </form>
</body>
</html>