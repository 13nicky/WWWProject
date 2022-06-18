<?php

    session_start();

    if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
    {
    header('Location: index.php');
    }

    require_once 'connect.php';

    $newEmail = $_POST['nEmail'];
    $newPassword = $_POST['nPassword'];
    if($_POST['verify1'] == $_SESSION['password'] && $_POST['verify2'] == $_SESSION['password'])
    {
        $query = "UPDATE `userdata` SET `email`='$newEmail',`password`='$newPassword' WHERE username='".$_SESSION['username']."'";
        $_SESSION['email'] = $newEmail;
        $_SESSION['password'] = $newPassword;
        if($query = @$connect -> query($query))
        {
            echo "Success!";
        }
        else
        {
            echo "Something went wrong!";
        }
    }
    header('Location: ../../account.php');
?>