<?php 
include 'config.php';
$id=$_GET['updateid'];
$queryIdentify="Select * from `ltr_permit` where id=$id";
$sqlIdenttify=mysqli_query($con,$queryIdentify);
$row=mysqli_fetch_assoc($sqlIdenttify);
if(isset($_POST['submit'])){
    date_default_timezone_set("Asia/Manila");    
    $date=date('y-m-d');;
    $name=$_POST['name'];  
    $wcp=$_POST['wcpnumber'];   
    $address=$_POST['address'];   
    $wfp=$_POST['wfpnumber'];   
    $contact=$_POST['contact']; 
    $destination=$_POST['destination'];   
    $mode=$_POST['mode']; 
    $purpose=$_POST['purpose'];  
    
    
    $queryLTRpermit = "update `butterfly` date='$date', name='$name', address='$address', contact='$contact', wcpNo='$wcp', wfpNo='$wfp',destination='$destination',mode='$mode' where id=$id";
    $sqlLTRpermit = mysqli_query($con,$queryLTRpermit);
    if($sqlLTRpermit){
        header('location:client-application-status.php');
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
            <li class="butterfly"><a href=""><h4>Butterfly</h4></a></li>
            <li><a href=""><h4>Wildlife Permit</h4></a></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>  
         <hr><br>       
        
    </div> 
    <div class="content">   
        <div class="permit-details">
           
            <form method="POST">
                <table class="personal-div">
                <h2>Application Details</div>
                    <tr>
                        <td><h3>Personal Details</h3></td>
                        <td><h3>Transport Details</h3></td>
                        <td><h3>WCP and WFP Permit details</h3></td>
                    <tr>
                    <tr>
                        <td>
                            <label>Name</label><br>
                            <input name="name" type="text" placeholder="Name" value="<?php echo $row['name']; ?>">
                        </td>
                        <td>
                            <label>Transport to Address</label><br>
                            <input name="destination" type="text" placeholder="Transport to address" value="<?php echo $row['destination']; ?>">
                        </td>
                        <td>
                            <label>WCP Permit Number</label><br>
                            <input name="wcpnumber" type="text" placeholder="WCP permit number" value="<?php echo $row['wcpNo']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label><br>
                            <input name="address" type="text" placeholder="address" value="<?php echo $row['address']; ?>">
                        </td>
                        <td>
                            <label>Mode of Address</label><br>
                            <input name="mode" type="text" placeholder="mode of transport" value="<?php echo $row['mode']; ?>">
                        </td>
                        <td>
                            <label>WFP Permit Number</label><br>
                            <input name="wfpnumber" type="text" placeholder="WFP permit number" value="<?php echo $row['wfpNo']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Contact Number</label><br>
                            <input name="contact" type="text" placeholder="contact number" value="<?php echo $row['contact']; ?>">
                        </td>
                        <td>
                            <label>Purpose</label><br>
                            <input name="purpose" type="text" placeholder="purpose" value="<?php echo $row['purpose']; ?>">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                    </tr>                    
                </table>
                <h2>Butterfly Details</h2>
                <div class="butterfly-details-div">                
                <table class="butterfly-details-table">
                    <thead>
                        <tr>
                            <th>Common Name/Scientific Name</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="text" placeholder="Name"></td>
                            <td><input type="text" placeholder="Description"></td>
                            <td><input type="number" placeholder="Quantity"></td>
                            <td><button class="btn blueBtn">ADD BUTTERFLY</button></td>
                        </tr>
                    </thead>
                    <tbody>                      
                       
                        
                    </tbody>
                </table>
                </div><br><br>
                <div style="float:right">
                    <button class="btn greenBtn" name="submit">SUBMIT</button>               
                    <button class="btn yellowBtn">SAVE AS DRAFT</button>
                    <button class="btn redBtn">CANCEL</button>
                </div>
            </form>
        </div>
    </div>
        
  


</body>
</html>