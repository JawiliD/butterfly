<?php 
include 'config.php';

$id = $_GET['update-id'];

$queryWCP = "SELECT * FROM `wcp_permit` where id=$id";
$sqlWCP = mysqli_query($con,$queryWCP);
$row = mysqli_fetch_array($sqlWCP);

if(isset($_POST['save'])){
    $businessName = $_POST['businessname'];
    $ownerName = $_POST['ownername'];
    $address = $_POST['address'];
    $dateIssue = $_POST['dateissue'];
    $expiration = $_POST['expiration'];
    $wcp = $_POST['wcp'];

    $queryUpdateWCP = "UPDATE `wcp_permit` SET wcpNo='$wcp', businessName='$businessName', ownerName = '$ownerName', address='$address', dateIssue='$dateIssue', expirationDate='$expiration' where id=$id";
    $sqlUpdateWCP = mysqli_query($con,$queryUpdateWCP);
    if($sqlUpdateWCP){
        header('location: wildlife-collector.php');
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
            <li class="admin"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href=""><h4>Butterfly</h4></a></li>
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
        <div class="add-butterfly" style="height:30em;">
            <h2>Wildlife Collector Details</h2>
            <form method="POST">
                <table>
                    <tr>
                        <td>
                            <label>Business Name</label><br>
                            <input name="businessname" type="text" placeholder="Species Type" value="<?php echo $row['businessName']; ?>" required="required">
                        <td>
                            <label>Owner's Name</label><br>
                            <input name="ownername" type="text" placeholder="Class Name" value="<?php echo $row['ownerName']; ?>" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label><br>
                            <input name="address" type="text" placeholder="Family Name" value="<?php echo $row['address']; ?>" required="required">
                        </td>                        
                        <td>
                            <label>Date Issue</label><br>
                            <input name="dateissue" type="text" placeholder="Common Name" value="<?php echo $row['dateIssue']; ?>" required="required">
                        </td>                         
                    </tr>
                    <tr>
                        <td>
                            <label>Expiration</label><br>
                            <input name="expiration" type="text" placeholder="Scientific Name" value="<?php echo $row['expirationDate']; ?>" required="required">
                        </td>
                        <td>
                            <label>WFP No</label><br>
                            <input name="wcp" type="text" placeholder="Type of Specimen" value="<?php echo $row['wcpNo']; ?>" required="required">
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
                            <button class="btn blueBtn" name="save" type="submit">SAVE</button>
                            <button class="btn redBtn" ><a class="link" href="wildlife-collector.php">CANCEL</a></button> 
                        </div>    
                        </td>
                    </tr>
                </table>                            
            </form>                        
        </div>
    </div>
        
  


</body>
</html>