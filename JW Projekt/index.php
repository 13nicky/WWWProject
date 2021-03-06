<?php

session_start();


if((isset($_SESSION['isLoggedIn'])) && ($_SESSION['isLoggedIn']))
{
  header('Location: main.php');
}

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
    <!-- Other elements -->
    <script src="https://kit.fontawesome.com/afde58873f.js" crossorigin="anonymous"></script>
    <title>Temporary title</title>
    
  </head>
  <body>
    <div id="register_form" class="register_form">
        <div class="register_form_window">
          <i class="close_button fa-solid fa-xmark"  onclick="close_form(document.getElementById('register_form'));"></i>
          <form method="post" action="scripts/PHP/register.php">
            <h1>Rejestracja</h1>
            <span>Nazwa użytkownika:</span>
            <input name="rlogin" type="text" placeholder="Nazwa użytkownika" required>
            <span>E-Mail:</span>
            <input name="remail" type="email" placeholder="E-Mail" required>
            <span>Hasło:</span>
            <input name="rpassword" type="password" placeholder="Hasło" required>
            <input type="submit" value="Zarejestruj się">
          </form>
        </div>
    </div>
    <div id="container">
      <div class="banner d-flex justify-content-center">
        <img class="banner_logo p-2" src="images/250.png">
        <div class="banner_text p-2">GRIND TRACKER</div>
      </div>
      <table class="login_form d-flex justify-content-center text-center">
        <form method="post" action="scripts/PHP/login.php">
          <tr>
            <th><p>Zaloguj się,</p><p> aby kontynuować.</p></th>
          </tr>
          <tr>
            <td>Login</td>
          </tr>
          <tr>
            <td><span class="input_obj"><input name="login" type="text" class="rounded"><i class="input_icon fa-solid fa-user"></i></span></td>
          </tr>
          <tr>
            <td>Hasło</td>
          </tr>
          <tr>
            <td><span class="input_obj"><input name="password" type="password" class="rounded"><i class="input_icon fa-solid fa-lock"></i></span></td>
          </tr>
          <tr>
            <td>
              <button type="submit" class="rounded">Zaloguj się</button>
            </td>
          </tr>
          <tr>
            <td>
              Nie masz konta? <span class="register_button" onclick="open_form(document.getElementById('register_form'));">Zarejestruj się!</span>
            </td>
          </tr>
        </form>
      </table>
    </div>
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="scripts/JavaScript/Popup_form.js"></script>
  </body>
</html>