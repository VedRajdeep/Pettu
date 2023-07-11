<?php
session_start();
error_reporting (0);
include 'config.php';
?>  
<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 30px;
}

.title {
  color: grey;
  font-size: 18px;
}


button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">User Profile</h2>

<div class="card">
  <h2 >User Name :- <?php
  echo $_SESSION['user_email'];
  ?></h2>
  <p class="title">Pet Name
    :- <?php
echo $_SESSION['pet_name'];
    ?>
  </p>
  
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p>
    <form method="post"><button name="back">Back</button></p></form>
    <?php
    if($_SESSION['user_email']){
    ?>
  <a href='appointment.html'><button class="btn" name="appoint_btn">Appointment</button></p></a>
    <?php
}
    ?>
</div>
<?php
if(isset($_POST['back'])){
  // remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "<script>window.location.href = 'index.php'</script>";
}
?>
</body>
</html>
