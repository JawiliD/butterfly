<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client/register for account page</title>
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>

   
</head>
<style>
    
html {  
    font-family: Calibri, Helvetica, sans-serif;  
    background: #3C6E71;
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
    border-radius: 1em; 
}   

form { 
    background-color:#EAE0D5;
    width:35rem;
    height: 50rem;
    margin: auto;
    margin-top: 30px;
    border-radius: 20px; 
    box-shadow: 6px 6px 4px 0px #00000066;
}   

input[type=text], input[type=password] {   
    width: 100%;   
    margin: 8px 0;  
    padding: 12px 20px;   
    display: inline-block; 
    border-radius:1em;  
    border: none;
    box-sizing: border-box;
      
}  

button:hover, .nextbtn:hover {   
    opacity: 0.7;   
}  

.nextbtn {     
    text-align:center;
    margin-left:5em;   
    padding:1em 10em;     
    cursor: pointer; 
    background: #283618;
    border-radius:1em;
}   
           
.container {   
    padding: 25px;   
}   

.link{
  text-decoration:none;
  color:white;
  
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
            <h1> Account Registration </h1> 
            <h2>Permit Verification</h2>  
            <label>Wildlife Farm Permit</label>   
            <input type="text" name="farmNumber" placeholder="wildlife farm permit number" required>  
            <label>Wildlife Collector Permit</label>   
            <input type="text" name="collectorNumber" placeholder="wildlife collector permit number" required>  
            <button type="submit" name="verify">Verify</button><br>
            
            
            <?php
            include 'config.php';

            if(isset($_POST['verify'])){
                $wcpNumber = $_POST['collectorNumber'];
                $wfpNumber = $_POST['farmNumber'];

                $queryValidateCollector = "SELECT * FROM `wcp_permit`";
                $sqlValidateCollector = mysqli_query($con, $queryValidateCollector);
                $rowCollector = mysqli_fetch_assoc($sqlValidateCollector);

                $queryValidateFarm = "SELECT * FROM `wfp_permit`";
                $sqlValidateFarm = mysqli_query($con, $queryValidateFarm);
                $rowFarm = mysqli_fetch_assoc($sqlValidateFarm);

                if(($wcpNumber == $rowCollector['wcpNo']) && ($wfpNumber == $rowFarm['wfpNo']) && ($rowFarm['permitStatus'] == 'activated') && ($rowCollector['permitStatus'] == 'activated') ){
                    echo '<div style="margin:auto;margin-top:1em;text-align:center;width:50%;border:2px solid #027A00;border-radius:2em;">
                    <p style="font-size:24px;font-weight:bold; color:#027A00; margin:0em; margin-top:1em;">Your permit is Valid</p>
                    <i class="fa-sharp fa-solid fa-circle-check fa-beat-fade fa-2xl" style="margin:1em auto; color:#027A00;"></i></div><br><br><br>';
                    echo '<a href="client-register-for-account-page2.php" class="link nextbtn">Next</a>';
                } else {
                    echo '<div style="margin:auto;margin-top:1em;text-align:center;width:50%;border:2px solid #E63946;border-radius:2em;">
                    <p style="font-size:24px;font-weight:bold; color:#E63946; margin:0em; margin-top:1em;">Your permit is Invalid</p>
                    <i class="fa-sharp fa-solid fa-circle-xmark fa-beat-fade fa-2xl" style="margin:1em auto; color:#E63946;"></i>
                    </i></div>';
                }
            };
            ?>
                
        </div>   
    </form>     
</body>
</html>
