<?php
    session_start();
    session_destroy();

    header("location:logout2.php");
?>