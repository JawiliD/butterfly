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
            <li class="admin"><h4><a href="admin-profile.php"><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</a></h4></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li id="admin"><h4>Wildlife Permit</h4></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
            <li ><h4></i><a href="logout.php" class="link">Logout</a></h4></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1>        

        <hr>        
            <a id="application">WFP</a>        
            <a href="wildlife-collector.php">WCP</a>                   
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ --> 
    <div class="report">
    
    <div class="search">
        <table class="search-table">
            <tr>                
                <th id="title"><h2>WILDLIFE FARM PERMITS</h2></th>                                                                            
                <th>
                    <form > 
                        <input type="search" id="search-bar" name="q" placeholder="Search...">
                        <button id="search-button">SEARCH</button>
                    </form>
                </th>
            </tr>
        </table>       
    </div>
        <form action="" method="POST">
            <table style="float:left;">
                <tr>
                    <th>
                    <button id="ltr-permit" type="submit" style="float:left;"><a class="link" href="add-wfp.php">ADD WILDLIFE FARM PERMIT</a></button>
                    </th>
                    <th>                        
                    </th>                    
                    <th>                        
                    </th>
                </tr>
            </table>
        </form>
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
                            <th>Status</th>
                            <th>Action</th>                                          

                        </tr>                                               
                    </thead>
                    <tbody>
                    <tr>                        
                        <?php
                        include 'config.php';
                        $querySubmit="SELECT * FROM `wfp_permit`";
                        $sqlSubmit=mysqli_query($con,$querySubmit);                        
                        while($row = mysqli_fetch_array($sqlSubmit)){
                            echo'
                             <tr>
                                <td>'. $row['wfpNo'].'</td>              
                                <td>'. $row['businessName'].'</td>              
                                <td>'. $row['ownerName'].'</td>              
                                <td>'. $row['address'].'</td>              
                                <td>'. $row['dateIssue'].'</td>              
                                <td>'. $row['expirationDate'].'</td>              
                                <td></td> 
                                <td>'. $row['permitStatus'].'</td> 
                                <form method="POST">             
                                <td>                                 
                                    <input type="hidden" name="accept-id" value="'.  $row['id'] .'">
                                    <button class="btn bgreenBtn"><a href="view-wfp.php?view-id='. $row['id'].'" class="link">VIEW</a></button>
                                    <button class="btn blueBtn"><a href="update-wfp.php?update-id='. $row['id'].'" class="link">EDIT</a></button>
                                    <button class="btn greenBtn" name="activate"><a href="permit.php?fp-activate-id='. $row['id'].'" class="link">ACTIVATE</a></button>
                                    <button class="btn redBtn" name= "deactivate"><a href="permit.php?fp-deactivate-id='. $row['id'].'" class="link" >DEACTIVATE</a></button>                                                                    
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