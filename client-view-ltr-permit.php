<?php
include 'config.php';
$id=$_GET['view-id'];
$queryIdentifyLTR="Select * from `ltr_permit` where id=$id";
$sqlIdenttifyLTR=mysqli_query($con,$queryIdentifyLTR);
$row=mysqli_fetch_assoc($sqlIdenttifyLTR);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li class="admin"><a href="client-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Name of client</h4></a></li>
            
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1>  
         <hr><br>       
        
    </div> 
    <div class="content">   
        <div class="permit-details">       
        <form id="permitForm" method="POST">
                <table class="personal-div">
                <h2>Application Details</div>
                    <tr>
                        <td><h3>Personal Details</h3></td>
                        <td><h3>Transport Details</h3></td>
                        <td><h3>WCP and WFP Permit details</h3></td>
                    <tr>
                    <tr>
                        <td>
                            <h3>Name</h3>
                            <p><?php echo $row['name']?></p>
                        </td>
                        <td>
                            <h3>Transport to Address</h3>
                            <p><?php echo $row['destination']?></p>
                        </td>
                        <td>
                            <h3>WCP Permit Number</h3>
                            <p><?php echo $row['wcpNo']?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Address</h3>
                            <p><?php echo $row['address']?></p>
                        </td>
                        <td>
                            <h3>Mode of Address</h3>
                            <p><?php echo $row['mode']?></p>
                        </td>
                        <td>
                            <h3>WFP Permit Number</h3>
                            <p><?php echo $row['wfpNo']?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Contact Number</h3>
                            <p><?php echo $row['contact']?></p>
                        </td>
                        <td>
                            <h3>Purpose</h3>
                            <p><?php echo $row['purpose']?></p>
                        </td>
                        <td>                                                
                        </td>
                    </tr>
                    <tr>
                        <td>
                    </tr>                    
                </table>               
                <h2>Butterfly Details</h2>
                <div class="butterfly-details-div">                
                <table class="butterfly-details-table">
                    <thead>
                        <tr>
                            <th>Common Name/Scientific Name</th>
                            <th>Description</th>
                            <th>Quantity</th>                            
                        </tr>                      
                    </thead>
                    <tbody>
                        <?php 
                        $id=$_GET['view-id'];
                        $queryIdentifyButterfly="SELECT * FROM `butterfly_details` where ltr_permit_id=$id";
                        $sqlIdenttifyButterfly=mysqli_query($con,$queryIdentifyButterfly);
                        while($row1=mysqli_fetch_assoc($sqlIdenttifyButterfly)){
                            echo '<tr>
                            <td>'.$row1['name'].'</td>
                            <td>'.$row1['description'].'</td>
                            <td>'.$row1['quantity'].'</td>                            
                        </tr>';
                        }
                        
                         ?>
                    </tbody>
                    <input type="hidden" name="ltr_permit_id" value="<?php echo $ltrPermitID; ?>">
                    <input type="hidden" name="butterfly-details" value="<?php echo htmlspecialchars(json_encode($butterflyDetails)); ?>">
                </table>
                </div><br><br>
                <div style="float:right">                    
                    <button class="btn redBtn"><a class="link" href="client-application-status.php">CANCEL</a></button>
                </div>
            </form>
        </div>
    </div>

    <script>
    // JavaScript/jQuery code for adding the butterfly details dynamically without form submission
    $(document).ready(function() {
        $('.btn.blueBtn[name="add-butterfly"]').click(function(e) {
            e.preventDefault(); // Prevent form submission

            var butterflyName = $('input[name="butterfly-name"]').val();
            var description = $('input[name="description"]').val();
            var butterflyQuantity = $('input[name="butterfly-quantity"]').val();

            // Create the table row HTML
            var newRow = '<tr>' +
                '<td>' + butterflyName + '</td>' +
                '<td>' + description + '</td>' +
                '<td>' + butterflyQuantity + '</td>' +
                '<td></td>' +
                '</tr>';

            // Append the new row to the table body
            $('.butterfly-details-table tbody').append(newRow);

            // Clear the input fields
            $('input[name="butterfly-name"]').val('');
            $('input[name="description"]').val('');
            $('input[name="butterfly-quantity"]').val('');
        });
    });
    </script>
</body>
</html>
