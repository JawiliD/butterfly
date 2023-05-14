<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li id="admin" class="admin"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Name of Client</h4></li>
            
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR </h1>
            <h1>WILDLIFE BUTTERFLY</h1>       

        <hr>        
        <a id="profile">PROFILE</a>
        <a href="client-application-status.php">APPLICATION</a>              
        <a href="client-report.php">REPORTS</a>       
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->    
        <?php date_default_timezone_set("Asia/Manila"); echo date("l Y/m/d") ?>
        <div></div>
        <div class="info">
            <table>
                <tr>
                    <td style="width:20em;"><h2>Client Details</h2></td>
                    <td style="width:20em;"><h2>Business Details</h2></td>
                </tr>
                <tr>
                    <td><label>First Name</label><br>
                    <input type="text" placeholder="First Name" required="required"></td>
                    <td><label>Business Name</label><br>
                    <input type="text" placeholder="Business Name" required="required"></td>
                    
                </tr>
                <tr>
                <td><label>LAst Name</label><br>
                    <input type="text" placeholder="Last Name" required="required"></td>
                    
                </tr>
                <tr>
                    <td><label>Address</label><br>
                    <input type="text" placeholder="Address" required="required"></td></td>
                    
                </tr>
                <tr>
                    <td><label>Contact Number</label><br>
                    <input type="text" placeholder="Contact Number" required="required"></td></td>
                    
                </tr>
                <tr>
                    <td><label>Username</label><br>
                    <input type="text" placeholder="Business Name" required="required"></td></td>
                    
                </tr>
                <tr>
                    <td><label>Email Address</label><br>
                    <input type="text" placeholder="Business Name" required="required"></td></td>
                    <td><button class="btn greenBtn">SAVE</button>
                    <button class="btn redBtn"><a href="client-profile.php">BACK</a></button>
                </tr>
                
            </table>
        </div>    

    </div>
    
    
</body>
</html>