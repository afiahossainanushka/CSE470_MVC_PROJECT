<?php 
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
?>
<!DOCTYPE html>
<html>
<head>
  <title> Welcome </title>
  <link rel = "stylesheet" type="text/css" href="indexstyle.css">
  </head>
  <body>
  <header>
  <div class ="main">
      
  <ul>
  <li class="active"><a href="#"> Home</a></li>
  <li><a href="update.php"> Profile</a></li>
  <li><a href="Search2.php"> Search</a></li>
  <?php  if (isset($_SESSION['username'])) : ?>
  <li><a href="index.php?logout='1'" style="color: red;">logout</a> </li>
    <?php endif ?>
  </ul>
  </div>
</header>
  <section>
  <div class ="title">
  <h1> Looking for hotels ? <br> Here is some popular hotels... </h1>
  </div>
<section class ="Meridien">
  <div class ="main">
      <div class ="col-1">
          <a href="Radissonstars.php">
            <img src = "Radisson.jpg" >
            </a>
            <div class = "text-box">
                <p>Radisson</p>
            </div>
        </div>
            <div class ="col-1">
                <a href="PanPacificstars.php">
              <img src = "PanPacific.jpg" >
              </a>
              <div class = "text-box">
                  <p>Pan Pacific</p>
                  </div>
              </div>
          
          <div class ="col-1">
              <a href="Meridienstars.php">
              <img src = "Meridien.jpg" >
              </a>
              <div class = "text-box">
                  
                  <p>Le Meridien</p>
              </div>
          </div>
          <div class ="col-1">
              <a href="Westinstars.php">
            <img src = "Westin.jpg" >
            </a>
            <div class = "text-box">     
                <p>Westin</p>
            </div>
        </div>
        <div class ="col-1">
                <a href="SixSeasonstars.php">
            <img src = "SixSeason.jpg" >
            </a>
            <div class = "text-box">
                <p>Six Season</p>
            </div>
        </div>
        <div class ="col-1">
                <a href="InterContinentalstars.php">
          <img src = "InterContinental Dhaka.jpg" >
          </a>
          <div class = "text-box">
              <p>InterContinental </p>
          </div>
      </div>
        <div class ="col-1">
                <a href="Artisanstars.php">
          <img src = "Artisan.jpg" >
          </a>
          <div class = "text-box">
              <p>The Artisan</p>
          </div>
      </div>
      <div class ="col-1">
            <a href="MomoInnstars.php">
          <img src = "Momo Inn2.jpg" >
          </a>
          <div class = "text-box">
              <p>Momo Inn</p>
          </div>
      </div>

  </div>
</section>;
</section>

  </body>
  </html>