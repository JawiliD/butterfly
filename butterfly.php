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
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR</h1>
            <h1>WILDLIFE BUTTERFLY</h1> 
         <hr><br>

    
         <div class="search">
        <table class="search-table">
            <tr>                
                <th id="title"><h2>LIST OF BUTTERFLY</h2></th>                                                                            
                <th>
                    <form > 
                        <input type="search" id="search-bar" name="q" placeholder="Search...">
                        <button id="search-button">SEARCH</button>
                    </form>
                </th>
            </tr>
        </table>       
    </div>
    <button class="btn blueBtn"><a style="padding:0em;" href="add-butterfly.php">ADD BUTTERFLY DETAILS</a></button>
    
                    
  <div class="table-div">
      <div class="report-table">
        <table>
            <thead>
              <tr>
                <th>Species Type</th>
                <th>Class Name</th>
                <th>Family Name</th>
                <th>Common Name</th>
                <th>Scientific Name</th>
                <th>Type of Specimen</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>        
              <?php
                include 'config.php';
                
                $sqlcontent = mysqli_query($con,"SELECT * FROM `butterfly`");

                while ($row = mysqli_fetch_array($sqlcontent)) {
                  echo '<tr>
                          <td >' . $row['speciesType']. ' </td>
                          <td >' . $row['className']. '</td>
                          <td >' . $row['familyName']. '</td>
                          <td >' . $row['commonName'].'</td> 
                          <td >' . $row['scientificName'].'</td>                                  
                          <td >' . $row['typeOfSpecimen'].'</td>              
                          <td >' . $row['quantity'].'</td>             
                          <td >' . $row['description'].'</td>             
                          <td>        
                              <button class="btn blueBtn"><a style="padding:0em;" href="update-butterfly.php?update-butterfly-id='.$row['id'].'">Edit</a></button>                
                              <button class="btn redBtn"><a style="padding:0em;" href="delete.php?delete-butterfly-id='. $row['id'].'">Delete</a></button>
                          </td>            
                      </tr>';
                 
                  }
                  ?>
            </tbody>
          </table>  
      </div>
  </div>
</body>
</html>