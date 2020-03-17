<?php
    session_start();
    $name  = $_SESSION['username'];
    session_destroy();
    echo "hello $name, you have  logged out succesfully! , <a href= '../login.php'> Click me </a> to redirect to the login page!"
?>