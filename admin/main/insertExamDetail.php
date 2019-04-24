<?php

   $conn  = mysqli_connect("localhost","kcc","exam@KCC123");
   mysqli_select_db($conn,"OES");

    $examCode =  mysqli_real_escape_string($conn,$_GET['examCode']); 
    $paperCode = mysqli_real_escape_string($conn,$_GET['paperCode']); 
    $noq = mysqli_real_escape_string($conn,$_GET['noq']); 
    $noq = (int)$noq;
    $duration_hour = $_GET['duration_hour'];
   //  $duration_hour = (int)$duration_hour;

    $duration_minute = $_GET['duration_minute'];
   //  $duration_minute = (int)$duration_minute;

    $duration = ($duration_hour * 60) + $duration_minute; //total duration in minutes
    
    $date=$_GET['examDate'];
    $examDate=date("Y-m-d H:i:s",strtotime($date));

    session_start();
    $_SESSION['examCode'] = $examCode ; 

    $q = "insert into examDetail(examCode,paperCode,examDate,noq,examDuration) values('$examCode','$paperCode','$examDate','$noq',$duration)";
    mysqli_query($conn,$q);


    $table_name = $examCode;
    $create_table_query = "create table $table_name 
                     (
                         roll varchar(10),
                         examCode varchar(10),
                         percentage int,
                         finalResult int  DEFAULT 0
                     )";

      mysqli_query($conn,$create_table_query);

     for($i=1;$i<=$noq;$i++)
     {
        $field = "ques$i";
        $qu = "alter table $table_name add column $field char(4)";
        mysqli_query($conn,$qu);
     }  

               

    mysqli_close($conn);

   ?>