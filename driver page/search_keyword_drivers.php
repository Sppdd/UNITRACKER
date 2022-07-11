<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title> Driver Table </title>
</head>
<body 
    style="margin: 50px;
          padding: 1px 1px;" >
  

  <table class="table">
    <!-- <h1>List of Drivers info</h1> -->
    <thead>
      <tr style="text-transform: uppercase;">
        <th>#</th>
        <th>Driver ID </th>
        <th>Driver name </th>
        <th>contect num.</th>
        <th>Driver address</th>
        <th>Driver type </th>
      </tr>
    </thead>

    <tbody>
      <?php
        include "db_connect.php";
        $keywordfromform = $_GET["keyword"];

        echo "<h2> Show the searching result for $keywordfromform : </h2>";
        $sql = "SELECT driver_id ,d_id , d_name ,d_s_name ,d_address, d_type  FROM driver_table WHERE d_id LIKE '%". $keywordfromform ."%' ";
        $result = $mysqli->query($sql);

        if (!$result) {
          die ("Invalid query:". $connection->error);
        }

        // read data of each row 
        while($row = $result->fetch_assoc()) {

          echo "<tr>
            <th>". $row["driver_id"]."</th>
            <th>".$row["d_id"]."</th>
            <th>". $row["d_name"] ."</th>
            <th>". $row["d_s_name"] ."</th>
            <th>". $row["d_address"]."</th>
            <th>". $row["d_type"] . "</th>
          </tr>";
        } 

        if ($result->num_rows > 0) {
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
         <a href="driver.php" class="btn btn-primary btn-sm" style="display:block;">back to Drivers Page</a>
        <tfooter>
  </table>

</body>
</html>

<?php

  // include "db_connect.php";
  // $keywordfromform = $_GET["keyword"];

  // // search the database for the drivers
  // echo "<h2> Show the searching result for $keywordfromform : </h2>";
  // $sql = "SELECT driver_id ,d_id , d_name ,d_s_name ,d_address, d_type  FROM driver_table WHERE d_name LIKE '%". $keywordfromform ."%' ";
  // $result = $mysqli->query($sql);


  //   if ($result->num_rows > 0) {
  //   // output data of each row
  //   while($row = $result->fetch_assoc()) {
  //     echo "Nunber:" . $row["driver_id"]. "  driver id : ".$row["d_id"]."  driver name: ". $row["d_name"] 
  //   ."driver second name: ". $row["d_s_name"] ."driver type: ". $row["d_type"] . "driver address :". $row["d_address"]."<br>";
  //   }
  // } else {
  //   echo "0 results";
  // }
?>