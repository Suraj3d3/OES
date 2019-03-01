<?php

    $conn = mysqli_connect('localhost','kcc','exam@KCC');
    mysqli_select_db($conn,'OES');

    //to escape from error thrown by special character in mysql tabel using the below function 
    $username =  mysqli_real_escape_string($conn,$_POST['username']); 
    $password = mysqli_real_escape_string($conn,$_POST['password']); 

    $qu = "select * from adminLoginDetail where username='$username' and password='$password'";
    $result= mysqli_query($conn,$qu);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
      session_start();
      $_SESSION['username']= $username;
      echo "1";
    }
    else
    {
        echo "Invalide credentials.";
    }
?>