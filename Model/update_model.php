<!DOCTYPE html>
<html>
    <head>
        <title> Update </title>
        <link rel = "stylesheet" type="text/css" href="updateStyle.css">
    </head>
    <body>
        <h1> What do you want to do ? </h1>
		<div class = "update">
		<form method = "post">
		<div class="search-box1"> 
            <input class ="search-txt" type = "text" name="box1" placeholder="Old Password">
        </div>
        <div class="search-box2">
             <input class ="search-txt" type = "text" name="box2" placeholder="New Password"><br>
         </div>
         <div class="search-box3">
             <input class ="search-txt" type = "text" name="box3" placeholder="Confirm Password">
        </div>
		<button type="submit" a class="search-btn"  name="updatebutton">Update Password</button> </a>
		</form>
        </div>
		
        <div class = "delete">
		<form method="post">
		<div class="search-box4">
             <input class ="search-txt" type = "text" name="box4" placeholder="Password">
             </div>
             <div class="search-box5">
             <input class ="search-txt" type = "text" name="box5" placeholder="Hotel Name">
			 </div>
               <button type="submit" a class="search-btn"  name="deletebutton">Delete Rating</button> </a>
			  
		</form>
        </div>
        <?php 
        class update {
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

  public function updatebutton(){
  $oldpass=mysqli_real_escape_string($db, $_POST['box1']);
  $newpass=mysqli_real_escape_string($db, $_POST['box2']);
  $sql = "UPDATE users set password = '$newpass' where password = '$oldpass' ";
  $result = mysqli_query($db, $sql);
  }

  public function deletebutton(){
  $pass = mysqli_real_escape_string($db, $_POST['box4']);
  $hotel = mysqli_real_escape_string($db, $_POST['box5']);
  $sql = "DELETE from stars where hotel = '$hotel' and user = (SELECT username from users where password ='$pass') ";
  $result1 = mysqli_query($db, $sql);
  }
}
  ?>

    </body>
</html>