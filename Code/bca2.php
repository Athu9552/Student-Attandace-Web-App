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
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
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
      <option value="#">MCA</option>
      <option value="#">B.TECH</option>
    </select>
  </div>

  <!----------------------------------------BCA------------------------------------------->
  <div id="BCA">
    <div class="bca1" id="bca1-div">
      <a href="bca1.php">BCA 1</a>
    </div>
    <div class="bca2">
      <a href="#Subject" onclick="showSubject()">BCA 2</a>
    </div>
    <div class="bca3">
      <a href="bca3.php">BCA 3</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT------------------------------------------->
  <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#HRM" onclick="showTable('HRM')">HRM</a>
    </div>
    <div class="Sub2">
      <a href="#CN" onclick="showTable('CN')">CN</a>
    </div>
    <div class="Sub3">
      <a href="#RDBMS" onclick="showTable('RDBMS')">RDBMS</a>
    </div>
    <div class="Sub4">
      <a href="#DS" onclick="showTable('DS')">DS</a>
    </div>
    <div class="Sub5">
      <a href="#STATS" onclick="showTable('STATS')">STATS</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT - HRM------------------------------------------->
  <div id="HRM" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - HRM</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputHRM">Select Date : </label>
          <input type="date" id="dateInputHRM" onchange="loadAttendance('HRM')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceHRM1" id="attendanceHRM1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceHRM2" id="attendanceHRM2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceHRM3" id="attendanceHRM3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceHRM4" id="attendanceHRM4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!----------------------------------------SUBJECT - CN------------------------------------------->
  <div id="CN" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - CN</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputCN">Select Date : </label>
          <input type="date" id="dateInputCN" onchange="loadAttendance('CN')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceCN1" id="attendanceCN1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceCN2" id="attendanceCN2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceCN3" id="attendanceCN3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceCN4" id="attendanceCN4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!----------------------------------------SUBJECT - RDBMS------------------------------------------->

    <div id="RDBMS" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - RDBMS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputRDBMS">Select Date : </label>
          <input type="date" id="dateInputRDBMS" onchange="loadAttendance('RDBMS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceRDBMS1" id="attendanceRDBMS1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceRDBMS2" id="attendanceRDBMS2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceRDBMS3" id="attendanceRDBMS3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceRDBMS4" id="attendanceRDBMS4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>


      <!----------------------------------------SUBJECT - DS------------------------------------------->
      <div id="DS" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - DS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputDS">Select Date : </label>
          <input type="date" id="dateInputDS" onchange="loadAttendance('DS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendance1" id="attendance1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendance2" id="attendance2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendance3" id="attendance3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendance4" id="attendance4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  

        <!----------------------------------------SUBJECT - STATS------------------------------------------->
        <div id="STATS" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - STATS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputSTATS">Select Date : </label>
          <input type="date" id="dateInputSTATS" onchange="loadAttendance('STATS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendance1" id="attendance1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendance2" id="attendance2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendance3" id="attendance3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendance4" id="attendance4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="index.js"></script>
</body>
</html>