<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title> Trips Table </title>
</head>
<body 
    style="margin: 50px;
          padding: 1px 1px;" > 
  

  <table class="table">
    <h1>List of Trips</h1>
    <thead>
      <tr style="text-transform: uppercase;">
       <th>#</th>
        <th>Driver ID</th>  
        <th>Trip starting date</th>
        <th>Trip ending date</th>
        <th>Cars km before the trip</th>
        <th>Cars km after the trip</th>
        <th>Fuel spended </th>
        <th>Trip distantion</th>
      </tr>
    </thead>

    <tbody>
      <?php
        include "db_connect.php";
        $sql = "SELECT  d_id ,t_id ,t_s_time , t_e_time ,t_s_k ,t_e_k ,t_f, t_direction  FROM trip_table ";
        $result = $mysqli->query($sql);
        echo $mysqli->host_info;

        if (!$result) {
          die ("Invalid query:". $connection->error);
        }

        if ($result->num_rows > 0) {
        // read data of each row 
        while($row = $result->fetch_assoc()) {

          echo "<tr>
            <th>". $row["t_id"]."</th>
            <th>". $row["d_id"]."</th>
            <th>".$row["t_s_time"]."</th>
            <th>". $row["t_e_time"]."</th>
            <th>". $row["t_s_k"] ."</th>
            <th>". $row["t_e_k"] . "</th>
            <th>". $row["t_f"] .  "</th> 
            <th>". $row["t_direction"]."</th>
          </tr>";
        } 

        // output data of each row
        // while($row = $result->fetch_assoc()) {
        //   echo "Nunber:" . $row["t_id"]. "  trip starting time : ".$row["t_s_time"]."  trip ending time : ". $row["t_e_time"] 
        //   ."trip start kilometer: ". $row["t_s_k"] ."trip end kilometer ". $row["t_e_k"] . "trip direction:". $row["t_direction"]."<br>";
        //   }
              } else {
          echo "0 results";
        }

      ?>
       </tbody>

       <tfooter>
         <a href="trips.php" class="btn btn-primary btn-sm" style="display:block;">back to Trips Page</a>
        <tfooter>
  </table>



</body>
</html>


<?php
//   $sql = "SELECT driver_id ,d_id , d_name ,d_s_name ,d_address, d_type  FROM driver_table";
//   $result = $mysqli->query($sql);

//   if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "Nunber:" . $row["driver_id"]. "  driver id : ".$row["d_id"]."  driver name: ". $row["d_name"] 
//     ."driver second name: ". $row["d_s_name"] ."driver type: ". $row["d_type"] . "driver address :". $row["d_address"]."<br>";
//     }
//   } else {
//     echo "0 results";
//   }

?>

