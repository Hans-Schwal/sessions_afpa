<?php
    session_start();

    $_SESSION["var_session1"] = "valeur";

    echo session_id();

    echo "<hr>";

    echo $_SESSION["var_session1"];