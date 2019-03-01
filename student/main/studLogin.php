<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online exam::KCC</title>
    <link rel="stylesheet" href="../style/studLogin.css">
</head>
<body>

    <section>
    <form  method="post">
        <div id="loginDiv">
           <div id="loginHead">Karim city college  <hr> </div>
           
           <div>
                <label for="roll"> Roll Number</label> <br>
                <input type="text" name="roll" id="roll">
           </div>

           <div>
                <label for="examCode"> Exam Code </label> <br>
                <input type="text" name="examCode" id="examCode">
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


     <script src="../script/studLogin.js"></script>
</body>
</html>