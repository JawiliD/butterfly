<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li class="admin"><a href=""><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li class="butterfly"><a href=""><h4>Butterfly</h4></a></li>
            <li><a href=""><h4>Wildlife Permit</h4></a></li>
            <li><a href=""><h4>Status</h4></a></li>
            <li><a href=""><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>  
         <hr><br>
         <div class="Sbar"> 
             <button type="button" id="myBtn" class="Add" href="" >ADD BUTTERFLY SPECIES </button>
             <span class="sh"><input  type="searchs"  placeholder="SEARCH" >
            </span></div>
        <div class="list"><h1 >LIST OF BUTTERFLIES<hr class="line"></h1></div> 
        
  <div class="gallery">
  <?php
    include 'config.php';
     $cards = mysqli_query($con,"SELECT * FROM `bd`");

    while ($row = mysqli_fetch_array($cards)) {
      echo '<div class="card">';
      echo '<h3>' . $row['familyname'] . '</h3>';
      echo  '<h3>'. $row['commonname'] .'</h3>';
      echo '<div class="size">';
      echo '<img src="' . $row['Image'] . '" alt="' . $row['commonname'] .'">';
      echo '</div>';
      echo '<p>' . $row['description'] . '</p>';
      echo '<button href="view.php?id=' . $row['id'] . '" class="" >View</button>';
      echo '</div>';
      }
      ?>
  </div>


<!-- The Modal -->
<div id="myModal" class="modal fade" tabindex="-1"  aria-hidden="true" >

  <!-- Modal content -->
  <div class="modal-content"> 
    <div class="container1">
      <span class="close">&times;</span>
      <input type="file" id="file" accept="image/*" hidden>
      <div class="img-area" data-img="">
        <i class='bx bxs-folder-plus icon'></i>
      </div>
      <div class="up"> 
      <button class="select-image">Upload</button>
        </div><br>
      <div class="modal-body">
        <div class="form-group">
          <label>Species Type</label><br>
          <input type="text" name="speciestype" placeholder="Species Type" class="form-control" required="required" />
        </div><br>
        <div class="form-group">
          <label>Class Name</label><br>
          <input type="text" name="classname" placeholder="Class Name" class="form-control" required="required" />
        </div><br>
        <div class="form-group">
          <label>Family Name</label><br>
          <input type="text" name="familyname" placeholder="Family Name" class="form-control" required="required" />
        </div><br>
        <div class="form-group">
          <label>Common Name</label><br>
          <input type="text" name="commonname" placeholder="Common Name" class="form-control" required="required" />
        </div><br>
        <div class="form-group">
          <label>Scientifin Name</label><br>
          <input type="text" name="scientificname" placeholder="Scientifin Name" class="form-control" required="required" />
        </div><br>
        <div class="form-group">
          <label>Type of Specimen</label><br>
          <input type="text" name="typeofspecimen" placeholder="Type of Specimen" class="form-control" required="required" />
        </div><br>
        <div class="form-group">
          <label>Quantity</label><br>
          <input type="text" name="quantity" placeholder="Quantity" class="form-control" required="required" />
        </div><br>
        <div class="form-group">
          <label>Description</label><br>
          <input type="text" name="description" placeholder="Description" class="form-control" required="required" />
        </div>
      </div><br>
      <div class="modal-footer">
        <button type="submit" name="save" class="btn btn-primary">Save</a>
        <button class="btn btn-secondary" type="button" data-dismiss="close">Cancel</button>
      </div>
    </div>
 </div>
</div> 
    <script src="script.js"></script>
</body1>
</html>