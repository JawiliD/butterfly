<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f30985c93b.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="right-header">
        <img class="logo " src="image/logo.png" alt="logo">
        <ul>
            <li class="admin"><a href=""><h4><i id="admin-icon" class="fa-solid fa-user"></i>Administrator</h4></a></li>
            <li><a href=""><h4>Butterfly</h4></a></li>
            <li><a href=""><h4>Wildlife Permit</h4></a></li>
            <li><a href=""><h4>Status</h4></a></li>
            <li><a href=""><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>          

        <hr>        
            <a class="home" href="">HOME</a>
            <a href="">MATRIX</a>
            <a href="">STATISTICS</a>
            <a href="">BUTTERFLY</a>        
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->
    <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">S1</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Description</th>  
                <th scope="col">Operation</th>              
               </tr>
            </thead>
            <tbody>
            <tr>
                <td ></td>
                <td ></td>
                <td ></td>
                <td ></td>  
                <td ></td>              
            </tr>
            <tr>
                <td ></td>
                <td ></td>
                <td ></td>
                <td ></td>  
                <td ></td>              
            </tr>

                <?php
                
                
                // $sql="SELECT info.journal_id,info.date,info.time,info.content FROM users ,info
                // WHERE  info.user_id =users.user_id";
                // $sql="SELECT * from info";
                
                // $result=mysqli_query($con,$sql);
                
                // if($result){
                //     while($row=mysqli_fetch_assoc($result)){                        
                //         $id=$row['journal_id'];
                //         $date=$row['date'];
                //         $time=$row['time'];
                //         $content=$row['content'];                       
                //         echo '<tr>
                //                 <th scope="row">'.$id.'</th>
                //                 <td >'.$date.'</td>
                //                 <td>'.$time.'</td>
                //                 <td>'.$content.'</td>                                
                //                 <td>
                //                 <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Edit</a></button>
                //                 <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                //                 </td>
                //             </tr>';
                //     }
                    
                // }

                ?>
                
                
            </tbody>
            </table>

            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">S1</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Description</th>  
                <th scope="col">Operation</th>              
               </tr>
            </thead>
            <tbody>
            <tr>
                <td ></td>
                <td ></td>
                <td ></td>
                <td ></td>  
                <td ></td>              
            </tr>
            <tr>
                <td ></td>
                <td ></td>
                <td ></td>
                <td ></td>  
                <td ></td>              
            </tr>               
                
            </tbody>
            </table>

    </div>
    
    
</body>
</html>