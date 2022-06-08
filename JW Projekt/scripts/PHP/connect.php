<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'grindtracker';

    $connect = @new mysqli($db_host,$db_user,$db_password,$db_name);

    if($connect -> connect_errno!=0)
    {
        echo "Connection error!<br>Error no. ".$connect->connect_errno;
        sleep(3);
        header('Location: additem.html');
    }

?>