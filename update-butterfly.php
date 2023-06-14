<?php 
include 'config.php';
$id=$_GET['update-butterfly-id'];
$queryIdentify="Select * from `butterfly` where id=$id";
$sqlIdenttify=mysqli_query($con,$queryIdentify);
$row=mysqli_fetch_assoc($sqlIdenttify);
if(isset($_POST['save'])){  
    $species=$_POST['speciestype'];   
    $classN=$_POST['classname'];   
    $familyN=$_POST['familyname'];   
    $commonN=$_POST['commonname'];   
    $scientificN=$_POST['scientificname'];   
    $typeS=$_POST['typeofspecimen'];   
    $quantity=$_POST['quantity'];   
    $description=$_POST['description'];   

    $queryupdatebutterfly="update `butterfly` set speciesType='$species', className='$classN', familyName='$familyN', commonName='$commonN', scientificName='$scientificN', typeOfSpecimen='$typeS',quantity='$quantity',description='$description' where id=$id";
    $sqlupdate=mysqli_query($con,$queryupdatebutterfly);
    if($sqlupdate){
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
            <li class="butterfly"><a href=""><h4>Butterfly</h4></a></li>
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
        <div class="add-butterfly">
            <h2>Butterfly Details</h2>
            <form method="POST">
                <table>
                    <tr>
                        <td>
                            <label>Species Type</label><br>
                            <input name="speciestype" type="text" placeholder="Species Type" value="<?php echo $row['speciesType']; ?>" required="required">
                        </td> 
                        <td>
                            <label>Class Name</label><br>
                            <input name="classname" type="text" placeholder="Class Name" value="<?php echo $row['className']; ?>" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Family Name</label><br>
                            <input name="familyname" type="text" placeholder="Family Name" value="<?php echo $row['familyName']; ?>" required="required">
                        </td>                        
                        <td>
                            <label>Common Name</label><br>
                            <input name="commonname" type="text" placeholder="Common Name" value="<?php echo $row['commonName']; ?>" required="required">
                        </td>                         
                    </tr>
                    <tr>
                        <td>
                            <label>Scientific Name</label><br>
                            <input name="scientificname" type="text" placeholder="Scientific Name" value="<?php echo $row['scientificName']; ?>" required="required">
                        </td>
                        <td>
                            <label>Type of Specimen</label><br>
                            <input name="typeofspecimen" type="text" placeholder="Type of Specimen" value="<?php echo $row['typeOfSpecimen']; ?>" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Quantity</label><br>
                            <input name="quantity" type="number" placeholder="Quantity" value="<?php echo $row['quantity']; ?>" required="required">
                        </td>
                        <td>
                            <label>Description</label><br>
                            <input name="description" type="text" placeholder="Description" value="<?php echo $row['description']; ?>" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>                           
                        </td>
                        <td>
                        <div>
                            <button class="btn blueBtn" name="save" type="submit">SAVE</button>
                            <button class="btn redBtn" ><a style="text-decoration:none;color:white;" href="butterfly.php">CANCEL</a></button> 
                        </div>    
                        </td>
                    </tr>
                </table>                            
            </form>                       
        </div>
    </div>
        
  


</body>
</html>