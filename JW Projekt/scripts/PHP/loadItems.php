<?php

session_start();

if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
{
header('Location: index.php');
}

    include_once "connect.php";

    $zoneID = $_POST['zoneID'];
    $isInput = $_POST['isInput'];

    $query = "SELECT `itemAmount` FROM `zone` WHERE ID=$zoneID";
    

    if($query = $connect -> query($query))
    {
        $result = $query -> fetch_assoc();
        $itemAmount = $result['itemAmount'];
            if($isInput==1){echo "<td class='item'><input name='time' type='number' class='fill_input' value='0'></td>";}
            else {echo "<td class='item'><i class='fa-solid fa-clock'></i></td>";}
        for($i=0;$i<$itemAmount;$i++)
        {
            echo "<td class='item'>";
            if($isInput==1){echo "<input id='item$i' name='$i' type='number' class='fill_input' value='0'>";}
            else {echo "<img class='icon$i item_icon' src='images/region_icons/(".$i.").png'>";}
            echo "</td>";
        }
    }

?>
