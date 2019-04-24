<?php
    session_start();
    session_destroy();
    header('location:http://localhost/OES/student/main/studLogin.php');
    // header('location:https://surajchaudhary.me/OES/student/main/studLogin.php');
?>