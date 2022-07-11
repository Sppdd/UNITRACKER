
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Trips</title>
</head>
<body >


        <?php
            include "db_connect.php";
            // $newtid= $_GET["tid"];
            $newdid = $_GET["did"]; 
            $newtstime = $_GET["tstime"]; 
            $newtetime= $_GET["tetime"];
            $newtsk= $_GET["tsk"];
            $newtek = $_GET["tek"];
            $newtdirection = $_GET["tdirection"];

            // $newtid = addslashes($newtid);
            $newdid= addslashes($newdid);
            $newtstime= addslashes($newtstime);
            $newtetime= addslashes($newtetime);
            $newtsk= addslashes($newtsk);
            $newtek= addslashes($newtek);
            $newtdirection= addslashes($newtdirection);

            // search the database for the trip direction
            // echo "<h2> show the new adding result for $newtdirection to the list :  </h2>";



            $f = 0.11;
            $d = $newtek - $newtsk ;
            $s = $d*$f;
            // echo "$d"; 
            // echo "<br>";
            // echo "$s";

            $sql = "INSERT INTO trip_table (t_id, d_id,t_s_time ,t_e_time,t_s_k ,t_e_k,t_f,t_direction ) VALUES
            (NULL ,'$newdid', '$newtstime','$newtetime','$newtsk','$newtek','$s','$newtdirection')";
            $result = $mysqli->query($sql) or die(mysqli_error($mysqli));
             include "search_all_trips.php";
            // echo "<h1>Adding is commplited </h1>";




        ?>


    <!-- <a href="trips.php" class="btn btn-primary btn-sm" style="display:block;">Reture to main page</a> -->

</body>
</html>


