<?php
    session_start();
    if(!isset($_SESSION['logged_in']) ) header('location: login.php');
    if(!isset($_GET['name'])) header('location: login.php');
    $name = $_GET['name'];

    $con = mysqli_connect('localhost', 'root', '', 'Exam');

    $sql = "SELECT * FROM signup where name='$name';";
    $res = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($res);

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>

    <fieldset>
        <table>
            <tr>
                    <fieldset>
                        <table>
                            <?php
                                if($user['type'] == 'Admin'){
                                    ?>
                                        <!-- <tr><td><a href="">Profile</a><hr></td></tr>
                                        <tr><td><a href="">Change Password</a><hr></td></tr>
                                        <tr><td><a href="">Log Out</a><hr></td></tr> -->

									<?php	header('location: admin_home.php');?>

                                    <?php
                                }
                                else if($user['type'] == 'User'){
                                    ?>
                                    <!--  <tr><td><a href="">Profile</a><hr></td></tr>
                                        <tr><td><a href="">Change Password</a><hr></td></tr>
                                        <tr><td><a href="">Log Out</a><hr></td></tr> -->
										<?php	header('location: user_home.php');?>
                                    <?php
                                }
                            ?>
                        </table>
                            
                    </fieldset>
                </td>

                <td width="20"> </td>

                <td>
                    <h3>Account Information</h3>
                    <table>
                        <tr>
                            <td><b>Name:</b></td>
                            <td><?=$user['name']?></td>
                        </tr>
                        <tr>
                            <td><b>ID:</b></td>
                            <td><?=$user['id']?></td>
                        </tr>
                        <tr>
                            <td><b>Password:</b></td>
                            <td><?=$user['password']?></td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </fieldset>

    <a href="logout.php">Logut</a>
    
</body>
</html>