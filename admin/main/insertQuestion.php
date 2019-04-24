<?php

   $conn  = mysqli_connect("localhost","kcc","exam@KCC123");
   mysqli_select_db($conn,"OES");

    $qno =  mysqli_real_escape_string($conn,$_POST['qno']);
    $qno = "ques$qno"; 
    $question = mysqli_real_escape_string($conn,$_POST['question']); 
    $opt1 = mysqli_real_escape_string($conn,$_POST['opt1']); 
    $opt2 = mysqli_real_escape_string($conn,$_POST['opt2']); 
    $opt3 = mysqli_real_escape_string($conn,$_POST['opt3']); 
    $opt4 = mysqli_real_escape_string($conn,$_POST['opt4']); 
    $ans = mysqli_real_escape_string($conn,$_POST['ans']); 
    session_start();
    $examCode = $_SESSION['examCode'];

    $q = "insert into questions(qno,question,opt1,opt2,opt3,opt4,ans,examCode) values('$qno','$question','$opt1','$opt2','$opt3','$opt4','$ans','$examCode')";
    mysqli_query($conn,$q);
    mysqli_close($conn);

   ?>