<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENT ATTENDANCE MANAGEMENT</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
<link rel="stylesheet" href="style.css">
<style>

          /* CSS for background video */
          video {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover;
        } 

</style>
</head>
<body>

      <!-- Background Video -->
  <video autoplay loop muted>
    <source src="bg/bg8.mp4" type="video/mp4"/>
    Your browser does not support the video tag.
  </video>
 
 
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fa-solid fa-bars"></i>
    </label>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  <div class="session-area">
  DEPARTMENTS
    <select onChange="window.location.href=this.value">
      <option></option>
      <option value="bca.php">BCA</option>
      <option value="mca.php">MCA</option>
      <option value="bTech.php">B.TECH</option>
    </select>
</div>
<script src="index.js"></script>
</body>
</html>