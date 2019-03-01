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