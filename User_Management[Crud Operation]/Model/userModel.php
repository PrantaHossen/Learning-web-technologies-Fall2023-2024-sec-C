<?php
    require_once('db.php');

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from usertest where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function createUser($username, $password, $email){
        $con = getConnection();
        $sql = "INSERT into usertest (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    function getUser($id){
        $con = getConnection();
        $sql = "SELECT * from usertest where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            echo "Invalid User";
            return false;
        }

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "SELECT * from usertest";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }

        return $users;
    }

    function updateUser($user){
        $con = getConnection();

        $id = $user['id'];
        $username = $user['username'];
        $email = $user['email'];

        $sql = "UPDATE usertest SET username = '$username', email = '$email' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    function deleteUser($id){
        $con = getConnection();
        $sql = "DELETE FROM usertest WHERE id = $id";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }


?>