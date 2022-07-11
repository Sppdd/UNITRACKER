<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="trips.css">
  <title>AddDrivers</title>
</head>
<body>

    <?php
      //database__________db_connect______
      include "db_connect.php";

      // _____________search_all_drivers____________
      // include "search_all_drivers.php"

      // ________________search_keyword_______________
      // include "search_keyword_drivers.php"
    ?>
  <section class="banner">
      <div class="navbar"> 
        <h1 class="logo" display=black id=logo ><a href="index.php">unitracker</a></h1>
        <ul>
          <li><a href="index.php">Northern Technical University</a></li>
          <li><a href="search_all_drivers.php">All Driver list </a></li>
        </ul>
      </div >


    <div class="content">
      <h1>Driver Page</h1>
      <p>This website to add Drivers to the <b>Database Table</b> </p>

       <form class="search" action="search_keyword_drivers.php">
          <!-- Form Name -->    
          <!-- <legend>search form </legend> -->
          <!-- Text input-->
          <!-- <label  for="keyword">search a keyword</label>   -->
            <label style= "margin_right:105px;">search a Driver ID </label>  
            <input id="keyword" name="keyword" type="text" placeholder="ex.4224"  required="">

          <!-- Button -->
          <!-- <label  for="submit "></label> -->
              <button id="submit " name="submit " class="subbtn"><span></span>search</button>
        </form>


      <form  class="adding" action="add_driver_info.php">
        <!-- Form Name -->
        <!-- <legend>Adding Form </legend> -->
        <!-- Text input-->
          <!-- <label for="did"> Driver ID:</label>   -->
          <legend>Enter the driver ID:</legend>  
          <input id="did" name="did" type="text" placeholder="ex: 114a "  required="">
          

        <!-- Text input-->
          <!-- <label  for="dname">Driver First name:</label>   -->
          <legend>Enter the Driver First name:</legend>  
          <input id="dname" name="dname" type="text" placeholder="ex. Ali"  required="">
          
        <!-- Text input-->
          <!-- <label  for="dsname">Driver Second name:</label>   -->
          <legend >Enter the Driver phone num.:</legend>
          <input id="dsname" name="dsname" type="text" placeholder="ex.077134534##" required="">
            
        <!-- Text input-->
          <!-- <label  for="daddress">Driver address:</label>   -->
          <legend >Enter the Driver address:</legend>  
          <input id="daddress" name="daddress" type="text" placeholder="ex.Kirkuk, Iraq" required="">
          
        <!-- Text input-->
          <!-- <label  for="dtype ">Driver type:</label>   -->
          <legend >Enter the driver type:</legend> 
          <input id="dtype" name="dtype" type="text" placeholder="ex. Normal driver" required=""> 
            
          <!-- Button -->
          <label  for="submit "></label>
          <button id="submit " name="submit " class="addbtn"><span></span>Add</button>
        </form>
    </div>
  </section>



</body>
</html>