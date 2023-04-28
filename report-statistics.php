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
            <li class="admin"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li><a href=""><h4>Wildlife Permit</h4></a></li>            
            <li id="report-menu"><h4>Report</h4></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>          

        <hr>        
            <a href="report-home.php">HOME</a>
            <a href="report-matrix.php">MATRIX</a>
            <a id="statistics" >STATISTICS</a>
            <a href="report-butterfly.php">BUTTERFLY</a>        
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->    
    <div class="report">
        <div class="search">
            <table class="search-table">
                <tr>                
                    <th id="title"> <h2>STATISTICS</h2></th>                                                                            
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
                        <label>From Date</label>
                        <input type="date" name="from_date">
                    </th>
                    <th>
                        <label>To Date</label>
                        <input type="date" name="from_date">
                    </th>
                    <th>
                        <button id="filter" type="submit">Filter</button>
                    </th>
                    <th></th>
                    <th>
                        <button id="view-doc" type="submit">View Document</button>
                    </th>
                </tr>
            </table>
        </form>
        <div class="table-div">
            <div class="report-table">
            <table >
                    <thead>
                        <tr>
                        <th colspan="2">Permit Holder</th>
                        <th colspan="5">Permit Details</th>
                        <th colspan="9">Species Transported</th>                    
                        <th>Origin</th>  
                        <th>Destination</th>              
                        <th>Purpose<br>of<br>Transcript</th>              
                        <th>Remarks</th>              
                    </tr>
                    <tr>
                        <th>Name of<br>Holder</th>
                        <th>Address<br>of Holder</th>
                        <th>Permit No.</th>
                        <th>Date of<br>Application</th>
                        <th>Issuance<br>Date</th>
                        <th>Expiry<br></th>
                        <th>Fees<br>Collected</th>
                        <th>Species<br>Type</th>
                        <th>Class</th>
                        <th>Family</th>
                        <th>Common<br>Name</th>
                        <th>Scientific<br>Name</th>
                        <th>Type of<br>Specimen</th>
                        <th>Quantity</th>
                        <th>Unit of<br>Measure</th>  
                        <th>Description</th>  
                        <th></th>  
                        <th></th>  
                        <th></th>  
                        <th></th>              
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
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>  
                        <td ></td>              
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
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>  
                        <td ></td>              
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
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>  
                        <td ></td>              
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
                        <td ></td>  
                        <td ></td>              
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
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
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>  
                        <td ></td>              
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
                        <td ></td>
                        <td ></td>              
                        <td ></td>              
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
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
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>              
                        <td ></td>              
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
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>  
                        <td ></td>              
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
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
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>              
                        <td ></td>              
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
                        <td ></td>  
                        <td ></td>              
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
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