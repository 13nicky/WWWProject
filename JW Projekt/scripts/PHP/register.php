<?php

    require_once 'connect.php'; 

    $login = $_REQUEST['rlogin'];
    $password = $_REQUEST['rpassword'];
    $email = $_REQUEST['remail'];

    $query = "INSERT INTO `userdata`(`username`, `email`, `password`) VALUES ('$login','$email','$password')";

    if($query = @$connect -> query($query))
    {
        echo "Success!";
    }
    else
    {
        echo "Something went wrong!";
    }
?>