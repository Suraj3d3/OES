<?php
   session_start();
   if(!isset($_SESSION['username']))
   {
       header('Location:http://localhost/OES/admin/main/adminLogin.php');
      //  header('Location:https://surajchaudhary.me/OES/admin/main/adminLogin.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/adminPanel.css">
    <title>KCC - Exam Admin</title>
</head>
<body>

     <div class="navigation"> 
        <div>Karim city college</div>
        <div>  <input type="button" value="Set Question" class="optionBtn" onclick="window.location='adminPanel.php';">   </div>
        <div>  <input type="button" value="View Results" class="optionBtn" onclick="window.location='viewResult.php';">   </div>
        <div>  <input type="button" value="Logout" class="optionBtn" onclick="logout()";>   </div>
     </div>
    
     <div style="height:10vh;"></div>
 
      <form method="get">
        <div class="setQuestion">
            <div>
              <label for="examCode">Enter Exam Code</label> &nbsp; &nbsp;
              <input type="text" name="examCode" id="examCode" placeholder="Exam Code">
            </div>

            
                <div>     
                    <label for="paperCode">Select Paper Code</label> &nbsp; &nbsp;
                    <select name="paperCode" id="paperCode">
                      <option value="9A">Web Technology(9A)</option>
                      <option value="10A">Java Programming(10A)</option>
                    </select>
                </div>

                <div>
                   <label for="noq"> Number of questions</label> &nbsp; &nbsp;
                  <input type="text" name="noq" id="noq" placeholder="Number of questions">
                </div>
             
                <div>
                   <label for="duration"> Exam Duration</label> &nbsp; &nbsp;
                  <input type="number" name="duration_hour" id="duration_hour" placeholder="Hours" min=0 max=5> &nbsp;&nbsp;
                  <input type="number" name="duration_minute" id="duration_minute" placeholder="Minutes" min=0 max=59>
              </div>

              <div>      
                <label for="examDate">Select exam date</label> &nbsp; &nbsp; &nbsp;
                <input type="date" name="examDate" id="examDate">
                <img src="../img/add.png" alt="" id="submit_Exam_Detail" onclick="insertExamDetail(); enableQuestions();">
              </div>  
            
        </div>
        </form>

          <section>
              <form method="post">
              <div class="questions">
              <label >Question number </label> <input type="text" value="1" id="qno" readonly > <br><br>
                 <label for="">Write down the question here </label>  &nbsp;
                 <input type="text" name="qu" id="qu" placeholder="Question...."> <br> <br>
                 <label for="opt1"> Add option 1 </label> <input type="text" name="opt1" id="opt1" placeholder="option 1...."> <br> <br>
                 <label for="opt2"> Add option 2 </label> <input type="text" name="opt2" id="opt2" placeholder="option 2...."> <br> <br>
                 <label for="opt3"> Add option 3 </label> <input type="text" name="opt3" id="opt3" placeholder="option 3...."> <br> <br>
                 <label for="opt4"> Add option 4 </label> <input type="text" name="opt4" id="opt4" placeholder="option 4...."> <br> <br>
                 <label for="opt4"> Add Answer </label> 
                 <select name="ans" id="ans">
                      <option value="opt1">Option 1</option>
                      <option value="opt2">Option 2</option>
                      <option value="opt3">Option 3</option>
                      <option value="opt4">Option 4</option>
                    </select>  
                   
                 <img src="../img/add.png" alt="" id="submit_Add" onclick="insertQuestion();">           
               </div>
               </form>
          </section>



     <script src="../script/adminPanel.js"></script>
</body>
</html>