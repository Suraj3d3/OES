function viewResult()
{
      
    var examCode = document.getElementById("examCode1").value;

    var xhttp = new XMLHttpRequest();
    xhttp.open('GET','viewResult2.php?examCode='+examCode,true);
    xhttp.send();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {         
            document.getElementById("showResultDiv").innerHTML = xhttp.responseText;   
      }
    }



}