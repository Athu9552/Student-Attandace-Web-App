<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENT ATTENDANCE MANAGEMENT</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
  <link rel="stylesheet" href="style.css">
  <style>
    #Subject {
      display: none;
    }
    .bca1, .bca2, .bca3 {
      cursor: pointer;
    }
    
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
      <option value="#BCA">BCA</option>
      <option value="#MCA">MCA</option>
      <option value="#B_TECH">B.TECH</option>
    </select>
  </div>

  <!----------------------------------------BCA------------------------------------------->
  <div id="BCA">
    <div class="bca1" id="bca1-div">
      <a href="bca1.php">BCA 1</a>
    </div>
    <div class="bca2">
      <a href="bca2.php">BCA 2</a>
    </div>
    <div class="bca3">
      <a href="bca3.php">BCA 3</a>
    </div>
  </div>

  <script src="index.js"></script>
</body>
</html>