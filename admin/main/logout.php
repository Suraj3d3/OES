<?php

   session_start();
   session_destroy();
   header('Location:http://localhost/OES/admin/main/adminLogin.php');
   // header('Location:https://surajchaudhary.me/OES/admin/main/adminLogin.php');

?>