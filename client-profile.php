<?php
 include 'config.php';
 $id = $_SESSION['id'];
 $queryUser = "SELECT * from `user_tb` where id = $id";
 $sqlUser = mysqli_query($con, $queryUser);
 $row = mysqli_fetch_array($sqlUser);

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
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR </h1>
            <h1>WILDLIFE BUTTERFLY</h1>       

        <hr>        
        <a href="client-home.php">Home</a>
        <a id="profile">PROFILE</a>
        <a href="client-application-status.php">APPLICATION</a>              
        <a href="client-report.php">REPORTS</a>       
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->            
        <div></div>
        <div class="info">
            <table>
                <tr>
                    <td style="width:20em;"><h2>Client Details</h2></td>
                    <td style="width:20em;"><h2>Business Details</h2></td>
                </tr>
                <tr>
                    <td>First Name
                    <p><?php echo $row['firstName'] ?></p></td>
                    <td>Business Name
                    <p><?php echo $row['businessName'] ?></p></td>
                    
                </tr>
                <tr>
                    <td><h4>Last Name</h4>
                    <p><?php echo $row['surname'] ?></p></td>
                    
                </tr>
                <tr>
                    <td><h4>Address</h4>
                    <p><?php echo $row['address'] ?></p></td>
                    
                </tr>
                <tr>
                    <td><h4>Contact Number</h4>
                    <p><?php echo $row['contact'] ?></p></td>
                    
                </tr>
                <tr>
                    <td><h4>Username</h4>
                    <p><?php echo $row['username'] ?></p></td>
                    
                </tr>
                <tr>
                    <td><h4>Email Address</h4>
                    <p><?php echo $row['email'] ?></p></td>
                    <td><button style="float:right;" class="btn blueBtn"><a href="update-client-profile.php?update-id='..'" class="link">EDIT</a></button></td>
                    
                </tr>
                
            </table>
        </div><br><br><br><br>
    
        <h2>Wildlife Collector Permit</h2>
        <div class="table-div">
            <div class="report-table">
            <table >
                    <thead>
                        <tr>
                            <th>Permit No.</th>
                            <th>Business<br>Name</th>
                            <th>Owner<br>Name</th>
                            <th>Address</th>                                     
                            <th>Date Issue</th>                                                                   
                            <th>Expiration<br>Date</th> 
                            <th>Certificate</th>
                            <th>Action</th>                                          

                        </tr>                                               
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td> 
                                <form method="POST">             
                                <td>                                 
                                    <input type="hidden" name="accept-id" value="'.  $row['id'] .'">
                                    <button class="btn bgreenBtn"><a href="view-wcp.php">VIEW</a></button>
                                    <button class="btn blueBtn"><a href="update-wcp.php">EDIT</a></button>
                                    <button class="btn greenBtn" name="activate">ACTIVATE</button>
                                    <button class="btn redBtn">DEACTIVATE</button>                                   
                                </td> 
                                </form>  
                        </tr>

                        <?php
                       
                        $querySubmit="SELECT * FROM `wfp_permit`";
                        $sqlSubmit=mysqli_query($con,$querySubmit);                        
                        while($row = mysqli_fetch_array($sqlSubmit)){
                            echo'
                             <tr>
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td> 
                                <form method="POST">             
                                <td>                                 
                                    <input type="hidden" name="accept-id" value="'.  $row['id'] .'">
                                    <button id="openModalBtn" class="btn">VIEW</button>
                                    <button class="btn blueBtn">EDIT</button>                                                                     
                                </td> 
                                </form>            
                            </tr>';    
                        }
                       
                        ?>
                        </tbody>
                    </table>
                </div>
            </div> 
            <h2>Wildlife Farm Permit</h2>
        <div class="table-div">
            <div class="report-table">
            <table >
                    <thead>
                        <tr>
                            <th>Permit No.</th>
                            <th>Business<br>Name</th>
                            <th>Owner<br>Name</th>
                            <th>Address</th>                                     
                            <th>Date Issue</th>                                                                   
                            <th>Expiration<br>Date</th> 
                            <th>Certificate</th>
                            <th>Action</th>                                          

                        </tr>                                               
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td> 
                                <form method="POST">             
                                <td>                                 
                                    <input type="hidden" name="accept-id" value="'.  $row['id'] .'">
                                    <button class="btn bgreenBtn"><a href="view-wfp.php">VIEW</a></button>
                                    <button class="btn blueBtn"><a href="update-wfp.php">EDIT</a></button>
                                    <button class="btn greenBtn" name="activate">ACTIVATE</button>
                                    <button class="btn redBtn">DEACTIVATE</button>                                   
                                </td> 
                                </form>  
                        </tr>

                        <?php
                      
                        $querySubmit="SELECT * FROM `wfp_permit`";
                        $sqlSubmit=mysqli_query($con,$querySubmit);                        
                        while($row = mysqli_fetch_array($sqlSubmit)){
                            echo'
                             <tr>
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td>              
                                <td></td> 
                                <form method="POST">             
                                <td>                                 
                                    <input type="hidden" name="accept-id" value="'.  $row['id'] .'">
                                    <button id="openModalBtn" class="btn">VIEW</button>
                                    <button class="btn blueBtn">EDIT</button>
                                                                    
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
    
    
</body>
</html>