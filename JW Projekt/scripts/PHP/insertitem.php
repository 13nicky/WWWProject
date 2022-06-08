<html>
    <body>
<?php

    require_once 'connect.php';

    $itemname = $_GET['name'];
    $itemprice = $_GET['price'];
    $query = "INSERT INTO `items`(`name`, `price`) VALUES ('$itemname',$itemprice)";
    if($query = @$connect -> query($query))
    {
        echo "Success!<br>Added item:<br>Name:$itemname<br>Price:$itemprice";
    }
    else
    {
        echo "Something went wrong!";
    }
    $query->free_result();
    header('Location: additem.html');
?>
    </body>
</html>