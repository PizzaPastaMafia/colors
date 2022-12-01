<?php
    session_start();
    if($_SESSION['authenticated'] != true){
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="post" action="logIn.php">
            <label for="password">autenticazione non corretta</label>
            <div>
            <input type="submit" name="button" class="button" value="Ritorna al Log In" />
            <div>
        </form>
    </body>
</html>