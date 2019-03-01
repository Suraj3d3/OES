<?php


    //  $rawdob = htmlentities($_POST['dob']);
    //  $dob = date('Y-m-d', strtotime($rawdob));


    $conn = mysqli_connect('localhost','kcc','exam@KCC');
    mysqli_select_db($conn,'OES');

    //to escape from error thrown by special character in mysql tabel using the below function 
    $roll =  mysqli_real_escape_string($conn,$_POST['roll']); 
    $password = mysqli_real_escape_string($conn,$_POST['password']); 
    $examCode = mysqli_real_escape_string($conn,$_POST['examCode']);

    $qu = "select * from studLoginDetail where roll='$roll' and password='$password'";
    $result= mysqli_query($conn,$qu);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
      session_start();
      $_SESSION['roll']= $roll;
      $_SESSION['examCode']= $examCode;
      echo "1";
    }
    else
    {
        echo "Invalide credentials.";
    }
?>