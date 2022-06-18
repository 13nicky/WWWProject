<?php

    session_start();

    if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
    {
    header('Location: index.php');
    }

    unset($_SESSION['isLoggedIn']);
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['class']);
    unset($_SESSION['spec']);
    unset($_SESSION['ap']);
    unset($_SESSION['aap']);
    unset($_SESSION['dp']);
    unset($_SESSION['admin']);

    header('Location: ../../index.php');
?>