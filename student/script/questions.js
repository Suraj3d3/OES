function sendAnswer(ans,qno)
{
        var xhttp = new XMLHttpRequest();

        xhttp.open('POST','sendAnswer.php',true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("qno="+qno+"&ans="+ans);

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {         
            
            
            
        }

    }
}


// Timer script starts here

var min = document.getElementById("minBox").innerHTML;
min = parseInt(min);
var sec = 60; 
// var min=120;
function time(){
       if(min<=10)
       {
        document.getElementById('timerDiv').style.color= "#ff7675";
       }
       if(min==0)
       {
           
           clearInterval(timerId);
           document.getElementById('timerDiv').innerHTML= "Time Up";
       }
        if(sec>0)
        {
            document.getElementById('secBox').innerHTML= --sec;
            // console.log(i--);
        }	
        if(sec==0){
            document.getElementById('minBox').innerHTML= --min;
            sec=60;
        }
    }
    
    var timerId = setInterval(time,1000);

   function endTimer(){  //close the timer when user clicks on submit button
    clearInterval(timerId);
    document.getElementById('timerDiv').innerHTML= "Successfuly submitted";
   }
// Timer script ends here