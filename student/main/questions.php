<?php
  
   session_start();
   if(!isset($_SESSION['roll']))
   {
      header('location:http://localhost/OES/student/main/studLogin.php');
   }

  $conn = mysqli_connect("localhost","kcc","exam@KCC");
  mysqli_select_db($conn,"OES");

  $qu = "select * from questions";

  $result = mysqli_query($conn,$qu);

  $num = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/questions.css">
    <title>KCC::online exam</title>
</head>
<body>
    
     <div class="navigation"> 
        <div>Karim city college</div>
        <div><span style="color:#ffb142;">Time Left:-</span>  58m:14s</div>
        <div> <input type="button" value="Submit" class="optionBtn" onclick="window.location='result.php';"> </div>
     </div>
  
     <div style="height:10vh;"></div>
 
     <div class="questionContainer">
             <?php
                for($i=0;$i<$num;$i++)
                {
                   $questionRow =  mysqli_fetch_array($result);
                   $qno =  substr($questionRow['qno'] , 4); //to remove 'ques' from 'ques1' and get question number as 1,2,3 instead of ques1,ques2
                  //  $qno =  $questionRow['qno'];
                   $opt1 = $questionRow['opt1'];
                   $opt2 = $questionRow['opt2'];
                   $opt3 = $questionRow['opt3'];
                   $opt4 = $questionRow['opt4'];
             ?>
             <div class="quesDiv">
                    <b> <?php   echo " $qno ) "; ?> </b>
                    <b> <?php   echo  $questionRow['question']; ?> </b>
                    <p> <?php   echo "<input type='radio' name='$qno' value='opt1' onclick='sendAnswer(this.value,this.name);'>". $opt1; ?> </p>
                    <p> <?php   echo "<input type='radio' name='$qno' value='opt2' onclick='sendAnswer(this.value,this.name);'>". $opt2; ?> </p>
                    <p> <?php   echo "<input type='radio' name='$qno' value='opt3' onclick='sendAnswer(this.value,this.name);'>". $opt3; ?> </p>
                    <p> <?php   echo "<input type='radio' name='$qno' value='opt4' onclick='sendAnswer(this.value,this.name);'>". $opt4; ?> </p>
                   
             </div>

                <?php } ?>
     </div>



     <script src="../script/questions.js"></script>
</body>
</html>