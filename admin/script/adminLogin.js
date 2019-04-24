function checkLogin()
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var xhttp = new XMLHttpRequest();

    xhttp.open('POST','loginValidate.php',true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("username="+username+"&password="+password);

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {         
           
            if(this.responseText==1)
            {
              window.location="http://localhost/OES/admin/main/adminPanel.php";
              // window.location="https://surajchaudhary.me/OES/admin/main/adminPanel.php";
            }
            else
            {
              document.getElementById("loginStatus").innerHTML = this.responseText;
            }
          
      };

}
}