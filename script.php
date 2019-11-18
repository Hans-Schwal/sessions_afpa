<?php
    session_start();
    
    $login = $_POST["login"];
    $password = $_POST["password"];

    if ($login=="admin" && $password=="admin") {
        $_SESSION["auth"]="ok";
        header("Location: liste.php");
    }
    else {
        unset($_SESSION["auth"]);
        header("Location: form.php");

    }
