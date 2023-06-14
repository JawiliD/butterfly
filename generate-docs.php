<?php
include 'config.php';
$id=$_GET['payment-id'];
$querySelect="SELECT * FROM `ltr_permit` where id=$id";
$sqlSelect=mysqli_query($con,$querySelect);
$row = mysqli_fetch_assoc($sqlSelect);
$queryPaymentDetails="SELECT * FROM `payment_details` where ltr_permit_id = $id";
$sqlPaymentDetails = mysqli_query($con, $queryPaymentDetails);
$row1 = mysqli_fetch_assoc($sqlPaymentDetails);
$queryOfficialDetails="SELECT * FROM `official_details` where ltr_permit_id = $id";
$sqlOfficialDetails = mysqli_query($con, $queryOfficialDetails);
$row2 = mysqli_fetch_assoc($sqlOfficialDetails);

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
            <li class="admin"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li><a href="wildlife-farm.php"><h4>Wildlife Permit</h4></a></l>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
            <li ><h4></i><a href="logout.php" class="link">Logout</a></h4></li>
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
        <style>
            .bDetails td{
                background-color:white;
                border:none;
                font-weight:normal;
            }

            @page{
                size:210mm 297mm;
                margin:0;
            }
            @media print {
               body{
                visibility:hidden;
               }
               .ltr-content, .ltr-content *{
                visibility:visible;
                width:210mm;
                height:297mm;           
        
               
               }
               .bDetails td{
                background-color:white;
                border:none;
                font-weight:normal;
            }
               .ltr-content{                
                left:2px;
                top:0px;                
                /* width:30em;
                margin:0em; */
               }
               
            }
        </style>
         <div class="generate-doc">
        <a href="admin-application-accept.php" class="back">BACK</a> 
        <a  onclick="printDiv('printThis')"><i class="fa-solid fa-print fa-fade fa-2xl" style="padding: 1em;display:flex;justify-content:right"></i></a>    
        <hr>
        
            <div id="printThis" class="ltr-content" style="position:relative;">
                <img src="image/penro.png" alt="penro-logo" style="padding:1em" width="100"> 
                <p class="gov-name">Republic of the Philippines<br>Department of Environment and Natural Resources<br><b>PENRO MARINDUQUE</b></p><br>
                <hr style="border: 3px solid red;">
                <p>Wildlife Transport</p>
                <p>Permit No.<u><?php echo date('Y') .'-'. $row['id'] ?></u></p><br>
                
                <h3 style= "text-align:center;margin-top: 2em;">LOCAL TRANSPORT PERMIT</h3>
                <div class="doc-details" style="text-align:justify;width:70%;margin:auto;">
                <p>Pursuant to Republic Act 9147 Pursuant to Republic Act 9147 dated July 30, 2001, Mr./Ms. <b><u><?php echo $row['name'] ?></u></b> of
                <b><u><?php echo $row['address'] ?></u></b> .Marinduque is authorized to transport to <b><u><?php echo $row['destination'] ?></u></b> the following
                wildlife for <b><u><?php echo $row['purpose'] ?></u></b> purpose.<br></p>
                <hr style="border: dotted 1px black"><br>
                <table class=doc-table>
                    <thead>
                        <tr>
                            <th>Common/Scientific Name</th>
                            <th>Description (including parts,<br>derivatives, marks, number,<br> age and sex if any)</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody class="bDetails">
                        <?php
                          $queryButterfly = "SELECT * FROM `butterfly_details` where ltr_permit_id=$id";
                          $sqlButterfly = mysqli_query($con,$queryButterfly);
                          while($row3 = mysqli_fetch_assoc($sqlButterfly)){
                            echo '
                            <tr>
                                <td>'.$row3['name'].'</td>
                                <td>'.$row3['description'].'</td>
                                <td>'.$row3['quantity'].'</td>
                            </tr>';
                          }
                        ?>
                    </tbody>               
                    
                </table>
                <p><hr style="border: dotted 1px black"><br>
                The above-mentioned specimens shall be transported by Air/Sea express on or before <b><u><?php echo $row['expirationDate'] ?></u></b> and have been inspected, verified and found in accordance with existing wildlife laws, rules and regulations.<br><br>

                Local transport fee in the amount of <b><u><?php echo $row1['amount'] ?></u></b> was paid under the DENR PENRO Official Receipt No. <b><u><?php echo $row1['orNumber'] ?></u></b> dated <b><u><?php echo date('Y-m-d') ?></u></b>.<br>

                This permit is not valid without the dry seal of the signing officer or if it contains erasure of alteration.</p>
                <div style="display:flex; justify-content:right;"><p style="text-align: center;margin-top:5em"><b><?php echo $row2['oicOfficer'] ?></b><br>OIC - PENRO<br>Officer</p></div>
            

            </div>

            
        </div>
        </div><br><br>
        <div class="inspection-doc">        
        <a  onclick="printDiv2('printThis2')"><i class="fa-solid fa-print fa-fade fa-2xl" style="padding: 1em;display:flex;justify-content:right"></i></a>    
        <hr>  
            <div id="printThis2" class="inspection-content" style="position:relative;">
                <img src="image/penro.png" alt="penro-logo" style="padding:1em" width="100"> 
                <p class="gov-name">Republic of the Philippines<br>Department of Environment and Natural Resources<br><b>PENRO MARINDUQUE</b></p><br>
                <hr style="border: 3px solid red;"><br>
                <div style="display:flex; justify-content:right;"><p style="text-align:center; margin-right:3em"><u><?php echo date('Y-m-d') ?></u><br>Date</p></div>
                
                
                <h3 style= "text-align:center;margin-top: 1em;">INSPECTION REPORT OF WILDLIFE</h3>
                <div class="doc-details" style="text-align:justify;width:70%;margin:auto;">
                <p>TO WHOM IT MAY CONCERN<br><br>This is to certify that on this date, the undersigned has undertaken the inspection of wildlife in the <b><u>DENR-PENRO Marinduque </u></b>of  <b><u><?php echo $row['name' ]  ?></u></b  >and has found the following wildlife</p>
                <table class=doc-table>
                    <thead>
                        <tr>
                            <th><b>Kind of Species</b></th>
                            <th style="width:10em;"></th>
                            <th><b>Quantity</b></th>                            
                        </tr>
                    </thead>
                    <tbody class="bDetails">
                    <?php
                          $queryButterfly = "SELECT * FROM `butterfly_details` where ltr_permit_id=$id";
                          $sqlButterfly = mysqli_query($con,$queryButterfly);
                          while($row3 = mysqli_fetch_assoc($sqlButterfly)){
                            echo '
                            <tr>
                                <td>'.$row3['name'].'</td>
                                <td></td>
                                <td>'.$row3['quantity'].'</td>
                            </tr>';
                          }

                          ?>
                        </tbody>                                  
                    
                </table>
                <p>The inspection was made in the presence of <b><u> <?php echo $row['name']?></u></b> at the above address.</p>
                <table style="text-align:center;" class=doc-table>                    
                        <tr>
                            <th><b><u><?php echo $row2['witness'] ?></u></b></th>
                            <th></th>
                            <th><b><u><?php echo $row2['inspectingOfficer'] ?></u></b></th>                                                       
                        </tr> 
                        <tr>
                            <th>(Signature of Witness)</th>
                            <th></th>
                            <th>(Inspecting Officer)</th>                                                       
                        </tr> 
                        <tr>
                            <th>_____________</th>
                            <th style="width:5em;"></th>
                            <th><b><u><?php echo $row2['designation'] ?></u></b></th>                                                       
                        </tr>  
                        <tr>
                            <th></th>
                            <th></th>
                            <th>designation</th>                                                       
                        </tr>                                                    
                    
                </table>
                <h3 style= "text-align:center;margin-top: 2em;">INSPECTION REPORT OF WILDLIFE</h3>
                <p>This is to certify that the inspection report of <b><u> <?php echo $row['name'] ?></u></b> the PAWD, Region <b><u> IV-MIMAROPA </u></b> is/are true and correct and has been done this <u><b> <?php echo date('d'); ?> </u></b>day of <u><b> <?php echo date('F-Y'); ?> </u></b>
             This is to certify further that this statement was given me voluntarily and with neither coercion nor promise of reward from the personnel of the Department of Environment and National Resources.</p>
                <div style="display:flex; justify-content:right;"><p style="text-align: center;margin-top:3em;"><b>MENCHITA D. RADOVAN</b><br>Signature</p><br><br></div>
            

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
            function printDiv2(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
    </script>

    
    
</body>
</html>