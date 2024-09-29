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
      <a href="#Subject" onclick="showSubject()">BCA 1</a>
    </div>
    <div class="bca2">
      <a href="bca2.php">BCA 2</a>
    </div>
    <div class="bca3">
      <a href="bca3.php">BCA 3</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT------------------------------------------->
  <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#FC" onclick="showTable('FC')">FC</a>
    </div>
    <div class="Sub2">
      <a href="#C" onclick="showTable('C')">C PROG</a>
    </div>
    <div class="Sub3">
      <a href="#PM" onclick="showTable('PM')">PM</a>
    </div>
    <div class="Sub4">
      <a href="#BC" onclick="showTable('BC')">BC</a>
    </div>
    <div class="Sub5">
      <a href="#OA" onclick="showTable('OA')">OA</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT - FC------------------------------------------->
  <div id="FC" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - FC</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputFC">Select Date : </label>
          <input type="date" id="dateInputFC" onchange="loadAttendance('FC')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceFC1" id="attendanceFC1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceFC2" id="attendanceFC2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceFC3" id="attendanceFC3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceFC4" id="attendanceFC4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!----------------------------------------SUBJECT - C------------------------------------------->
  <div id="C" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - C</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputC">Select Date : </label>
          <input type="date" id="dateInputC" onchange="loadAttendance('C')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceC1" id="attendanceC1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceC2" id="attendanceC2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceC3" id="attendanceC3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceC4" id="attendanceC4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!----------------------------------------SUBJECT - PM------------------------------------------->

    <div id="PM" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - PM</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputPM">Select Date : </label>
          <input type="date" id="dateInputPM" onchange="loadAttendance('PM')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendancePM1" id="attendancePM1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendancePM2" id="attendancePM2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendancePM3" id="attendancePM3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendancePM4" id="attendancePM4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>


      <!----------------------------------------SUBJECT - BC------------------------------------------->
      <div id="BC" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - BC</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputBC">Select Date : </label>
          <input type="date" id="dateInputBC" onchange="loadAttendance('BC')"><br>Present</th>
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
  

        <!----------------------------------------SUBJECT - OA------------------------------------------->
        <div id="OA" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - OA</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputOA">Select Date : </label>
          <input type="date" id="dateInputOA" onchange="loadAttendance('OA')"><br>Present</th>
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
  <script>
    // Function to show the subject selection.
function showSubject() {
  document.getElementById('Subject').style.display = 'flex';
}

// Function to show the selected subject's table.
function showTable(subject) {
  // Hide all subject tables first
  document.querySelectorAll('#FC, #C, #PM, #BC, #OA').forEach(div => {
    div.style.display = 'none';
  });

  // Display the selected subject table.
  document.getElementById(subject).style.display = 'block';

  // Update the date input ID to the one specific to the selected subject
  document.getElementById('dateInputFC').setAttribute('onchange', "loadAttendance('FC')");
  document.getElementById('dateInputC').setAttribute('onchange', "loadAttendance('C')");
  document.getElementById('dateInputPM').setAttribute('onchange', "loadAttendance('PM')");
  document.getElementById('dateInputBC').setAttribute('onchange', "loadAttendance('BC')");
  document.getElementById('dateInputOA').setAttribute('onchange', "loadAttendance('OA')");
}

// Load attendance data from localStorage.
function loadAttendance(subject) {
  const date = document.getElementById('dateInput' + subject).value;
  if (date) {
    const attendanceData = JSON.parse(localStorage.getItem('attendance_' + subject + '_' + date)) || {};

    // Update checkbox states based on the loaded data
    document.querySelectorAll(#${subject} input[type="checkbox"]).forEach(checkbox => {
      const name = checkbox.getAttribute('name');
      checkbox.checked = attendanceData[name] || false;
    });
  }
}

// Add event listeners to save attendance when checkboxes change.
document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
  checkbox.addEventListener('change', saveAttendance);
});
  
// Save attendance to localStorage.
function saveAttendance() {
  const subject = [...document.querySelectorAll('#FC, #C, #PM, #BC, #OA')].find(div => div.style.display === 'block').id;
  const date = document.getElementById('dateInput' + subject).value;

  if (!date) {
    alert("Please select a date first.");
    return;
  }

  let attendanceData = {};
  document.querySelectorAll(#${subject} input[type="checkbox"]).forEach(checkbox => {
    attendanceData[checkbox.getAttribute('name')] = checkbox.checked;
  });

  localStorage.setItem('attendance_' + subject + '_' + date, JSON.stringify(attendanceData));
  alert("Attendance saved for " + date);
}


  </script>
</body>
</html>