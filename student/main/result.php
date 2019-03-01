<?php

   session_start();
   if(!isset($_SESSION['roll']))
   {
       header('location:http://localhost/OES/student/studLogin.php');
   }

   $conn  = mysqli_connect("localhost","kcc","exam@KCC");
   mysqli_select_db($conn,"OES");

    
    $roll = $_SESSION['roll'];    
    // $qno = $_POST['qno'];
    // $ans = $_POST['ans'];
    $examCode =  $_SESSION['examCode'];
    $tableName = $_SESSION['examCode']; //because table name which contain all the answers of all student having name same as examCode
    // $quesNo = "ques$qno";

    $actual_ans_query= "select qno,ans from questions";
    $actual_ans_result = mysqli_query($conn,$actual_ans_query);
    $actual_ans_num = mysqli_num_rows($actual_ans_result);
    $t = "ques";
    for($i=1;$i<=$actual_ans_num;$i++)
    {
        $row1=mysqli_fetch_array($actual_ans_result);
        $actual_ans = $row1['ans'];
        // $t.$i = $row1['ans'];
        $temp = $t.$i;
        $stud_ans_query = "select $temp from $tableName where roll='$roll' ";
        // $stud_ans_query = "select $temp from $tableName where roll='$roll' ";
        $stud_ans_result = mysqli_query($conn,$stud_ans_query);
        $row2 = mysqli_fetch_array($stud_ans_result);
        $given_ans = $row2["$temp"];

        if($actual_ans == $given_ans)
        {
            $qu = "select finalResult from $tableName where roll='$roll' ";
            // $qu = "select finalResult from $tableName where roll='$roll' ";
            $res = mysqli_query($conn,$qu);
            $data = mysqli_fetch_array($res);
            $finalResult = $data['finalResult'];
            $finalResult = $finalResult + 1;
            $qu1 = "update $tableName set finalResult = $finalResult where roll='$roll' ";
            mysqli_query($conn,$qu1);
        }

    }

    // $qu3 = "select finalResult from $tableName where roll='$roll' ";
    // $res3 = mysqli_query($conn,$qu3);
    // $data3 = mysqli_fetch_array($res3);
    // $finalScore = $data3['finalResult'];

    // $per = ($finalScore/$actual_ans_num) * 100;

    mysqli_close($conn);

    header('location:http://localhost/OES/student/main/showResult.php');
   ?>

   



