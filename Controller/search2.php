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
  require_once "search2_model.php";

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

  // initializing variables
public $username = "";
public $email    = "";
public $name = "";
public $errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hotelratingsystem');



if (isset($_POST['searchname'])) {
  $template->search = $obj->searchName();
       

}

if (isset($_POST['ratingsearch'])) {

       $template->search = $obj->ratingSearch();

}

    
}
?>
</div>
</div>

          
</body>
</html>