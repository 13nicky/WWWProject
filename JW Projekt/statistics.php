<?php

session_start();


if((!isset($_SESSION['isLoggedIn'])) && (!$_SESSION['isLoggedIn']))
    {
    header('Location: index.php');
    }
?>

<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Other CSS -->
    <link href="styles/style.css" rel="stylesheet">
    <!-- Other elements -->
    <script src="https://kit.fontawesome.com/afde58873f.js" crossorigin="anonymous"></script>
    <title>Temporary title</title>
  </head>
  <body>
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
                    <td><a class="rounded" href="sessions.php">Sesje</a></td>
                    <td><a class="rounded" href="#">Statystyki</a></td>
                    <td><a class="rounded" href="account.php">Konto</a></td>
                </tr>      
            </table>
        </div>
        <div class="content">

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
                {NAZWA STRONY} jest stroną powstałą w celu śledzenia swoich wyników w grze Black Desert Online.
                Pozwala ona na zapisywanie swoich sesji grindingowych oraz automatyczne obliczanie zarobionego w grze srebra.
                Umożliwia ona również podejrzenie ogólnych statystyk z zapisanych sesji.
            </div>
            <div class="clear"></div>
            <div class="copyright">{NAZWA STRONY}&COPY;Jakub Wójcicki. Wszystkie prawa zastrzeżone.</div>
        </div>
    </div>
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>