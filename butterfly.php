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
            <li><a href=""><h4>Wildlife Permit</h4></a></li>            
            <li><a href="report-home.php"><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>  
         <hr><br>

    
         <div class="Sbar"> 
             <button type="button" id="myBtn" class="Add" ><a style="color:white;padding:0em;" href="add-butterfly.php">ADD BUTTERFLY SPECIES</a></button>
             <form > 
                  <input type="search" id="search-bar" name="q" placeholder="Search...">
                  <button id="search-button">SEARCH</button>
              </form>
            </div>
        <div class="list"><h1 >LIST OF BUTTERFLIES</h1></div> 
        
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
                              <button class="btn blueBtn"><a href="update-butterfly.php?update-butterfly-id='.$row['id'].'">Edit</a></button>                
                              <button class="btn redBtn"><a href="delete.php?delete-butterfly-id='. $row['id'].'">Delete</a></button>
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