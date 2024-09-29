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
    .bTech1, .bTech2, .bTEch3, .bTech4 {
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

  <!----------------------------------------B.TECH------------------------------------------->
  <div id="B_TECH">
    <div class="bTech1" id="bTech1-div">
      <a href="bTech1.php">B.TECH 1</a>
    </div>
    <div class="bTech2">
      <a href="bTech2.php">B.TECH 2</a>
    </div>
    <div class="bTech3">
      <a href="bTech3.php">B.TECH 3</a>
    </div>
    <div class="bTech4">
      <a href="bTech4.php">B.TECH 4</a>
    </div>
  </div>

  <script src="index.js"></script>
</body>
</html>