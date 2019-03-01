<?php

   $conn  = mysqli_connect("localhost","kcc","exam@KCC");
   mysqli_select_db($conn,"OES");

    session_start();
    $roll = $_SESSION['roll'];    
    $qno = $_POST['qno'];
    $ans = $_POST['ans'];
    $examCode =  $_SESSION['examCode'];
    $tableName = $_SESSION['examCode']; //because table name which contain all the answers of all student having name same as examCode
    $quesNo = "ques$qno";

    $check_roll = "select * from $tableName where roll='$roll' ";
    $check_roll_result = mysqli_query($conn,$check_roll);
    $check_roll_num = mysqli_num_rows($check_roll_result);
    if($check_roll_num == 1)
    {
        $update_result_query =  "update $tableName set $quesNo='$ans' where roll='$roll' ";
         mysqli_query($conn,$update_result_query);
      }
    else{
      $insert_new_ans = "insert into $tableName(roll,examCode,$quesNo) values('$roll','$examCode','$ans')";
      mysqli_query($conn,$insert_new_ans);
    }

   
    mysqli_close($conn);

   ?>