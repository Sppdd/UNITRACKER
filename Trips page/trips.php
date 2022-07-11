<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="trips.css">
        <title>Trips page</title>
    </head>
    <body> 
      <section class= banner>
        <div class="navbar"> 
          <h1 class="logo" display=black id=logo href="index.php" >unitracker</h1>
          <ul>
            <li><a href="index.php">Northern Technical University</a></li>
            <li><a href="search_all_trips.php">All Trips list </a></li>
          </ul>
        </div >
        
        <div class="content">
          <h1>Trips Page</h1>
          <p>This website to add Trips to the <b>Database Table</b> </p>

          <!-- Form Name -->
          <form class="search" action="search_keyword_trips.php">
            <!-- <legend>search form </legend> -->
            <!-- Text input-->
              <!-- <label for="keyword">Search a trip direction</label>   -->
              <label>Search a trip direction </label>
              <input id="keyword" name="keyword" type="text" placeholder="Mousl" required="">  
            <!-- Button -->
              <button id="submit " name="submit " class="subbtn"><span></span>Search</button>
          </form>

          <form class="adding" action="add_trips_info.php" >
            <!-- Form Name -->
            <!-- <legend>Adding Form </legend> -->
            <!-- Text input-->
              <!-- <label for="tstime"> trip starting time:</label>   -->


              <legend>Enter the driver ID:</legend>  
              <input id="did" name="did" type="text" placeholder=" 001 "  required="">

              <legend>Enter the time that trip start at:</legend>  
              <input id="tstime" name="tstime" type="date" placeholder=" 2020\3\25 "  required="">

            <!-- Text input-->
              <!-- <label for="tetime">trip ending time:</label>   -->
              <legend>Enter the time that trip end at:</legend>  
              <input id="tetime" name="tetime" type="date" placeholder="2020\3\27"  required="">

            <!-- Text input-->
              <!-- <label for="tsk">Mileage counter:</label>   -->
              <legend>Enter the Km before the trip:</legend>  
              <input id="tsk" name="tsk" type="number" placeholder="1223213"  required="">

            <!-- Text input-->
              <!-- <label for="tek">Mileage counter</label>   -->
              <legend>Enter the km after the trip:</legend>  
              <input id="tek" name="tek" type="number" placeholder="1223255"  required="">
            
            <!-- Text input-->
              <!-- <label for="tdirection ">Trip destination:</label>   -->
              <legend>Enter the trip destination:</legend>  
              <input id="tdirection" name="tdirection" type="text" placeholder="Old city of Mosul"  required="">

            <!-- Button -->
            <!-- <label for="submit "></label> -->
              <button id="submit " name="submit " class="addbtn"><span></span>Add</button>
            

          </form>
            <!-- <a href="search_all_trips.php">
                <button id="link " name="link" class="linkbtn">All Trips list </button>
            </a> -->
        </div>
      </section>

      <?php
      include "db_connect.php";

          //  $sql = "SELECT t_id ,t_s_time , t_e_time , t_s_k ,t_e_k, t_direction FROM trips_table";
          //  $result = $mysqli->query($sql);

          //  if ($result->num_rows > 0) {
          //   // output data of each row
          //    while($row = $result->fetch_assoc()) {
          //   echo "Nunber:" . $row["t_id"]. "  trip starting time : ".$row["t_s_time"]."  trip ending time : ". $row["t_e_time"] 
          //    ."trip start kilometer: ". $row["t_s_k"] ."trip end kilometer ". $row["t_e_k"] . "trip direction:". $row["t_direction"]."<br>";
          //    }
          //       } else {
          //    echo "0 results";
          //  }

      ?>


    </body>
  </html>