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
      <a href="mca1.php">MCA 1</a>
    </div>
    <div class="mca2">
      <a href="#Subject" onclick="showSubject()">MCA 2</a>
    </div>
  </div>

    <!----------------------------------------SUBJECT------------------------------------------->
    <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#OSSS" onclick="showTable('OSSS')">OSSS</a>
    </div>
    <div class="Sub2">
      <a href="#USP" onclick="showTable('USP')">USP</a>
    </div>
    <div class="Sub3">
      <a href="#IS" onclick="showTable('IS')">IS</a>
    </div>
    <div class="Sub4">
      <a href="#SNT" onclick="showTable('SNT')">SNT</a>
    </div>
    <div class="Sub4">
      <a href="#BM" onclick="showTable('BM')">BM</a>
    </div>
    <div class="Sub4">
      <a href="#MA" onclick="showTable('MA')">MA</a>
    </div>
  </div>

    <!-------------------------SUBJECT - Operating Systems and Systems Software------------------------------->
    <div id="OSSS" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - OSSS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputOSSS">Select Date : </label>
          <input type="date" id="dateInputOSSS" onchange="loadAttendance('OSSS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceOSSS1" id="attendanceOSSS1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceOSSS2" id="attendanceOSSS2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceOSSS3" id="attendanceOSSS3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceOSSS4" id="attendanceOSSS4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

      <!-------------------------SUBJECT - Unix and Shell Programming------------------------------->
      <div id="USP" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - USP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputUSP">Select Date : </label>
          <input type="date" id="dateInputUSP" onchange="loadAttendance('USP')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceUSP1" id="attendanceUSP1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceUSP2" id="attendanceUSP2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceUSP3" id="attendanceUSP3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceUSP4" id="attendanceUSP4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!-------------------------SUBJECT - Intelligent Systems------------------------------->
  <div id="IS" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - IS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputIS">Select Date : </label>
          <input type="date" id="dateInputIS" onchange="loadAttendance('IS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceIS1" id="attendanceIS1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceIS2" id="attendanceIS2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceIS3" id="attendanceIS3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceIS4" id="attendanceIS4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!-------------------------SUBJECT - Statistics and Numerical Techniques------------------------------->
  <div id="SNT" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - SNT</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputSNT">Select Date : </label>
          <input type="date" id="dateInputSNT" onchange="loadAttendance('SNT')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceSNT1" id="attendanceSNT1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceSNT2" id="attendanceSNT2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceSNT3" id="attendanceSNT3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceSNT4" id="attendanceSNT4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

      <!-------------------------SUBJECT - Business Management------------------------------->
      <div id="BM" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - BM</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputBM">Select Date : </label>
          <input type="date" id="dateInputBM" onchange="loadAttendance('BM')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendancev1" id="attendanceBM1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceBM2" id="attendanceBM2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceBM3" id="attendanceBM3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceBM4" id="attendanceBM4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

        <!-------------------------SUBJECT - Management Accounting------------------------------->
        <div id="MA" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - MA</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputMA">Select Date : </label>
          <input type="date" id="dateInputMA" onchange="loadAttendance('MA')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Justin Doe</td>
          <td>
            <input type="checkbox" name="attendanceMA1" id="attendanceMA1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Franklin Smith</td>
          <td>
            <input type="checkbox" name="attendanceMA2" id="attendanceMA2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michal Brown</td>
          <td>
            <input type="checkbox" name="attendanceMA3" id="attendanceMA3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Jimy Johnson</td>
          <td>
            <input type="checkbox" name="attendanceMA4" id="attendanceMA4">
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
  document.querySelectorAll('#OSSS, #USP, #IS, #SNT, #BM, #MA').forEach(div => {
    div.style.display = 'none';
  });

  // Display the selected subject table.
  document.getElementById(subject).style.display = 'block';

  // Update the date input ID to the one specific to the selected subject
  document.getElementById('dateInputOSSS').setAttribute('onchange', "loadAttendance('OSSS')");
  document.getElementById('dateInputUSP').setAttribute('onchange', "loadAttendance('USP')");
  document.getElementById('dateInputIS').setAttribute('onchange', "loadAttendance('IS')");
  document.getElementById('dateInputSNT').setAttribute('onchange', "loadAttendance('SNT')");
  document.getElementById('dateInputBM').setAttribute('onchange', "loadAttendance('BM')");
  document.getElementById('dateInputMA').setAttribute('onchange', "loadAttendance('MA')");
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
  const subject = [...document.querySelectorAll('#OSSS, #USP, #IS, #SNT, #BM, #MA')].find(div => div.style.display === 'block').id;
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