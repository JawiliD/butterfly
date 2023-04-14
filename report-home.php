<?php
$username = "root";
$password = "";
$database = "data";

 try {
    $pdo = new PDO("mysql:host=localhost;database=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
    catch(PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }
 
?>

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
            <li class="butterfly"><h4>Butterfly</h4></li>
            <li><a href=""><h4>Wildlife Permit</h4></a></li>
            <li><a href=""><h4>Status</h4></a></li>
            <li><a href=""><h4>Report</h4></a></li>
        </ul>
    </div>
    <div class="top-header">        
            <h1><img class="penro-logo" src="image/logo2.png" alt="penro-logo"> LOCAL TRANSPORT PERMIT FOR WILDLIFE</h1>
            <h1>●～●～●～●BUTTERFLY●～●～●～●</h1>          

        <hr>        
            <a id="home" href="">HOME</a>
            <a href="report-matrix.php">MATRIX</a>
            <a href="report-statistics.php">STATISTICS</a>
            <a href="report-butterfly.php">BUTTERFLY</a>        
    </div>

    <div class="content"> 
        <!-- the green background is just a guide for the size of workarea -->
        <!-- -----start programming here------ -->
    <h1>SUMMARY</h1>
    <h2>TOTAL REVENUE</h2>
    <div class="report">
    <form action="" method="POST">
            <table>
                <tr>
                    <th>
                        <label>From Date</label>
                        <input type="date" name="from_date" onchange="startDateFilter(this)">
                    </th>
                    <th>
                        <label>To Date</label>
                        <input type="date" name="to_date" onchange="endDateFilter(this)">
                    </th>
                    <th>
                        <button id="filter" type="submit">Filter</button>
                    </th>   
                    <th></th>                                  
                    <th><h4 class="amount">Total Amount</h4></th>
                </tr>
            </table>
        </form>
    </div>    
    <div class="chartCard">
      <div class="chartBox">       
        <canvas id="myChart"></canvas>
      </div><br><br>
    </div>
    
        <div>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script>
    // setup 
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
      datasets: [{
        label: 'Weekly Sales',
        data: [18, 12, 6, 9, 12, 3, 9],
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
    </script>
</div>

    <?php

        // try {
        //     $sql ="SELECT * FROM data.order-payment";
        //     $result = $pdo->query($sql);

        //     if($result->roCount() > 0) {
        //         while($row = $result->fetch()) {
        //             $dateArray[] = $row["date"];
        //             $amountArray[] = $row["amount"];
        //         }
        //         unset($result);
        //         print_r($dateArray);
        //     } else{
        //         echo "your database is empty";
        //     }
        // } catch(PDOException $e){
        //     die("Error Data");
        // }
        // unset($pdo);
    ?>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
   
    <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script> -->

   <script>

    // const dateArrayJS = <?php echo json_encode($dateArray);?>;
    // console.log(dareArrayJS)

    // const dateChartJS = dateArrayJS.map((day, index) => {
    //     let dayjs = new Date(day);     
    //     return dayjs.setHours(0, 0, 0, 0);
    // });   



    // setup 
    const data = {
      labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    //    dateChartJS,
      datasets: [{
        label: 'Weekly Sales',
        data:[18, 12, 6, 9, 12, 3, 9],
         <?php 
        //  echo json_encode($amountArray);
         ?>
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
        scales: {
        //   x: {
        //     min: '2023-4-1',
        //     max: '2023-4-30',
        //     type: 'time',
        //     time:{
        //         unit:'day'
        //     }
        //   }
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;

    // function startDateFilter(date){
    //      const startDate = new Date(date.value);
    //      console.log(startDate.setHours(0, 0, 0, 0)); 
    //      myChart.config,opyions,scales.x.min = startDate.setHours(0, 0, 0, 0);
    //      myChart.update();
    // }

    // function endDateFilter(date){
    //      const startDate = new Date(date.value);
    //      console.log(endDate.setHours(0, 0, 0, 0)); 
    //      myChart.config,opyions,scales.x.max = endDate.setHours(0, 0, 0, 0);
    //      myChart.update();
    // }
    </script>
    <div class="report">        
        <h2>TOTAL NUMBER OF TRANSPORTED  BUTTERFLY</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <th>
                        <label>From Date</label>
                        <input type="date" name="from_date">
                    </th>
                    <th>
                        <label>To Date</label>
                        <input type="date" name="from_date">
                    </th>
                    <th>
                        <button id="filter" type="submit">Filter</button>
                    </th>
                    <th></th>
                    <th>
                        <button id="view-doc" type="submit">View Document</button>
                    </th>
                </tr>
            </table>
        </form>
        <div class="table-div">
            <div class="report-table">
            <table >
                    <thead>
                        <tr>
                        <th>No.</th>
                        <th>Common Name</th>
                        <th colspan="12">NUMBER OF TRASPORTED BUTTERFLY FOR A YEAR</th>                    
                        <th>Description</th>  
                        <th>Operation</th>              
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>January</th>
                        <th>February</th>
                        <th>March</th>
                        <th>April</th>
                        <th>May</th>
                        <th>June</th>
                        <th>July</th>
                        <th>August</th>
                        <th>September</th>
                        <th>October</th>
                        <th>November</th>
                        <th>December</th>
                        <th></th>  
                        <th></th>              
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>  
                        <td ></td>              
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
                        <td ></td>              
                        <td ></td>              
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
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
            </div>
        </div>
    </div>
    <div class="report">
    <h2>TOTAL NUMBER OF LOCAL TRANSPORT PERMIT</h2>
        <form action="" method="POST">
            <table>
                <tr>
                    <th>
                        <label>From Date</label>
                        <input type="date" name="from_date">
                    </th>
                    <th>
                        <label>To Date</label>
                        <input type="date" name="from_date">
                    </th>
                    <th>
                        <button id="filter" type="submit">Filter</button>
                    </th>
                    <th></th>
                    <th>
                        <button id="view-doc" type="submit">View Document</button>
                    </th>
                </tr>
            </table>
        </form>
        <div class="table-div">
            <div class="report-table">
            <table >
                        <thead>
                            <tr>
                            <th>No.</th>
                            <th>Permittee</th>
                            <th>Address</th>
                            <th>Business Man</th>
                            <th colspan="12">NUMBER OF PERMITS FOR A YEAR</th>                    
                            <th>GRAND<br> TOTAL</th>  
                            <th>FEES<br> COLLECTECTED<br> (PHP)</th>              
                            <th>TOTAL OF<br> PUPAE<br>TRANSPORTED</th>              
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>January</th>
                            <th>February</th>
                            <th>March</th>
                            <th>April</th>
                            <th>May</th>
                            <th>June</th>
                            <th>July</th>
                            <th>August</th>
                            <th>September</th>
                            <th>October</th>
                            <th>November</th>
                            <th>December</th>
                            <th></th>  
                            <th></th>  
                            <th></th>              
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
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
                            <td ></td>              
                            <td ></td>              
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>
                            <td ></td>  
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                            <td ></td>              
                        </tr>  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    

           

    </div>
    
    
</body>
</html>