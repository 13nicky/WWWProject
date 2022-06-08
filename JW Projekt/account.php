<?php

    session_start();

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

    <script>
        function updateIcon()
        {
            let icon = document.getElementById("class_icon");
            icon.src = "images/class_icons/"+document.getElementById("class").selectedIndex+".png";
        }
        function updateChar()
        {
            document.getElementById("class").selectedIndex = <?php echo $_SESSION['class'] ?>;
            let specObj = document.getElementById("spec");
            let spec ='<?php echo $_SESSION['spec'] ?>';
            updateIcon();
            if(spec="Awa")
            {
                specObj.selectedIndex = 1;
            }
            else
            {
                specObj.selectedIndex = 0;
            }
        }
        
    </script>

  </head>
  <body onload="updateChar();">
    <div id="container">
        <div class="header">
            <div class="header_upper">
                <div class="motto">Śledź z nami swój progres!</div>
                <div class="social"><i class="fa-brands fa-facebook"></i><i class="fa-brands fa-twitter"></i><i class="fa-solid fa-envelope"></i></div>
            </div>
            <div class="clear"></div>
            <table class="nav">
                <tr class="d-flex justify-content-center">
                    <td><a class="rounded" href="main.html">Strona Główna</a></td>
                    <td><a class="rounded" href="sessions.html">Sesje</a></td>
                    <td><a class="rounded" href="statistics.html">Statystyki</a></td>
                    <td><a class="rounded" href="#">Konto</a></td>
                </tr>   
            </table>
        </div>
        <div class="content">
            <h1 class="text-center bot_marg"> Twoje Dane </h1>
            <table class="center">
                <tr>
                    <td>Login: </td>
                    <td class="text-center"><?php echo $_SESSION['username'] ?></td>
                </tr>
                <tr>
                    <td>E-Mail: </td>
                    <td class="text-center"><?php echo $_SESSION['email'] ?></td>
                    <td><a href="">zmień</a></td>
                </tr>
                <tr>
                    <td>Hasło: </td>
                    <td class="text-center">{password}</td>
                    <td><a href="">zmień</a></td>
                </tr>
            </table>
            <hr>
            <h1 class="text-center bot_marg"> Uzupełnij klasę </h1>
            <form action="scripts/PHP/updateCharacter.php" method="post" class="form">
                <table class="center">
                    <tr>
                        <td><img style="max-width:40px;" id="class_icon" src="images/class_icons/1.png"></td>
                        <td>
                            <select name="class" id="class" class="class wide" onchange="updateIcon()">
                                <option value="null">Wybierz klasę</option>
                                <option value=1>Warrior</option>
                                <option value=2>Ranger</option>
                                <option value=3>Sorceress</option>
                                <option value=4>Berserker</option>
                                <option value=5>Tamer</option>
                                <option value=6>Musa</option>
                                <option value=7>Maehwa</option>
                                <option value=8>Valkyrie</option>
                                <option value=9>Kunoichi</option>
                                <option value=10>Ninja</option>
                                <option value=11>Wizard</option>
                                <option value=12>Witch</option>
                                <option value=13>Dark Knight</option>
                                <option value=14>Striker</option>
                                <option value=15>Mystic</option>
                                <option value=16>Archer</option>
                                <option value=17>Lahn</option>
                                <option value=18>Shai</option>
                                <option value=19>Guardian</option>
                                <option value=20>Hashashin</option>
                                <option value=21>Nova</option>
                                <option value=22>Sage</option>
                                <option value=23>Corsair</option>
                                <option value=24>Drakania</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <select id="spec" name="spec" class="class wide">
                                <option value="Succ">Succession</option>
                                <option value="Awa">Awakening</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">AP</td>
                        <td><input name="ap" class="form_input" type="number" value="<?php echo $_SESSION['ap'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">AAP</td>
                        <td><input name="aap" class="form_input" type="number" value="<?php echo $_SESSION['aap'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center">DP</td>
                        <td><input name="dp" class="form_input" type="number" value="<?php echo $_SESSION['dp'] ?>"></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <button type="sumbit">
                                <i class="fa-solid fa-floppy-disk submit_button"> Zapisz</i>
                            </button>
                        </td>
                    </tr>
                </table>
                
            </form>
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