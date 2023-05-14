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
            <li id="admin" class="admin"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Name of Client</h4></li>
            
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>          

        <hr>        
            <a href="client-profile.php">PROFILE</a>           
                <a id="application">APPLICATION</a>         
            <a href="">REPORTS</a>                   
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->    
    <div class="report">
    
    <div class="search">
        <table class="search-table">
            <tr>                
                <th id="title"><h2>APPLICATION STATUS</h2></th>                                                                            
                <th>
                    <form > 
                        <input type="search" id="search-bar" name="q" placeholder="Search...">
                        <button id="search-button">SEARCH</button>
                    </form>
                </th>
            </tr>
        </table>       
    </div>
        <form action="add-permit.php" method="POST">
            <table>
                <tr>
                    <th>
                    <button id="ltr-permit" type="submit">ADD LOCAL TRANSPORT PERMIT</button>
                    </th>
                    <th>                        
                    </th>                    
                    <th>                        
                    </th>
                </tr>
            </table>
        </form><br><br>
        <i class="fa-sharp fa-regular fa-filter-list"></i>
        <form method="POST">
        <label for="status">Filter by:</label>
            <select name="status" id="status">
                <option value="draft">Draft</option>
                <option value="submitted" selected="selected">Submitted</option>
                <option value="returned">Returned</option>
                <option value="accepted">Accepted</option>
                <option value="released">Released</option>
                <option value="expired">Expired</option>
                <option value="used">Used</option>
            </select>
            <button name="filter">Filter</button>
        </form>

        <?php
       include 'config.php';
       if(isset($_POST['filter'])){
           $status=$_POST['status'];
           $queryPermit="SELECT * FROM `ltr_permit` where status='$status'";
           $sqlpermit = mysqli_query($con,$queryPermit);
           switch ($status){
               case "submitted":
                   echo "
                       <div class='table-div'>
                           <div class='report-table'>
                               <table>
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
                                   <tbody>";                  
          
                   while($row = mysqli_fetch_array($sqlpermit)) {
                       echo'
                                       <tr>
                                           <td >' . $row['id']. '</td>
                                           <td >' . $row['date'].'</td>
                                           <td ></td>
                                           <td >' . $row['date'].'</td>
                                           <td >' . $row['date'].'</td>
                                           <td ></td>
                                           <td>
                                               <button><a href=\'update-ltr-permit.php?updateid='.$row['id'].'\'>Edit</a></button>
                                               <button class=\'deleteBtn\'><a href=\'delete.php?delete-ltr-id='. $row['id'].'\' class=\'text-light\'>Delete</a></button>
                                           </td>
                                       </tr>';
                   }
                   echo "</tbody></table></div></div>";
                   break;
               case "draft":
                echo "
                <div class='table-div'>
                    <div class='report-table'>
                        <table>
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
                            <tbody>";
              
            while($row = mysqli_fetch_array($sqlpermit)) {
                echo'
                                <tr>
                                    <td >' . $row['id']. '</td>
                                    <td >' . $row['date'].'</td>
                                    <td ></td>
                                    <td >' . $row['date'].'</td>
                                    <td >' . $row['date'].'</td>
                                    <td ></td>
                                    <td>
                                        <button><a href=\'update-ltr-permit.php?updateid='.$row['id'].'\'>Edit</a></button>
                                        <button class=\'deleteBtn\'><a href=\'delete.php?delete-ltr-id='. $row['id'].'\' class=\'text-light\'>Delete</a></button>
                                    </td>
                                </tr>';
            }
            echo "</tbody></table></div></div>";
                   break;
                   case "returned":
                    echo "
                        <div class='table-div'>
                            <div class='report-table'>
                                <table>
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
                                    <tbody>";
                    
           
                    while($row = mysqli_fetch_array($sqlpermit)) {
                        echo'
                                        <tr>
                                            <td >' . $row['id']. '</td>
                                            <td >' . $row['date'].'</td>
                                            <td ></td>
                                            <td >' . $row['date'].'</td>
                                            <td >' . $row['date'].'</td>
                                            <td ></td>
                                            <td>
                                                <button><a href=\'update-ltr-permit.php?updateid='.$row['id'].'\'>Edit</a></button>
                                                <button class=\'deleteBtn\'><a href=\'delete.php?delete-ltr-id='. $row['id'].'\' class=\'text-light\'>Delete</a></button>
                                            </td>
                                        </tr>';
                    }
                    echo "</tbody></table></div></div>";
                    break;
                case "accepted":
                 echo "
                 <div class='table-div'>
                     <div class='report-table'>
                         <table>
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
                             <tbody>";
             
    
             while($row = mysqli_fetch_array($sqlpermit)) {
                 echo'
                                 <tr>
                                     <td >' . $row['id']. '</td>
                                     <td >' . $row['date'].'</td>
                                     <td ></td>
                                     <td >' . $row['date'].'</td>
                                     <td >' . $row['date'].'</td>
                                     <td ></td>
                                     <td>
                                         <button><a href=\'update-ltr-permit.php?updateid='.$row['id'].'\'>Edit</a></button>
                                         <button class=\'deleteBtn\'><a href=\'delete.php?delete-ltr-id='. $row['id'].'\' class=\'text-light\'>Delete</a></button>
                                     </td>
                                 </tr>';
             }
             echo "</tbody></table></div></div>";
                    break;
                    case "released":
                        echo "
                            <div class='table-div'>
                                <div class='report-table'>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Permit<br>Number</th>
                                                <th>Date and Time<br>Issued</th>
                                                <th>Issued by<br>(Name of<br>PENRO personnel)</th>
                                                <th>Date & Time Released</th>                                     
                                                <th>Released by<br>(Name of<br>PENRO personnell)</th>                                            
                                                <th>Validity Date</th> 
                                                <th>Date and Time<br>Accepted</th> 
                                                <th>Accepted by<br>(Name of Client)</th> 
                                                <th>Copy of LTP <br> Inspection Report</th> 
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>";
                        
               
                        while($row = mysqli_fetch_array($sqlpermit)) {
                            echo'
                                            <tr>
                                                <td >' . $row['id']. '</td>
                                                <td >' . $row['date'].'</td>
                                                <td ></td>
                                                <td >' . $row['date'].'</td>
                                                <td >' . $row['date'].'</td>
                                                <td ></td>
                                                <td>
                                                    <button><a href=\'update-ltr-permit.php?updateid='.$row['id'].'\'>Edit</a></button>
                                                    <button class=\'deleteBtn\'><a href=\'delete.php?delete-ltr-id='. $row['id'].'\' class=\'text-light\'>Delete</a></button>
                                                </td>
                                            </tr>';
                        }
                        echo "</tbody></table></div></div>";
                        break;
                    case "expired":
                     echo "
                     <div class='table-div'>
                         <div class='report-table'>
                             <table>
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
                                 <tbody>";
                 
        
                 while($row = mysqli_fetch_array($sqlpermit)) {
                     echo'
                                     <tr>
                                         <td >' . $row['id']. '</td>
                                         <td >' . $row['date'].'</td>
                                         <td ></td>
                                         <td >' . $row['date'].'</td>
                                         <td >' . $row['date'].'</td>
                                         <td ></td>
                                         <td>
                                             <button><a href=\'update-ltr-permit.php?updateid='.$row['id'].'\'>Edit</a></button>
                                             <button class=\'deleteBtn\'><a href=\'delete.php?delete-ltr-id='. $row['id'].'\' class=\'text-light\'>Delete</a></button>
                                         </td>
                                     </tr>';
                 }
                 echo "</tbody></table></div></div>";
                        break;
                        case "used":
                            echo "
                            <div class='table-div'>
                                <div class='report-table'>
                                    <table>
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
                                        <tbody>";
                        
               
                        while($row = mysqli_fetch_array($sqlpermit)) {
                            echo'
                                            <tr>
                                                <td >' . $row['id']. '</td>
                                                <td >' . $row['date'].'</td>
                                                <td ></td>
                                                <td >' . $row['date'].'</td>
                                                <td >' . $row['date'].'</td>
                                                <td ></td>
                                                <td>
                                                    <button><a href=\'update-ltr-permit.php?updateid='.$row['id'].'\'>Edit</a></button>
                                                    <button class=\'deleteBtn\'><a href=\'delete.php?delete-ltr-id='. $row['id'].'\' class=\'text-light\'>Delete</a></button>
                                                </td>
                                            </tr>';
                        }
                        echo "</tbody></table></div></div>";
                               break;
           }
       }
       

        ?>

        </div>
    

           

    </div>
    
    
</body>
</html>