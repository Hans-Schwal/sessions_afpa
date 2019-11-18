<?php
    session_start();

    echo session_id();

    echo "<hr>";

    echo $_SESSION["var_session1"];