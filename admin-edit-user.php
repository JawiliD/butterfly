<?php 
include 'config.php';
$id = $_GET['update-id'];

$queryUser = "SELECT * FROM `user_tb` where id=$id";
$sqlUser = mysqli_query($con,$queryUser);
$row = mysqli_fetch_array($sqlUser);

if(isset($_POST['save'])){ 
    $username = $_POST['username']; 
    $email=$_POST['email'];   
    $password=$_POST['password'];   
    $role="admin";   
    $firstName=$_POST['firstName'];   
    $surname=$_POST['surname'];   
       
     

    $sql="UPDATE `wfp_permit` SET username='$username', email='$email', password = 'password', firstName='$firstName', surname='$surname' where id=$id)";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: admin-users.php');
        
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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li class="admin butterfly"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href=""><h4>Butterfly</h4></a></li>
            <li ><h4>Wildlife Permit</h4></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
            <li ><h4></i><a href="logout.php" class="link">Logout</a></h4></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1> 
         <hr><br>       
        
    </div> 
    <div class="content">   
        <div class="add-butterfly" style="height:30em;">
            <h2>Admin User Account</h2>
            <form method="POST">
            <table>
                    <tr>
                        <td>
                            <label>First Name</label><br>
                            <input value="<?php echo $row['firstName'] ?>" name="firstName" type="text" placeholder="First Name" required="required">
                        </td> 
                        <td>
                            <label>Email</label><br>
                            <input value="<?php echo $row['email'] ?>" name="email" type="email" placeholder="Email" required="required">
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <label>Surname</label><br>
                            <input value="<?php echo $row['surname'] ?>" name="surname" type="text" placeholder="Surname" required="required">
                           
                        </td>
                        <td>
                        <label>password</label><br>
                            <input value="<?php echo $row['password'] ?>" name="password" type="password" placeholder="password" required="required">
                            
                        </td>                   
                    </tr>
                    <tr>
                        <td>
                            <label>Username</label><br>
                            <input value="<?php echo $row['username'] ?>" name="username" type="text" placeholder="Username" required="required">
                           
                        </td>                   
                    </tr>                   
                    <tr>
                        <td>                                                    
                        </td>
                        <td>
                        <div>
                            <button class="btn blueBtn" name="save" type="submit">SAVE</button>
                            <button class="btn redBtn" ><a class="link" href="admin-users.php">CANCEL</a></button> 
                        </div>    
                        </td>
                    </tr>
                </table>                            
            </form>                        
        </div>
    </div>
        
  


</body>
</html>