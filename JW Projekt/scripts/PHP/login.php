<?php

    session_start();

    require_once 'connect.php';

    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

    $query = "SELECT * FROM `userdata` WHERE username='$login' AND password='$password'";

    if($query = @$connect -> query($query))
    {
        if($query -> num_rows>0)
        {

            $result = $query->fetch_assoc();

            $_SESSION['isLoggedIn'] = true;

            $_SESSION['userid'] = $result['ID'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['password'] = $result['password'];
            $_SESSION['class'] = $result['classID'];
            $_SESSION['spec'] = $result['spec'];
            $_SESSION['ap'] = $result['AP'];
            $_SESSION['aap'] = $result['AAP'];
            $_SESSION['dp'] = $result['DP'];
            $_SESSION['admin'] = $result['isAdmin'];

            $query->free_result();
        }
        header('Location: ../../main.php');
    }
    else
    {
        echo "Something went wrong!";
        header('Location: ../../main.php');
    }
?>