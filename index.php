<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marriage Regestration System</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>


<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  if($user == 'farjana' && $pass == 123){
      header("Location:firstpage.php");
      echo "login successfull";
  }else{
      echo "<h2>login fail......</h2>";
  }
}

?>


<div class="bg">
<div class="login_box">
<div class="login_area">
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="#">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="user" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form>     
</div>    
</body>    
</html>     
</div>
</div>


  
</body>
</html>