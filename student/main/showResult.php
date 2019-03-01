<?php


    session_start();
   if(!isset($_SESSION['roll']))
   {
       header('location:http://localhost/OES/student/studLogin.php');
   }

   $conn  = mysqli_connect("localhost","kcc","exam@KCC");
    mysqli_select_db($conn,"OES");

    $tableName = $_SESSION['examCode']; //because table name which contain all the answers of all student having name same as examCode
    $roll = $_SESSION['roll'];

    // $qu3 = "select * from $tableName where roll='$roll' ";
    $qu3 = "select t1.* , t2.* from $tableName t1 , examDetail t2 where t1.examCode=t2.examCode and roll='$roll' ";
    $res3 = mysqli_query($conn,$qu3);
    $data3 = mysqli_fetch_array($res3);


    $roll = $data3['roll'];
    $paperCode = $data3['paperCode'];
    $noq = $data3['noq'];
    $finalScore = $data3['finalResult'];
    $per = ($finalScore/$noq) * 100;


    $q4 = "insert into $tableName(percentage) value($per) where roll='$roll'";
    mysqli_query($conn,$q4);

    mysqli_close($conn);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/showResult.css">
    <title>KCC::Exam Result</title>
</head>
<body>
     <div class="navigation"> 
        <div>Karim city college</div>
        <div> <input type="button" value="Logout" class="optionBtn" onclick="window.location='submit.php';"> </div>
     </div>
<!-- <br><br><br> -->
<div style="height:12vh;"></div>

     <section>
           
                <br>

                <div class="instructions">
                <h2>Result </h2>
                <table>
                    <tr>
                        <th>Roll Number : </th>
                        <td><?php echo "$roll "; ?> </td>
                    </tr>
                    <tr>
                        <th>Paper Code  : </th>
                        <td><?php echo "$paperCode "; ?> </td>
                    </tr>
                    <tr>
                        <th>Total Number of Questions : </th>
                        <td><?php echo "$noq "; ?> </td>
                    </tr>
                    <tr>
                        <th>Number of Correct Answers : </th>
                        <td><?php echo "$finalScore "; ?> </td>
                    </tr>
                    <tr>
                        <th>Percentage  : </th>
                        <td><?php echo "$per % "; ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                                if($per > 45)
                                {
                                    echo " <img src='../img/pass.png' alt='' style='height:300px;width:300px;' > ";
                                }
                                if($per < 45)
                                {
                                    echo " <img src='../img/fail.png' alt='' style='height:300px;width:300px;' > ";
                                }
                            ?> 
                        </td>
                    </tr>
                </table>
            </div>
            
     </section>

</body>
</html>