<?php
session_start();
$_SESSION['authenticated'] = false;

if ( isset($_POST['password'])) {
    $password = $_POST['password'];
    if($password == "1"){
        $_SESSION['authenticated'] = true;
        
        header("Location: colorSelection.php");
        exit();
    }

    header("Location: wrongAuth.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form method="post">
            <label for="password">Conferma che sei un docente</label>
            <div>
            <input type='password' name='password' id="password" required>
            <div>
            <input type="submit" name="button" class="button" value="Calcola" />
            <div>
        </form>
    </body>
</html>