<?php
    session_start();

    unset($_SESSION['login_userName']);

    header('Location: index.php');
?>