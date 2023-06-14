<?php 
include 'config.php';
$id = $_GET['view-id'];

$queryWFP = "SELECT * FROM `wfp_permit` where id=$id";
$sqlWFP = mysqli_query($con,$queryWFP);
$row = mysqli_fetch_array($sqlWFP);
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
            <li class="admin"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li class="butterfly"><h4>Wildlife Permit</h4></li>            
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
    <div class="container">
        <table>
            <tr style="margin:0em;"><td style="width:80%"><h3 >Wildlife Collector's Permit Details</td><td></h3><img style="display:flex;justify-content:right;" src="image/logo2.png" width="75"></td></tr>
                    </table>
            <table class="details" style="margin-top:0em;">
            <tr>
                        <td>
                            <label>Business Name: </label><br>
                            <p><?php echo $row['businessName'] ?></p>
                        </td> 
                        <td>
                            <label>Owner's Name: </label><br>
                            <p><?php echo $row['ownerName'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address:</label><br>
                            <p><?php echo $row['address'] ?></p>
                        </td>                        
                        <td>
                            <label>Date Issue:</label><br>
                            <p><?php echo $row['dateIssue'] ?></p>
                        </td>                         
                    </tr>
                    <tr>
                        <td>
                            <label>Expiration:</label><br>
                            <p><?php echo $row['expirationDate'] ?></p>
                        </td>
                        <td>
                            <label>WCP No:</label><br>
                            <p><?php echo $row['wfpNo'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>                            
                        </td>
                        <td>                            
                        </td>
                    </tr>
                    <tr>
                        <td>                                                    
                        </td>
                        <td>
                        <div>                            
                            <button class="btn redBtn" id="close" style="float:right;"><a href="wildlife-collector.php">BACK</button> 
                        </div>    
                        </td>
                    </tr>    
                    
                </table>    
        </div>
    </div>
        
  


</body>
</html>


