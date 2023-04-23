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
            <li class="admin"><a href=""><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><h4>Butterfly</h4></li>
            <li><a href=""><h4>Wildlife Permit</h4></a></l>            
            <li id="report-menu"><a href=""><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>          

        <hr>        
            <a href="report-home.php">HOME</a>
            <a id="matrix" href="">MATRIX</a>
            <a href="report-statistics.php">STATISTICS</a>
            <a href="report-butterfly.php">BUTTERFLY</a>        
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ --> 
    <div class="report">
    
    <div class="search">
        <table class="search-table">
            <tr>                
                <th id="title"><h2>Matrix</h2></th>                                                                            
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
                            <th></th>
                            <th></th>
                            <th>TYPE OF PERMIT</th>
                            <th colspan="2">Information</th>                                     
                            <th colspan="2">PENRO</th>                                            
                        </tr>
                        <tr>
                            <th>Region</th>
                            <th>Office</th>
                            <th>LTP<br>(1-2 days)</th>
                            <th>NAme of Permittee<br>(Name, MI, Surname)</th>                                     
                            <th>Permit Number<br>(xxx-####)</th>                                            
                            <th>LTP<br>Date Issued<br>(mm/dd/yyyy)</th>                                            
                            <th>Date received<br>by Client<br>(mm/dd/yyyy)</th>                                            
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