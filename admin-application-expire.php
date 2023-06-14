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
                <th id="title"><h2>EXPIRED</h2></th>                                                                            
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
                            <th>Permit Number</th>
                            <th>Date and Time<br>Released</th>
                            <th>Released by<br>(Name of<br>PENRO personnel)</th>
                            <th>Validity Date</th>                                     
                            <th>Copy of LTP <br> Inspection Report</th>                            
                            <th>Action</th>                                          

                        </tr>                                               
                    </thead>
                    <tbody>
                    <?php 
                            include 'config.php';                      

                            $date = date('Y');
                            $queryExpire="SELECT * FROM `ltr_permit` where status='expired'";
                            $sqlExpired=mysqli_query($con,$queryExpire);
                            while($row=mysqli_fetch_array($sqlExpired)){
                                
                                echo '
                                <tr>
                                    <td > PMDQ-LTP-'. $date.'-' . $row['id'] .'</td>
                                    <td >'. $row['dateReleased'].'</td>
                                    <td ></td>
                                    <td >'. $row['expirationDate'].'</td> 
                                    <form method="POST">             
                                    <td ><button class="btn bgreenBtn"><a href="view-docs.php?generate-id='. $row['id'].'">VIEW REPORTS</a></button></td>
                                    <form method="POST">              
                                    <td >                                       
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
    

           

    </div>
    
    
</body>
</html>