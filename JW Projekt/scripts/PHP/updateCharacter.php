<?php

session_start();

require_once 'connect.php';

$_SESSION['class'] = $class = $_REQUEST['class'];
$_SESSION['spec'] = $spec = $_REQUEST['spec'];
$_SESSION['ap'] = $ap = $_REQUEST['ap'];
$_SESSION['aap'] = $aap = $_REQUEST['aap'];
$_SESSION['dp'] = $dp = $_REQUEST['dp'];

$query = "UPDATE `userdata` SET `classID`=$class,`spec`='$spec',`AP`=$ap,`AAP`=$aap,`DP`=$dp WHERE username='".$_SESSION['username']."'";

if($query = @$connect -> query($query))
    {
        echo "Success!";
    }
    else
    {
        echo "Something went wrong!";
    }
header('Location: ../../account.php');
?>