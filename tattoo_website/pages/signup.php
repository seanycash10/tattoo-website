<html>
    <html>
  <head>
    <title>Brevik Tattoos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
        <?php
            require_once "header.php";
            session_start();
            if (isset($_SESSION['message'])) {
                echo "<div class='bad_message'>{$_SESSION['message']}</div>";
        }
        ?>
        <div class="signin_div">
            <form action="signin_action.php" method="post">
                <p>LOGIN</p>
                USER NAME:
                <input type="text" name="user_name">
                PASSWORD:
                <input type="text" name="password">
                <input type="submit" name="submit">
            </form>
        </div>
        <div class="signin_div">
            <form action="signup_action.php" method="post">
                <p>NEW USERS</p>
                NEW USERNAME:
                <input type="text" name="user_name"><br>
                NEW PASSWORD:
                <input type="text" name="password"
                    alt="must be atleast 8 characters long"><br>
                RE-TYPE PASSWORD:
                <input type="text" name="second_password"><br>
                <input type="submit" name="submit">
  </body> 