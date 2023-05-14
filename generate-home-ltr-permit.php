
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li class="admin"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li><a href="wildlife-farm.php"><h4>Wildlife Permit</h4></a></l>            
            <li id="report-menu"><h4>Report</h4></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1>          

        <hr>        
                    
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->
            
            <div  class="generate-doc">
                <a href="report-home.php" class="back">BACK</a>                
                <a  onclick="printDiv('printThis')"><i class="fa-solid fa-print fa-fade fa-2xl" style="padding: 1em;display:flex;justify-content:right;"></i></a>    
                <hr>
            
                <div id="printThis" class="div-content" style="position:relative;">
                    <div style="height:50em; width:100%">
                        <img src="image/penro.png" alt="penro-logo" style="padding:1em" width="100"> 
                        <p class="gov-name">Republic of the Philippines<br>Department of Environment and Natural Resources<br><b>PENRO MARINDUQUE</b></p><br>
                        <hr style="border: 3px solid red;">
                        <table class="doc-table-v2">
                                <thead>
                                    <tr>
                                    <th>No.</th>
                                    <th>Permittee</th>
                                    <th>Address</th>
                                    <th>Business Man</th>
                                    <th colspan="12">NUMBER OF PERMITS FOR A YEAR</th>                    
                                    <th>GRAND<br> TOTAL</th>  
                                    <th>FEES<br> COLLECTECTED<br> (PHP)</th>              
                                    <th>TOTAL OF<br> PUPAE<br>TRANSPORTED</th>              
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>January</th>
                                    <th>February</th>
                                    <th>March</th>
                                    <th>April</th>
                                    <th>May</th>
                                    <th>June</th>
                                    <th>July</th>
                                    <th>August</th>
                                    <th>September</th>
                                    <th>October</th>
                                    <th>November</th>
                                    <th>December</th>
                                    <th></th>  
                                    <th></th>  
                                    <th></th>              
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                        </table> 
                    </div>
                </div>
            </div>
            
    </div>
        <script>          

            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
           
        </script>

    
    
    </body>
</html>