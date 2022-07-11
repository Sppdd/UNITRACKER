<?php

    include "db_connect.php";

    $newvname = $_GET["newvname"];
    $newvid = $_GET["newvid"];
    $pordyear = $_GET["prodyear"];
    $vtype = $_GET["vtype"];
    $vbodyid = $_GET["vbodyid"];
    $vfluliters = $_GET["vfliters"];

    $newvname = addslashes($newvname);
    $newvid= addslashes($newvid);
    $prodyear= addslashes($pordyear);
    $vtype= addslashes($vtype);
    $vbodyid= addslashes($vbodyid);
    $vfluliters= addslashes($vfluliters);


    // search the database for the vehicle

    $sql = "INSERT INTO Vehicles_table (number,v_name,v_id,prod_year,v_type,v_body_id,v_f_liters) VALUES (NULL ,'$newvname','$newvid','$pordyear','$vtype','$vbodyid','$vfluliters')";
    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));
    // echo "<h3> The new adding result for $newvname  </h3>";
    include "search_all_vehicles.php";
?>


