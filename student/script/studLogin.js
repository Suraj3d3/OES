function checkLogin()
{
    var roll = document.getElementById("roll").value;
    var password = document.getElementById("password").value;
    var examCode = document.getElementById("examCode").value;
    var xhttp = new XMLHttpRequest();

    xhttp.open('POST','loginValidate.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("roll="+roll+"&password="+password+"&examCode="+examCode);

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {         
           
            if(this.responseText==1)
            {
              window.location="http://localhost/OES/student/main/instruction.php";
              // window.location="https://surajchaudhary.me/OES/student/main/instruction.php";
            }
            else
            {
              document.getElementById("loginStatus").innerHTML = this.responseText;
            }
          
      };

}
}