<?php
    session_start();
    if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
    {
    header('Location: index.php');
    }
    require_once 'connect.php';

    $zoneid = $_POST['zoneid'];
    $userid = $_SESSION['userid'];
    $time = $_POST['time'];

    $query = "INSERT INTO `sessions`(`Time`, `UserID`, `ZoneID`) VALUES ($time,$userid,$zoneid)";

    if($query = $connect -> query($query))
    {
        $query = "SELECT `ID` FROM `sessions` WHERE 1 ORDER BY `ID` DESC LIMIT 1";
        if($query = $connect -> query($query))
        {
            while($result = $query -> fetch_assoc())
            {
                $_SESSION['LastSession'] = $result['ID'];
            }
        }
        header('Location: ../../sessions.php');
    }
?>