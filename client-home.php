<?php
include 'config.php';
include 'session.php';
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
            <li id="admin" class="admin" ><h4></i>Home</h4></li>
            <li ><h4></i><a href="logout.php" class="link">Logout</a></h4></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1>          

        <hr>
        <a id="profile">HOME</a> 
        <a href="client-profile.php">PROFILE</a>
        <a href="client-application-status.php">APPLICATION</a>              
        <a href="client-report.php">REPORTS</a>              
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->    
       
        <div class="greetings">
            <h3>Welcome <?=  $_SESSION['fname']; ?> </h3>
            <h4>Today is <?php date_default_timezone_set("Asia/Manila"); echo date("l Y/m/d") ?></h4>             
        </div><br>
        <hr style="border: 2px solid #027A00"><br>
        <button class="btn greenBtn"><a href="client-add-permit.php" class="link">New Permit</a></button><br><br><br>
        <?php
        $query = "SELECT COUNT(*) AS row_count FROM ltr_permit where status='draft' AND userId = '$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $query1 = "SELECT COUNT(*) AS row_count1 FROM ltr_permit where status='submitted' AND userId = '$id'";
        $result1 = mysqli_query($con, $query1);
        $row1 = mysqli_fetch_assoc($result1);
        $query2 = "SELECT COUNT(*) AS row_count2 FROM ltr_permit where status='accepted' AND userId = '$id'";
        $result2 = mysqli_query($con, $query2);
        $row2 = mysqli_fetch_assoc($result2);
        $query3 = "SELECT COUNT(*) AS row_count3 FROM ltr_permit where status='returned' AND userId = '$id'";
        $result3 = mysqli_query($con, $query3);
        $row3 = mysqli_fetch_assoc($result3);
        $query4 = "SELECT COUNT(*) AS row_count4 FROM ltr_permit where status='expired' AND userId = '$id'";
        $result4 = mysqli_query($con, $query4);
        $row4 = mysqli_fetch_assoc($result4);
        $query5 = "SELECT COUNT(*) AS row_count5 FROM ltr_permit where status='used' AND userId = '$id'";
        $result5 = mysqli_query($con, $query5); 
        $row5 = mysqli_fetch_assoc($result5);
        $query6 = "SELECT COUNT(*) AS row_count6 FROM ltr_permit where status='released' AND userId = '$id'";
        $result6 = mysqli_query($con, $query6); 
        $row6 = mysqli_fetch_assoc($result6);      
        
   

        ?>
        <h3> The following are your total number of application permit: </h3>
        <div class="grid-container">
            <div class="grid-item draft"><h3>Draft</h3><h5>total number (<?php echo $row['row_count'] ?>)</h5></div>
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