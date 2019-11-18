<?php
    session_start();

    if (!isset($_SESSION["auth"]) || $_SESSION["auth"]!="ok") {
        header("Location: form.php");
    }
?>