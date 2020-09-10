<!DOCTYPE html>
<html>
<head>
  <title> Search </title>
  <link rel = "stylesheet" type="text/css" href="search2Style.css">
  </head>
  <body>
     <div class ="rating">
        <form method="post">
            <h1> Search By Ratings </h1>
            <div class="search-box2">
                 <input  class ="search-txt"  type = "text" name="fr" placeholder="              FROM">
            </div>
            <div class="search-box3">
                 <input class ="search-txt" type = "text" name="to" placeholder="                 TO">
            </div>
                <button type="submit" a class="search-btn"  name="ratingsearch">Search</button> </a>
              </form>
               
            </div>
      <div class = "header1">
          <div class = "search">
              <form method="post">
                  <input type = "text" placeholder = "Hotel Name" name="hotel">
                  <button type="submit" a class="btn"  name="searchname">Search</button> </a>    
              </form>
       </div>
      </div>

<div style="margin-left:30%; margin-top:20%; background-color: white; border-right: 30px; opacity: 0.9; width:550px">
  <div style="margin-left: 10%">
<?php 

  class search{ 


  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hotelratingsystem');



function searchName() {
        $name = mysqli_real_escape_string($db, $_POST['hotel']);
          $sql = "SELECT * FROM hotels where hotelname like '%$name%'";
          $result = mysqli_query($db, $sql);


         if ($result->num_rows > 0) {
         // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<br>| Hotel Name: ". $row["hotelname"].
            "|<br>";
            $img = $row["image"];
            echo "<br><img src='hotelphotos/$img' width=400 height=200> <br>";
            //echo "-------------------------------------------------------------------------------------------------------";
            } 
        } else {
          echo "0 results";
          }
    }


    function ratingSearch() {

      $from = mysqli_real_escape_string($db, $_POST['fr']);
        $to = mysqli_real_escape_string($db, $_POST['to']);
        $sql = "SELECT * FROM hotels where rating between $from and $to";
        $result = mysqli_query($db, $sql);


        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<br>| Hotel Name: ". $row["hotelname"]." (Rated ".$row["rating"]." Stars)".
            "|<br>";
            $img = $row["image"];
            echo "<br><img src='hotelphotos/$img' width=400 height=200> <br>";
            //echo "-------------------------------------------------------------------------------------------------------";
            }
        } else {
          echo "0 results";
          }

    }
}
?>
</div>
</div>

          
</body>
</html>