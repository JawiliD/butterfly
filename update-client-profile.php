<?php
 include 'config.php';
 $id = $_SESSION['id'];
 $queryUser = "SELECT * from `user_tb` where id = $id";
 $sqlUser = mysqli_query($con, $queryUser);
 $row = mysqli_fetch_array($sqlUser);
 

 if(isset($_POST['save'])){  
    
    $username=$_POST['username'];   
    $email=$_POST['email'];   
    $firstname=$_POST['firstname'];   
    $surname=$_POST['surname'];   
    $address=$_POST['address'];   
    $contact=$_POST['contact'];   
    $businessName=$_POST['businessName'];      

    $queryupdateuser="UPDATE `user_tb` set username='$username', email='$email', firstName='$firstname', surname='$surname', address='$address', contact='$contact',businessName='$businessName' where id=$id";
    $sqlupdateuser=mysqli_query($con,$queryupdateuser);
    if($sqlupdateuser){
        header('location: client-profile.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

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
            <li ><h4></i><a href="logout.php" class="link">Logout</a></h4></li>       
            
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
        
        <div></div>
        <div class="info">
            <table class="butterfly-details-table">
                <form method= "POST">
                <tr>
                    <td style="width:20em;"><h2>Client Details</h2></td>
                    <td style="width:20em;"><h2>Business Details</h2></td>
                </tr>
                <tr>
                    <td><label>First Name</label><br>
                    <input name="firstname" type="text" placeholder="First Name" value="<?php echo $row['firstName'] ?>" required="required"></td>
                    <td><label>Business Name</label><br>
                    <input name="businessName" type="text" placeholder="Business Name" value="<?php echo $row['businessName'] ?>"required="required"></td>
                    
                </tr>
                <tr>
                <td><label>Last Name</label><br>
                    <input name="surname" type="text" placeholder="Last Name" value="<?php echo $row['surname'] ?>" required="required"></td>
                    
                </tr>
                <tr>
                    <td><label>Address</label><br>
                    <input name="address" type="text" placeholder="Address" value="<?php echo $row['address'] ?>" required="required"></td></td>
                    
                </tr>
                <tr>
                    <td><label>Contact Number</label><br>
                    <input name="contact" type="text" placeholder="Contact Number" value="<?php echo $row['contact'] ?>" required="required"></td></td>
                    
                </tr>
                <tr>
                    <td><label>Username</label><br>
                    <input name="username" type="text" placeholder="Username" value="<?php echo $row['username'] ?>"  required="required"></td></td>
                    
                </tr>
                <tr>
                    <td><label>Email Address</label><br>
                    <input name="email" type="text" placeholder="Email Address"  value="<?php echo $row['email'] ?>"  required="required"></td></td>
                    <td><button name="save" class="btn greenBtn">SAVE</button>
                    <button class="btn redBtn"><a href="client-profile.php">BACK</a></button>
                </tr>
                </form>
                
            </table>
        </div>    

    </div>
    
    
</body>
</html>