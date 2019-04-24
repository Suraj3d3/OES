<?php
  session_start();
  $roll = $_SESSION['roll'];
  if(!isset($_SESSION['roll']))
  {
     header('location:http://localhost/OES/student/main/studLogin.php');
    //  header('location:https://surajchaudhary.me/OES/student/main/studLogin.php');
  }

       $roll = $_SESSION['roll'];
    
        $conn = mysqli_connect("localhost","kcc","exam@KCC123");
        mysqli_select_db($conn,"OES");
        $q = "select name from studDetail where roll='$roll' ";
        $result = mysqli_query($conn,$q);
        $raw = mysqli_fetch_array($result);
        $name = $raw['name'];


        $examCode = $_SESSION['examCode'];
        $q1 = "select * from examDetail where examCode='$examCode' ";
        $result1 = mysqli_query($conn,$q1);
        $raw1 = mysqli_fetch_array($result1);
        $examDate = $raw1['examDate'];
        $paperCode = $raw1['paperCode'];
        $examDuration = $raw1['examDuration'];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/instruction.css">
    <title>KCC::Exam</title>
</head>
<body>
     <div class="navigation"> 
        <div>Karim city college</div>
        <div> Welcome<span style="color:#ffb142;"> <?php echo $name; ?> </span> </div>
     </div>
<!-- <br><br><br> -->
<div style="height:12vh;"></div>

     <section>
           <div class="instructions">
                <h2>Your Exam Details</h2>
                <ul>
                    <li>Exam Code : <?php echo "$examCode <br>"; ?></li>
                    <li>Exam Date : <?php echo "$examDate <br>" ?></li>
                    <li>Paper Code: <?php echo "$paperCode <br>" ?></li>
                </ul>
            </div>
                <br>
            <div class="instructions">
                <h2>Instructions</h2>
                <ul>
                    <li>You have <?php echo $examDuration; ?> minutes to answer all the questions.</li>
                    <li>Once the time exceed to the given time , all the answers will be automatically submitted.</li>
                    <li>All questions are compulsory.</li>
                    <li>In case of any kind of system crisis immediately call the examination incharge.</li>     
                </ul>
            </div>
     </section>

     <div class="box">
         <input type="checkbox" name="readInstructions" id="readInstructions" class="check" onclick="checkBox();">
         <label for="readInstructions" class="check">I have read all the given instructions and i am ready to start the online examination.</label>
            <br> <br>
         <input type="button" value="Ready to Proceed" onclick="checkmark();">
     </div>
    


     <script src="../script/instructions.js"></script>
</body>
</html>