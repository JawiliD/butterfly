<?php
include 'config.php';

if (isset($_POST['submit']) || isset($_POST['draft'])) {
    // Clear the butterfly details session variable
    unset($_SESSION['butterflyDetails']);
}

if (isset($_POST['submit'])) {
    date_default_timezone_set("Asia/Manila"); 
    $status = 'submitted'; 
    $dateTime = date('Y-m-d H:i:s');
    $name = $_POST['name'];  
    $wcp = $_POST['wcpnumber'];   
    $address = $_POST['address'];   
    $wfp = $_POST['wfpnumber'];   
    $contact = $_POST['contact']; 
    $destination = $_POST['destination'];   
    $mode = $_POST['mode']; 
    $purpose = $_POST['purpose'];  

    $queryLTRpermit = "INSERT INTO `ltr_permit` (name, address, contact, wcpNo, wfpNo, destination, mode, purpose, date, status) VALUES ('$name', '$address', '$contact', '$wcp', '$wfp', '$destination', '$mode', '$purpose', '$dateTime', '$status')";
    $sqlLTRpermit = mysqli_query($con, $queryLTRpermit);  
    
  
    
    if ($sqlLTRpermit) {
        // Retrieve the last inserted LTR permit ID
        $ltrPermitID = mysqli_insert_id($con);
        $butterflyDetails = isset($_POST['butterfly-details']) ? json_decode($_POST['butterfly-details'], true) : array();
        
        // Insert butterfly details into the database
        foreach ($butterflyDetails as $butterfly) {
            $butterflyName = $butterfly['name'];
            $description = $butterfly['description'];
            $butterflyQuantity = $butterfly['quantity'];
    
            $queryButterflyDetails = "INSERT INTO `butterfly_details` (ltr_permit_id, name, description, quantity) VALUES ('$ltrPermitID', '$butterflyName', '$description', '$butterflyQuantity')";
            $sqlButterflyDetails = mysqli_query($con, $queryButterflyDetails);
            
            if (!$sqlButterflyDetails) {
                die(mysqli_error($con));
            }
        }
    
        header('location: admin-application-submit.php');
    } else {
        die(mysqli_error($con));
    }
    

}


$butterflyDetails = isset($_SESSION['butterflyDetails']) ? $_SESSION['butterflyDetails'] : array();
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
            <li class="admin"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href="butterfly.php"><h4>Butterfly</h4></a></li>
            <li><a href="wildlife-farm.php"><h4>Wildlife Permit</h4></a></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
            <li ><h4></i><a href="logout.php" class="link">Logout</a></h4></li>
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
                            <label>Name</label><br>
                            <input name="name" type="text" placeholder="Name" required="required">
                        </td>
                        <td>
                            <label>Transport to Address</label><br>
                            <input name="destination" type="text" placeholder="Transport to address" required="required">
                        </td>
                        <td>
                            <label>WCP Permit Number</label><br>
                            <input name="wcpnumber" type="text" placeholder="WCP permit number" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label><br>
                            <input name="address" type="text" placeholder="address" required="required">
                        </td>
                        <td>
                            <label>Mode of Transport</label><br>
                            <input name="mode" type="text" placeholder="mode of transport" required="required">
                        </td>
                        <td>
                            <label>WFP Permit Number</label><br>
                            <input name="wfpnumber" type="text" placeholder="WFP permit number" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Contact Number</label><br>
                            <input name="contact" type="text" placeholder="contact number" required="required">
                        </td>
                        <td>
                            <label>Purpose</label><br>
                            <input name="purpose" type="text" placeholder="purpose" required="required">
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
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="butterfly-name" placeholder="Common/Scientific Name" required="required"></td>
                            <td><input type="text" name="description" placeholder="Description" required="required"></td>
                            <td><input type="number" name="butterfly-quantity" placeholder="Quantity" required="required"></td>
                            <td><button name="add-butterfly" class="btn blueBtn">ADD BUTTERFLY</button></td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <input type="hidden" name="ltr_permit_id" value="<?php echo $ltrPermitID; ?>">
                    <input type="hidden" name="butterfly-details" id="butterfly-details-input" value="<?php echo htmlspecialchars(json_encode($butterflyDetails)); ?>">
                </table>
                </div><br><br>
                <div style="float:right">
                    <button class="btn greenBtn" name="submit">SUBMIT</button>               
                    <!-- <button class="btn yellowBtn" name="draft">SAVE AS DRAFT</button> -->
                    <button class="btn redBtn"><a class="link" href="admin-application-submit.php">CANCEL</a></button>
                </div>
            </form>
        </div>
    </div>

    <script>
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
            '<td><button class="btn redBtn delete-butterfly">Delete</button></td>' +
            '</tr>';

        // Append the new row to the table body
        $('.butterfly-details-table tbody').append(newRow);

        // Clear the input fields
        $('input[name="butterfly-name"]').val('');
        $('input[name="description"]').val('');
        $('input[name="butterfly-quantity"]').val('');

        // Update the hidden input field with the updated butterfly details array
        var currentDetails = JSON.parse($('#butterfly-details-input').val());
        currentDetails.push({
            name: butterflyName,
            description: description,
            quantity: butterflyQuantity
        });
        $('#butterfly-details-input').val(JSON.stringify(currentDetails));
    });

    // Delete butterfly row
    $(document).on('click', '.btn.redBtn.delete-butterfly', function(e) {
        e.preventDefault();

        // Remove the row from the table
        $(this).closest('tr').remove();

        // Update the hidden input field with the updated butterfly details array
        var currentDetails = JSON.parse($('#butterfly-details-input').val());
        var rowIndex = $(this).closest('tr').index();
        currentDetails.splice(rowIndex, 1);
        $('#butterfly-details-input').val(JSON.stringify(currentDetails));
    });
});

    </script>
</body>
</html>
