function checkmark()
{
    var ch = document.getElementById("readInstructions").checked;
    if(ch==true)
    {
       window.location="http://localhost/OES/student/main/questions.php";
    //    window.location="https://surajchaudhary.me/OES/student/main/questions.php";
    }
    else
    if(ch==false)
    {
        document.getElementsByClassName("check")[0].style.color="#ff4d4d";
        document.getElementsByClassName("check")[1].style.color="#ff4d4d";
    }
}

function checkBox()
{
        document.getElementsByClassName("check")[0].style.color="#fff";
        document.getElementsByClassName("check")[1].style.color="#fff";
}

