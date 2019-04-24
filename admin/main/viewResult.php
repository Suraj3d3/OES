<?php
   session_start();
   if(!isset($_SESSION['username']))
   {
       header('Location:http://localhost/OES/admin/main/adminLogin.php');
    //    header('Location:https://surajchaudhary.me/OES/admin/main/adminLogin.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/viewResults.css">
    <title>KCC - Exam Admin</title>
</head>
<body>

     <div class="navigation"> 
        <div>Karim city college</div>
        <div>  <input type="button" value="Set Question" class="optionBtn" onclick="window.location='adminPanel.php';">   </div>
        <div>  <input type="button" value="View Results" class="optionBtn" onclick="window.location='viewResult.php';">   </div>
        <div>  <input type="button" value="Logout" class="optionBtn" onclick="logout()">   </div>
     </div>
    
     <div style="height:10vh;"></div>
     
     <div class="checkResultDiv">
            <form  method="get">
                <label for="examCode">Enter Exam Code to Check result </label> &nbsp; &nbsp;
                <input type="text" name="examCode" id="examCode1" placeholder="Exam Code">
               &nbsp; &nbsp; &nbsp;
                <input type="button" value="Search" onclick="viewResult();" class="optionBtn">
            </form>
     </div>
     <div id="showResultDiv"> </div>


  <script src="../script/viewResult.js"></script>
 </body>
 </html>