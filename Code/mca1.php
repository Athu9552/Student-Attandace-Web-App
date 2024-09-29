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
    .mca1, .mca2{
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
      <option value="#MCA">MCA</option>
      <option value="#">B.TECH</option>
    </select>
  </div>

  <!----------------------------------------BCA------------------------------------------->
  <div id="MCA">
    <div class="mca1" id="mca1-div">
      <a href="#Subject" onclick="showSubject()">MCA 1</a>
    </div>
    <div class="mca2">
      <a href="mca2.php">MCA 2</a>
    </div>
  </div>

    <!----------------------------------------SUBJECT------------------------------------------->
    <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#COA" onclick="showTable('COA')">COA</a>
    </div>
    <div class="Sub2">
      <a href="#CPC" onclick="showTable('CPC')">CPC</a>
    </div>
    <div class="Sub3">
      <a href="#DMS" onclick="showTable('DMS')">DMS</a>
    </div>
    <div class="Sub4">
      <a href="#BEC" onclick="showTable('BEC')">BEC</a>
    </div>
  </div>

    <!-------------------------SUBJECT - Computer Organisation & Architecture------------------------------->
    <div id="COA" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - COA</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputCOA">Select Date : </label>
          <input type="date" id="dateInputCOA" onchange="loadAttendance('COA')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceCOA1" id="attendanceCOA1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceCOA2" id="attendanceCOA2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceCOA3" id="attendanceCOA3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceCOA4" id="attendanceCOA4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

      <!-------------------------SUBJECT - Computer Programming with C------------------------------->
      <div id="CPC" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - CPC</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputCPC">Select Date : </label>
          <input type="date" id="dateInputCPC" onchange="loadAttendance('CPC')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceCPC1" id="attendanceCPC1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceCPC2" id="attendanceCPC2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceCPC3" id="attendanceCPC3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceCPC4" id="attendanceCPC4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

        <!-------------------------SUBJECT - Discrete Mathematical Structure------------------------------->
        <div id="DMS" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - DMS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputDMS">Select Date : </label>
          <input type="date" id="dateInputDMS" onchange="loadAttendance('DMS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceDMS1" id="attendanceDMS1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceDMS2" id="attendanceDMS2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceDMS3" id="attendanceDMS3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceDMS4" id="attendanceDMS4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!-------------------------SUBJECT - Business English and Communication------------------------------->
  <div id="BEC" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - BEC</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputBEC">Select Date : </label>
          <input type="date" id="dateInputBEC" onchange="loadAttendance('BEC')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceBEC1" id="attendanceBEC1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceBEC2" id="attendanceBEC2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceBEC3" id="attendanceBEC3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceBEC4" id="attendanceBEC4">
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
  document.querySelectorAll('#COA, #CPC, #DMS, #BEC').forEach(div => {
    div.style.display = 'none';
  });

  // Display the selected subject table.
  document.getElementById(subject).style.display = 'block';

  // Update the date input ID to the one specific to the selected subject
  document.getElementById('dateInputCOA').setAttribute('onchange', "loadAttendance('COA')");
  document.getElementById('dateInputCPC').setAttribute('onchange', "loadAttendance('CPC')");
  document.getElementById('dateInputDMS').setAttribute('onchange', "loadAttendance('DMS')");
  document.getElementById('dateInputBEC').setAttribute('onchange', "loadAttendance('BEC')");
}

// Load attendance data from localStorage.
function loadAttendance(subject) {
  const date = document.getElementById('dateInput' + subject).value;
  if (date) {
    const attendanceData = JSON.parse(localStorage.getItem('attendance_' + subject + '_' + date)) || {};

    // Update checkbox states based on the loaded data
    document.querySelectorAll(`#${subject} input[type="checkbox"]`).forEach(checkbox => {
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
  const subject = [...document.querySelectorAll('#COA, #CPC, #DMS, #BEC')].find(div => div.style.display === 'block').id;
  const date = document.getElementById('dateInput' + subject).value;

  if (!date) {
    alert("Please select a date first.");
    return;
  }

  let attendanceData = {};
  document.querySelectorAll(`#${subject} input[type="checkbox"]`).forEach(checkbox => {
    attendanceData[checkbox.getAttribute('name')] = checkbox.checked;
  });

  localStorage.setItem('attendance_' + subject + '_' + date, JSON.stringify(attendanceData));
  alert("Attendance saved for " + date);
}

  </script>
</body>
</html>