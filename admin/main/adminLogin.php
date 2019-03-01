<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KCC-Exam Admin</title>
    <link rel="stylesheet" href="../style/adminLogin.css">
</head>
<body>

    <section>
    <form  method="post">
        <div id="loginDiv">
           <div id="loginHead"> Examination Control <br> Karim city college <hr> </div>
           
           <div>
                <label for="roll"> Username</label> <br>
                <input type="text" name="username" id="username">
           </div>

           <div>
               <label for="password">Password</label> <br>
                <input type="password" name="password" id="password">
               
           </div>

           <div>
               <input type="button" value="Login" onclick="checkLogin();">
               <span id="loginStatus"></span>
           </div>
        
        </div>
    </form>  
     </section>   


     <script src="../script/adminLogin.js"></script>
</body>
</html>