<?php
    session_start();

    unset($_SESSION["loggedin"]);
    unset($_SESSION["username"]);

    header("Location: ./../view/index.php");
?>
