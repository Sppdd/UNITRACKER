<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <title> Vehicle page </title>
  <link rel="stylesheet" href= "vehicle.css">
</head>

<body >
  <section class= banner> 
   <div class="navbar">
     <h1 class="logo" display=black >unitracker</h1>
     <ul>
       <li><a href="index.php">Northern Technical University</a></li>
       <li><a href="search_all_vehicles.php">Vehicles List</a></li>
      </ul>
    </div>
    
    <?php
      include "db_connect.php" ;
      //nclude "search_all_vehicles.php";
    ?>

    <section class="content">
      <h1>Vehicles Page</h1>
      <p>This website to add Vehicles to the <b>Database Table</b> </p>

      <form  class="search" action="search_keyword.php">
        <!-- Form Name -->
        <!-- <h3>Search Section </h3> -->
        <!-- Text input-->
        <label for="vname">search a vehicle Id  </label>  
        <!-- <legend >Search the vehicle name</legend> -->
        <input id="vname" name="vname" type="text" placeholder="e.g 1213"  required="">
        
        <!-- Button -->
          <!-- <label for="submit"></label> -->
          <button id="submit" name="submit"  class="subbtn" ><span></span>Search</button>
      </form>

      <!-- Adding form in main page  -->
      <form  class="adding" action="add_vehicle_info.php">
        <!-- Form Name -->
        <!-- <h3>Adding Section </h3> -->
        <!-- Text input-->
          <!-- <label for="newvname"></label>   -->
          <legend >Enter a vehicle name</legend> 
          <input id="newvname" name="newvname" type="text" placeholder="e.g Jeeb"  required="" >
          
          <!-- Text input-->
            <!-- <label for="newvid"></label>   -->
            <legend >Enter a vehicle ID </legend>  
            <input id="newvid" name="newvid" type="text" placeholder="e.g Iraq Baghdad 2342"  required="">

        <!-- Text input-->
          <!-- <label for="prodyear"></label>   -->
          <legend >Enter a vehicle product year</legend> 
          <input id="prodyear" name="prodyear" type="text" placeholder="e.g 2022"  required="">

        <!-- Text input-->
          <!-- <label for="vtype"></label>   -->
          <legend >Enter a vehicle type </legend>  
          <input id="vtype" name="vtype" type="text" placeholder="e.g personal"  required="">

        <!-- Text input-->
          <!-- <label for="vbodyid"></label>   -->
          <legend >Enter a vehicle body ID </legend>  
          <input id="vbodyid" name="vbodyid" type="text" placeholder="e.g 24245oia"  required="">

        <!-- Text input-->
          <!-- <label for="vfliters"></label>   -->
          <legend >Enter a vehicle flu liters </legend>  
          <input id="vfliters" name="vfliters" type="text" placeholder="e.g 75L"  required="">

        <!-- Button -->
          <!-- <label for="submit"></label> -->
          <button id="submit" name="submit" class="addbtn" ><span></span>Add</butto>

      </form>
    </section>
  </section>

  <?php
  //nclude "search_keyword.php";
  $mysqli->close();
  ?>

</body>
</html>