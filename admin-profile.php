<?php
include 'config.php';
require('session.php');
$id = $_SESSION['id'];

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
            <li id="admin" class="admin"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li><a href="wildlife-farm.php"><h4>Wildlife Permit</h4></a></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
            <li ><h4></i><a href="logout.php" class="link">Logout</a></h4></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1>          

        <hr>        
        <a id="profile">HOME</a>
            <div id="dropdown">
                <a>APPLICATION</a>
                <div id="dropdown-content">
                    <a href="admin-application-submit.php">SUBMITTED</a>
                    <a href="admin-application-return.php">RETURNED</a>
                    <a href="admin-application-accept.php">ACCEPTED</a>
                    <a href="admin-application-release.php">RELEASED</a>
                    <a href="admin-application-expire.php">EXPIRED</a>
                    <a href="admin-application-use.php">USED</a>
                </div>
            </div>            
            <a href="admin-users.php">OTHER USERS</a>       
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->
        <h3> Welcome  <?php echo $_SESSION['fname']; ?></h3>    
        <h3> Today is <?php date_default_timezone_set("Asia/Manila"); echo date("l Y/m/d") ?> </h3>
        <?php
        $query1 = "SELECT COUNT(*) AS row_count1 FROM ltr_permit where status='submitted'";
        $result1 = mysqli_query($con, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $query2 = "SELECT COUNT(*) AS row_count2 FROM ltr_permit where status='accepted'";
        $result2 = mysqli_query($con, $query2);
        $row2 = mysqli_fetch_assoc($result2);
        $query3 = "SELECT COUNT(*) AS row_count3 FROM ltr_permit where status='returned'";
        $result3 = mysqli_query($con, $query3);
        $row3 = mysqli_fetch_assoc($result3);
        $query4 = "SELECT COUNT(*) AS row_count4 FROM ltr_permit where status='expired'";
        $result4 = mysqli_query($con, $query4);
        $row4 = mysqli_fetch_assoc($result4);
        $query5 = "SELECT COUNT(*) AS row_count5 FROM ltr_permit where status='used'";
        $result5 = mysqli_query($con, $query5); 
        $row5 = mysqli_fetch_assoc($result5);
        $query6 = "SELECT COUNT(*) AS row_count6 FROM ltr_permit where status='released'";
        $result6 = mysqli_query($con, $query6); 
        $row6 = mysqli_fetch_assoc($result6);      
        
   

        ?>
        <h3> The following are the total number of application permit as of today: </h3>
        <div class="grid-container">
            <div class="grid-item submitted"><h3>Submitted</h3><h5>total number (<?php echo $row1['row_count1'] ?>)</h5></div>
            <div class="grid-item accepted"><h3>Accepted</h3><h5>total number (<?php echo $row2['row_count2'] ?>)</h5></div>
            <div class="grid-item returned"><h3>Returned</h3><h5>total number (<?php echo $row3['row_count3'] ?>)</h5></div>
            <div class="grid-item release"><h3>Released</h3><h5>total number (<?php echo $row6['row_count6'] ?>)</h5></div>
            <div class="grid-item expired"><h3>Expired</h3><h5>total number (<?php echo $row4['row_count4'] ?>)</h5></div>
            <div class="grid-item used"><h3>Used</h3><h5>total number (<?php echo $row5['row_count5'] ?>)</h5></div>
            </div>

           
       
     
        

           

    </div>
    
    
</body>
</html>