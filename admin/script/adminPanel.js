function logout()
{
    window.location="http://localhost/OES/admin/main/logout.php";
}

var count=1; //a variable to keep count of question number

//AJAX call to insert questions on database
function insertQuestion()
{
    var qno = document.getElementById("qno").value;
    qno = parseInt(qno);
    var question = document.getElementById("qu").value;
    var opt1 = document.getElementById("opt1").value;
    var opt2 = document.getElementById("opt2").value;
    var opt3 = document.getElementById("opt3").value;
    var opt4 = document.getElementById("opt4").value;
    var ans = document.getElementById("ans").value;

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST','insertQuestion.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("qno="+qno+"&question="+question+"&opt1="+opt1+"&opt2="+opt2+"&opt3="+opt3+"&opt4="+opt4+"&ans="+ans);
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {         
           qno = qno+1;
          document.getElementById("qno").value= qno;
          document.getElementById("qu").value ="";  
          document.getElementById("opt1").value = "";
          document.getElementById("opt2").value = "";
          document.getElementById("opt3").value = "";
          document.getElementById("opt4").value = "";
          
      }
    }

}


//AJAX call to insert exam details on database
function insertExamDetail()
{
    alert("Now you can add questions below");
    var examCode = document.getElementById("examCode").value;
    var paperCode = document.getElementById("paperCode").value;
    var examDate = document.getElementById("examDate").value;
    var noq = document.getElementById("noq").value;

    var xhttp = new XMLHttpRequest();
    xhttp.open('GET','insertExamDetail.php?examCode='+examCode+'&paperCode='+paperCode+'&examDate='+examDate+'&noq='+noq,true);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
    // xhttp.send("examCode="+examCode+"&paperCode="+paperCode+"&examDate="+examDate);
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {         
            document.getElementById("examCode").readOnly = true;
            document.getElementById("paperCode").disabled = true;
            document.getElementById("examDate").readOnly  =true;    
            document.getElementById("noq").readOnly  =true;    
            document.getElementById("submit_Exam_Detail").readOnly =true;    
      }
    }

}