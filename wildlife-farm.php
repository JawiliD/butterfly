<?php
include 'config.php';

if(isset($_POST['accept'])){
    $submit_id = isset($_POST['submit-id']) ? $_POST['submit-id'] : null;
    $accept = "accepted";
    $queryAcceptBtn = "UPDATE ltr_permit SET status = '$accept' WHERE id = $submit_id";
    $sqlAcceptBtn = mysqli_query($con, $queryAcceptBtn);
    if($sqlAcceptBtn){
        header('location:admin-application-submit.php');
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
            <li id="admin" class="admin"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li><a href=""><h4>Wildlife Permit</h4></a></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>          

        <hr>        
            <a id="application">WFP</a>        
            <a href="wildlife-collectors.php">WCP</a>                   
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
            <table>
                <tr>
                    <th>
                    <button id="ltr-permit" type="submit">ADD WFP</button>
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
                            <th>Date Issues</th>                                                                   
                            <th>Expiration<br>Date</th> 
                            <th>Certificate</th>
                            <th>Action</th>                                          

                        </tr>                                               
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php';
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
                                    <button class="btn">VIEW</button>
                                    <button class="btn blueBtn">EDIT</button>
                                    <button class="btn greenBtn" name="activate">ACTIVATE</button>
                                    <button class="btn redBtn">DEACTIVATE</button>                                   
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