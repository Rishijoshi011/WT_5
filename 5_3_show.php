<?php
    session_start();
    if(isset($_SESSION['name']) || isset($_COOKIE['email_id'])){
        echo "<h1>". $_SESSION['name'] . "</h1>"; 
        echo "<h1>". $_COOKIE['email'] . "</h1>"; 
    } else {
        echo "Nothing to show";
    }

?>
    