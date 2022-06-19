<?php

session_start();
if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
    {
    header('Location: index.php');
    }
    include_once 'connect.php';

    $zoneID = $_POST['zoneID'];

    $query1 = "SELECT * FROM `sessions` WHERE UserID=".$_SESSION['userid']." AND ZoneID=$zoneID";

    if($query1 = $connect -> query($query1))
    {
        while($result1 = $query1 -> fetch_assoc())
        {
            echo "<tr class='d-flex justify-content-center'>";
            echo "<td class='item'>".$result1['Time']."</td>";
            $query2 = "SELECT * FROM `itemdata` WHERE SessionID=".$result1['ID'];
            if($query2 = $connect -> query($query2))
            {
                while($result2 = $query2 -> fetch_assoc())
                {
                    echo "<td class='item'>".$result2['count']."</td>";
                }
            }
            echo "</tr>";
        }
    }
?>