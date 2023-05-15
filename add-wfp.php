<?php 
include 'config.php';
if(isset($_POST['save'])){  
    $species=$_POST['speciestype'];   
    $classN=$_POST['classname'];   
    $familyN=$_POST['familyname'];   
    $commonN=$_POST['commonname'];   
    $scientificN=$_POST['scientificname'];   
    $typeS=$_POST['typeofspecimen'];   
    $quantity=$_POST['quantity'];   
    $description=$_POST['description'];   

    $sql="insert into `butterfly` (speciesType,className,familyName,commonName,scientificName,typeOfSpecimen,quantity,description) values('$species','$classN','$familyN','$commonN','$scientificN','$typeS','$quantity','$description')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:butterfly.php');
    }else{
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
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li class="admin"><a href="admin-profile.php"><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href=""><h4>Butterfly</h4></a></li>
            <li class="butterfly"><h4>Wildlife Permit</h4></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1> 
         <hr><br>       
        
    </div> 
    <div class="content">   
        <div class="add-butterfly" style="height:30em;">
            <h2>Wildlife Farm Details</h2>
            <form method="POST">
                <table>
                    <tr>
                        <td>
                            <label>Business Name</label><br>
                            <input name="businessname" type="text" placeholder="Species Type" required="required">
                        </td> 
                        <td>
                            <label>Owner's Name</label><br>
                            <input name="ownersname" type="text" placeholder="Class Name" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label><br>
                            <input name="address" type="text" placeholder="Family Name" required="required">
                        </td>                        
                        <td>
                            <label>Date Issue</label><br>
                            <input name="dateissue" type="text" placeholder="Common Name" required="required">
                        </td>                         
                    </tr>
                    <tr>
                        <td>
                            <label>Expiration</label><br>
                            <input name="expiration" type="text" placeholder="Scientific Name" required="required">
                        </td>
                        <td>
                            <label>Quantity</label><br>
                            <input name="quantity" type="text" placeholder="Type of Specimen" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Description</label><br>
                            <input name="description" type="number" placeholder="Quantity" required="required">
                        </td>
                        <td>                            
                        </td>
                    </tr>
                    <tr>
                        <td>                                                    
                        </td>
                        <td>
                        <div>
                            <button class="btn blueBtn" name="save" type="submit">SAVE</button>
                            <button class="btn redBtn" ><a class="link" href="wildlife-farm.php">CANCEL</a></button> 
                        </div>    
                        </td>
                    </tr>
                </table>                            
            </form>                        
        </div>
    </div>
        
  


</body>
</html>