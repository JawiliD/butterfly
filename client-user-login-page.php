<?php
include 'config.php';

/* Functions */
function pathTo($destination) {
  echo "<script>window.location.href = '/butterfly/$destination.php'</script>";
}

if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
  /* Set Default Invalid */
  $_SESSION['status'] = 'invalid';
}

if ($_SESSION['status'] == 'valid' AND $_SESSION['role'] == 'client') {
  pathTo('client-home');
}

if (isset($_POST['login'])) {
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

  if (empty($email) || empty($password)) {
    echo "Please fill up all fields";
  } else {
    $queryValidate = "SELECT * FROM `user_tb` WHERE email = '$email' AND password = '$password'";
    $sqlValidate = mysqli_query($con, $queryValidate);
    $rowValidate = mysqli_fetch_array($sqlValidate);

    if ($rowValidate) {
      $role = $rowValidate['role'];
      $_SESSION['status'] = 'valid';
      $_SESSION['email'] = $rowValidate['email'];
      $_SESSION['fname'] = $rowValidate['firstName'];
      $_SESSION['role'] = $rowValidate['role'];
      $_SESSION['id'] = $rowValidate['id'];
      

      if ($role == 'client') {
        echo "<script>window.location.href = '/butterfly/client-home.php'</script>";
      } else if ($role == 'admin') {
        echo "<script>window.location.href = '/butterfly/admin-profile.php'</script>";
      }
    } else {
      $_SESSION['status'] = 'invalid';
      echo 'Invalid Credential';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client/user login page</title>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
</head>
<style>
    
html {  
    font-family: Calibri, Helvetica, sans-serif;  
    background: #3C6E71;
; 
  }  

.logo {
    width: 100px;
    height: 120px;
    margin-left: 190px;
}

button {   
         background-color:#284B63;
         width: 30%;  
          color: white;   
          padding: 15px;   
          margin: 10px 15px;   
          border: none;   
          cursor: pointer; 
          margin-left: 180px;
        }   
form { 

       background-color:#EAE0D5;
       width:35rem;
       margin: auto;
       margin-top: 30px;
       border-radius: 20px; 
       box-shadow: 6px 6px 4px 0px #00000066;
;  
}   

input[type=text], input[type=password] {   
          width: 100%;   
          margin: 8px 0;  
          padding: 12px 20px;   
          display: inline-block;   
          border-color: 1px black;
          box-sizing: border-box;
          border-radius: 5px;   
      }  
      
button:hover {   
          opacity: 0.7;   
      }  

.loginbtn {    
          margin: 10px 5px;  
          margin-left: 65px;
          width: 75%;      
          cursor: pointer; 
          background: #283618;
          border-radius: 5px;

}   
           
.container {   
          padding: 25px;   
 
}   

.createacc, .fpass{
          text-decoration: none;
          color: #000;
          margin-left: 180px;
}

.fpass{
    margin-left:260px;
}
.header li{
    display:inline-block;   
    padding:.5em 1em;
}
.header li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    padding:.5em 1em;
    border-radius:1em;
}

.header li a:hover{
    background-color:white;
    color:black;
}
</style>

<body>
    <ul class="header">
        <li><a href="client-user-login-page.php">Login</a></li>
        <li><a href="client-register-for-account-page.php">Sign Up</a></li>
        </ul>
    <form method="POST">  
        <div class="container"> 
            <img class="logo" src="image/logo.png" alt="butterfly-logo">
            <h1>User Login </h1> 
            <i class="fa-solid fa-envelope"></i><label>Email</label>   
            <input type="text" placeholder="Email" name="email"required>  
            <i class="fa-solid fa-key"></i><label>Password </label>   
            <input type="password" placeholder="Password" name="password" required>  
            <button type="submit" name="login" class="loginbtn"> LOGIN</button><br><br>
            <a class="createacc" href="">Create New Account? </a><br><br><br>
            <input type="checkbox" >Remember Me   
            <a class="fpass" href="">Forgot Password?</a>
        </div>   
    </form>     

</body>

</html>