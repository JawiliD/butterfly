<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Button to open the modal -->
<button style="float:right;" id="openModalBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
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
                            <button class="btn redBtn" ><a style="text-decoration:none;color:white;" href="butterfly.php">CANCEL</a></button> 
                        </div>    
                        </td>
                    </tr>
                </table>
  </div>

</div>
<script src="js/script.js"></script>
</body>
</html>