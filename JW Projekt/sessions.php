<?php

session_start();

if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
    {
    header('Location: index.php');
    }

require_once 'scripts/PHP/connect.php';

?>
<!doctype html>
<html lang="pl">
  <head>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Other CSS -->
    <link href="styles/style.css" rel="stylesheet">
    <!--JQuery-->
    <script src="scripts/JavaScript/jquery-3.6.0.min.js"></script>
    <!-- Other elements -->
    <script src="https://kit.fontawesome.com/afde58873f.js" crossorigin="anonymous"></script>
    <script src="scripts/JavaScript/Popup_form.js"></script>
    <script src="scripts/JavaScript/AddSession.js"></script>
    <script src="scripts/JavaScript/UpdateIcons.js"></script>
    <title>Temporary title</title>
  </head>
  <script>
        $(document).ready(function(){
            $('#zoneId').change(function loadIcons(){
                let zoneId = document.getElementById("zoneId").value;
                document.getElementById("zoneIDinput").value = zoneId;
                $('#items').load("scripts/PHP/loadItems.php",{
                    zoneID: zoneId,
                    isInput: 0
                });
                $('#fill').load("scripts/PHP/loadItems.php",{
                    zoneID: zoneId,
                    isInput: 0
                });
                $('#fill_input').load("scripts/PHP/loadItems.php",{
                    zoneID: zoneId,
                    isInput: 1
                });
                setTimeout(function(){updateIcons()},100);
                    $('#sessions_zone').load("scripts/PHP/updateSessions.php",{
                    zoneID: zoneId
                    });
            });
        });
  </script>
  <body>
    <div id="add_session">
        <div class="fill_session">
    <form id="add_session_form" action="scripts/PHP/addSession.php" method="post" >
            <input id="zoneIDinput" name="zoneid" class="hide" type="number">
            <h3 class="text-center">Dodaj sesje</h3><i class="close_button fa-solid fa-xmark"  onclick="close_form(document.getElementById('add_session'));"></i>
                <table style="width:100%;">
                    <tr id="fill" class="d-flex justify-content-center">
                        
                    </tr>
                    <tr id="fill_input" class="d-flex justify-content-center">

                    </tr>
                </table>
                <button id="add_button" class="add_button" type="submit"><i class="fa-solid fa-circle-plus"></i></button>
        </div>
    </form>
    </div>
    <div id="container">
        <div class="header">
            <div class="header_upper">
                <div class="motto">Śledź z nami swój progres!</div>
                <div class="social"><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i><i class="fa-solid fa-envelope"></i><a href="scripts/PHP/logout.php" class="exit fa-solid fa-right-from-bracket"></a></div>
            </div>
            <div class="clear"></div>
            <table class="nav">
                <tr class="d-flex justify-content-center">
                    <td><a class="rounded" href="main.php">Strona Główna</a></td>
                    <td><a class="rounded" href="#">Sesje</a></td>
                    <td><a class="rounded" href="statistics.php">Statystyki</a></td>
                    <td><a class="rounded" href="account.php">Konto</a></td>
                </tr>     
            </table>
        </div>
        <div class="content">
            <span style="font-size:1.5rem; margin-right:.5rem;">Region:</span>
            <select id="zoneId" class="zone_select" onchange="updateIcons()">
                <option>Wybierz region</option>
                <?php
                $query = "SELECT `id` ,`name` FROM `zone` ORDER BY `name`";
                if($query = $connect -> query($query))
                {
                    while($row = $query -> fetch_assoc())
                    {
                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                    }
                }
                $query -> free_result();
                ?>
            </select>
            <div class="rounded" id="add" onclick="open_form(document.getElementById('add_session'));"><b>DODAJ</b> <i class="fa-solid fa-circle-plus"></i></div>
            <div class="clear"></div>
            <hr>
            <div class="session">
                <table style="width:100%;">
                    <tr id="items" class="d-flex justify-content-center">
                        
                    </tr>
                </table>
                <table style="width:100%;" id="sessions_zone">

                </table>
            </div>
        </div>
        <div class="footer">
            <div class="footer_logo footer_element">
                <img src="images/150.png">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, incidunt.</p>
            </div>
            <div class="links footer_element">
                <ul>
                    <li><a href="#"> Strona główna </a></li>
                    <li><a href="#"> Sesje </a></li>
                    <li><a href="#"> Statystyki </a></li>
                    <li><a href="#"> Konto </a></li>
                </ul>
            </div>
            <div class="links footer_element">
                <ul>
                    <li><a href="#"> Facebook </a></li>
                    <li><a href="#"> Twitter </a></li>
                    <li><a href="#"> Kontakt </a></li>
                </ul>
            </div>
            <div class="footer_text footer_element">
                GRIND TRACKER jest stroną powstałą w celu śledzenia swoich wyników w grze Black Desert Online.
                Pozwala ona na zapisywanie swoich sesji grindingowych oraz automatyczne obliczanie zarobionego w grze srebra.
                Umożliwia ona również podejrzenie ogólnych statystyk z zapisanych sesji.
            </div>
            <div class="clear"></div>
            <div class="copyright">GRIND TRACKER&COPY;Jakub Wójcicki. Wszystkie prawa zastrzeżone.</div>
        </div>
    </div>
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>