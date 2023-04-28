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
                <th id="title"><h2>SUBMITTED</h2></th>                                                                            
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
                    <button id="ltr-permit" type="submit">ADD LOCAL TRANSPORT PERMIT</button>
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
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>                                                   
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>           
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>             
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    

           

    </div>
    
    
</body>
</html>