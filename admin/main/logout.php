<?php

   session_start();
   session_destroy();
   header('Location:http://localhost/OES/admin/main/adminLogin.php');
?>