<?php
include 'config.php';

// echo $_SESSION['status'];

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
  }else if($_SESSION['status'] == 'valid' AND $_SESSION['role'] == 'admin') {
    pathTo('admin-profile');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client/welcome page</title>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<style>
    html{
    background-color:#EAE0D5;
    font-family: Arial, Helvetica, sans-serif;
    height:100%;
}

header{
    position: absolute;

}

.logo {
    position: absolute;
    width: 100px;
    left: 50px;
    top: 1em;
}

h1{
    width: 35%;
    height: 100px;
    margin-top: 50px;
    margin-left: 6em;
    font-weight: bold;
    font-size: 30px;
    line-height: 39px;
    color:black;
    text-align: center;
} 

.logo2{
    position: absolute;
    top: 20px;
    right: 50px;
    width:120px;

}

hr{
    border:3px solid black;
}

.content{
    background-color:#283618;
    width: 600px;
    height: 350px;
    margin-top: 2em;
    margin-left: 5em;
    color:white;
    text-align: justify;
    line-height:1.6;
    padding: 1em;
    box-shadow: 6px 6px 4px rgba(0, 0, 0, 0.37);
    border-radius: 28px;

}
.content h3{
    text-align: center;
    font-size: 35px;
}

.nav{
    text-decoration: none;
    position: absolute;
    top: 300px;
    right:350px;
    width: 180px; 
}

.nav p{
    font-weight: bold;
}

.nav a{
    text-decoration: none;
    color:white;
    padding: .5em 1em;
    line-height:3;
    box-shadow: 6px 6px 4px rgba(0, 0, 0, 0.37);
    border-radius: .5em;
    background-color:#283618;
}
.blue-butterfly{
    width:500px;
    z-index:5;
    position:absolute;
    bottom:0;
    right:0;
    


}
</style>
<body>
    <div class="header">
    <img class="logo" src="image/logo.png" alt="butterfly-logo">
    <h1>LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
    <img class="logo2" src="image/logo2.png" alt="butterfly-logo">
    <hr>
    </div>

    <div class="content">
        <h3>ABOUT US</h3>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    </div>

    <div class="nav">
        <p>Proceed to...</p>
        <a href="client-register-for-account-page.php">Register &#x2192;</a><br>
        <a href="client-user-login-page.php">Login &#x2192;</a>
    </div>

    <div class="footer">
        <img class = "blue-butterfly" src="image/butterfly.png" alt="blue-butterfly">
    </div>
</body>

</html>