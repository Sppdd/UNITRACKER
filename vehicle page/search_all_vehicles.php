<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title> Vehicles Table </title>
    </head>
    <body 
        style="margin: 50px;
              padding: 1px 1px;" >
      

      <table class="table">
        <h1>Vehicles List</h1>
        <thead>
          <tr style="text-transform: uppercase;">
            <th>#</th>
            <th>Vehicle name</th>
            <th>Vehicle ID</th>
            <th>Product Year</th>
            <th>vehicle type</th>
            <th>Vehicle body ID</th>
            <th>Vehicle flu </th>
          </tr>
        </thead>
        <tbody>
            <?php
              include "db_connect.php";
              $sql = "SELECT number , v_name ,v_id , prod_year ,v_type ,v_body_id , v_f_liters  FROM Vehicles_table";
              $result = $mysqli->query($sql);
              echo $mysqli->host_info;

              if (!$result) {
                die ("Invalid query:". $connection->error);
              }

              if ($result->num_rows > 0) {
              // read data of each row 
              while($row = $result->fetch_assoc()) {
          
                echo "<tr>
                  <th>". $row["number"]."</th>
                  <th>".$row["v_name"]."</th>
                  <th>". $row["v_id"] ."</th>
                  <th>". $row["prod_year"] ."</th>
                  <th>". $row["v_type"] . "</th>
                  <th>". $row["v_body_id"] . "</th>
                  <th>". $row["v_f_liters"] ."</th>
                </tr>";
              } 

                    } else {
                echo "0 results";
              }

            ?>
        </tbody>

        <tfooter>
          <a href="Newcarform.php" class="btn btn-primary btn-sm" style="display:block;">back to vehicle Page</a>
        <tfooter>
      </table>

    </body>
  </html>

<?php
  // if there are any values in the table , diplay them one at a time.
  // If ($mysqli->connect_errno){
  //   echo "Faliled to connect to MySQl:(" . $mysqli->connect_errno .") " . $mysqli->connect_error;
  // }
  // echo $mysqli->host_info . "<br>";

  // $sql = "SELECT number , v_name ,v_id , prod_year ,v_type ,v_body_id , v_f_liters  FROM Vehicles_table";
  // $result = $mysqli->query($sql);

  // if ($result->num_rows > 0) {
  //   // output data of each row
  //   while($row = $result->fetch_assoc()) {
  //     echo "number:" . $row["number"]. "  vehicles name : ".$row["v_name"]."   vehicles ID: ". $row["v_id"] 
  //   ."prodect year: ". $row["prod_year"] ."vehicles type: ". $row["v_type"] ."vehicles body ID: ". $row["v_body_id"] ."vehicles flu liters: ". $row["v_f_liters"] ."<br>";
  //   }
  // } else {
  //   echo "0 results";
  // }
?>