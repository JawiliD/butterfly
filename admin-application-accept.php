<?php
include 'config.php';

if(isset($_POST['release'])){
    $accept_id = isset($_POST['accept-id']) ? $_POST['accept-id'] : null;
    $status = "release";
    date_default_timezone_set("Asia/Manila");
    $date=date('y-m-d');    
    $queryReleaseBtn = "UPDATE ltr_permit SET status = '$status', dateReleased = '$date' WHERE id = $accept_id";
    $sqlReleaseBtn = mysqli_query($con, $queryReleaseBtn);
    if($sqlReleaseBtn){
        header('location:admin-application-accept.php');
        exit;
    } else {
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
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li class="admin"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li><a href="wildlife-farm.php"><h4>Wildlife Permit</h4></a></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR </h1>
            <h1>WILDLIFE BUTTERFLY</h1>          

        <hr>        
            <a href="admin-profile.php">PROFILE</a>
            <div id="dropdown">
                <a id="application">APPLICATION</a>
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
    <div class="report">
    
    <div class="search">
        <table class="search-table">
            <tr>                
                <th id="title"><h2>ACCEPTED</h2></th>                                                                            
                <th>
                    <form > 
                        <input type="search" id="search-bar" name="q" placeholder="Search...">
                        <button id="search-button">SEARCH</button>
                    </form>
                </th>
            </tr>
        </table>       
    </div>
        <div class="table-div">
            <div class="report-table">
            <table >
                    <thead>
                        <tr>
                            <th>Application<br>Number</th>
                            <th>Date and Time<br>Encoded</th>
                            <th>Received by<br>(Name of<br>PENRO personnel)</th>
                            <th>Date & Time Updated</th>                                     
                            <th>Date & Tine Submitted</th>                                            
                            <th>Uploaded<br>Requirement</th> 
                            <th>Action</th>                                          

                        </tr>                                               
                    </thead>
                    <tbody>
                        <?php
                            
                            $queryAccept="SELECT * FROM `ltr_permit` where status='accepted'";
                            $sqlAccept=mysqli_query($con,$queryAccept);
                            while($row=mysqli_fetch_array($sqlAccept)){
                                echo '
                                <tr>
                                    <td >'. $row['id'] .'</td>
                                    <td >'. $row['date'].'</td>
                                    <td ></td>
                                    <td >'. $row['date'].'</td>  
                                    <td >'. $row['date'].'</td> 
                                    <form method="POST">             
                                    <td ><button class="btn">VIEW</button></td>
                                    <form method="POST">              
                                    <td >
                                        <button class="btn yellowBtn"><a href="generate-docs.php?generate-id='. $row['id'].'">GENERATE</a></button>  
                                        <button class="btn greenBtn" name="release">RELEASE</button> 
                                        <input type="hidden" name="accept-id" value="'.  $row['id'] .'">                                     
                                    </td>   
                                    </form>          
                                </tr>';
                            }
                        ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Button to open the modal -->
<button id="openModalBtn">Open Modal</button>
    </div>



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Modal content goes here.</p>
  </div>

</div>

<script src="js/script.js">
    </script>
    
    
</body>
</html>