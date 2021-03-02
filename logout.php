<?php
    session_start();
    session_destroy();
    unset($_SESSION['session']);
    unset($_SESSION['order_session']);
    header("location: index.php");
    exit;       
?>