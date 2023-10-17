<?php
if (isset($_POST['submit'])) {
    $error_messages = [];

    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validation rules for username
    if (strlen($username) < 2 || !isValidUsername($username)) {
        $error_messages[] = "Username is invalid. It must contain at least two alphanumeric characters, period, dash, or underscore only.";
    }

    // Validation rules for password
    if (strlen($password) < 8 || !isValidPassword($password)) {
        $error_messages[] = "Password is invalid. It must not be less than eight characters and contain at least one of the special characters (@, #, $, %).";
    }

    if (empty($error_messages)) {
        // Validation passed, and no errors
        // You can save the registration data here
        // For simplicity, we'll just display a success message
        echo "Registration successful!";
    } else {
        // Display error messages in black color
        foreach ($error_messages as $error_message) {
            echo '<font color="black">' . $error_message . '</font><br>';
        }
    }
}

function isValidUsername($username) {
    $validCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.-_';

    if (strlen($username) < 2) {
        return false;
    }

    for ($i = 0; $i < strlen($username); $i++) {
        if (strpos($validCharacters, $username[$i]) === false) {
            return false;
        }
    }

    return true;
}

function isValidPassword($password) {
    if (strlen($password) < 8) {
        return false;
    }

    if (strpbrk($password, '@#$%') === false) {
        return false;
    }

    return true;
}
?>

<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="username" name="username" id=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" name="remember_me" id="">Remember Me</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" id="" value="Submit">
                        <a href="forgotpassword.php">Forget Password?</a>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>