<?php
    session_start();
    if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
    {
    header('Location: index.php');
    }
    require_once 'connect.php';

    $itemID = $_POST['item'];
    $amount = $_POST['amount'];
    
    $query = "INSERT INTO `itemdata`(`SessionID`, `ItemID`, `count`) VALUES (".$_SESSION['LastSession'].",$itemID,$amount)";
    if($query = $connect -> query($query))
    {
        header('Location: ../../sessions.php');
    }
?>