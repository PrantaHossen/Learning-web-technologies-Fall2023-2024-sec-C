<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo 'Name is '. $name;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combine</title>
</head>
<body>
<fieldset>
        <legend>NAME</legend>
        Name <br>
        <form action="" method="post">
            <input type="text"  name="name"> <br>
            <hr>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>