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
      <a href="bca2.php">BCA 2</a>
    </div>
    <div class="bca3">
      <a href="#Subject" onclick="showSubject()">BCA 3</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT------------------------------------------->
  <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#JAVA" onclick="showTable('JAVA')">JAVA</a>
    </div>
    <div class="Sub2">
      <a href="#DWDM" onclick="showTable('DWDM')">DWDM</a>
    </div>
    <div class="Sub3">
      <a href="#IT" onclick="showTable('IT')">IT SECURITY</a>
    </div>
    <div class="Sub4">
      <a href="#ELEC" onclick="showTable('ELEC')">ELECTIVE-1</a>
    </div>
    <div class="Sub5">
      <a href="#ELECT" onclick="showTable('ELECT')">ELECTIVE-2</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT - JAVA------------------------------------------->
  <div id="JAVA" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - JAVA</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputJAVA">Select Date : </label>
          <input type="date" id="dateInputJAVA" onchange="loadAttendance('JAVA')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceJAVA1" id="attendanceJAVA1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceJAVA2" id="attendanceJAVA2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceJAVA3" id="attendanceJAVA3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceJAVA4" id="attendanceJAVA4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!----------------------------------------SUBJECT - DWDM------------------------------------------->
  <div id="DWDM" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - DWDM</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputDWDM">Select Date : </label>
          <input type="date" id="dateInputDWDM" onchange="loadAttendance('DWDM')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceDWDM1" id="attendanceDWDM1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceDWDM2" id="attendanceDWDM2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceDWDM3" id="attendanceDWDM3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceDWDM4" id="attendanceDWDM4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!----------------------------------------SUBJECT - IT------------------------------------------->

    <div id="IT" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - IT</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputIT">Select Date : </label>
          <input type="date" id="dateInputIT" onchange="loadAttendance('IT')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceIT1" id="attendanceIT1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceIT2" id="attendanceIT2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceIT3" id="attendanceIT3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceIT4" id="attendanceIT4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>


      <!----------------------------------------SUBJECT - ELEC------------------------------------------->
      <div id="ELEC" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - ELEC</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputELEC">Select Date : </label>
          <input type="date" id="dateInputELEC" onchange="loadAttendance('ELEC')"><br>Present</th>
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
  

        <!----------------------------------------SUBJECT - ELECT------------------------------------------->
        <div id="ELECT" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - ELECT</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputELECT">Select Date : </label>
          <input type="date" id="dateInputELECT" onchange="loadAttendance('ELECT')"><br>Present</th>
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
  document.querySelectorAll('#JAVA, #DWDM, #IT, #ELEC, #ELECT').forEach(div => {
    div.style.display = 'none';
  });

  // Display the selected subject table.
  document.getElementById(subject).style.display = 'block';

  // Update the date input ID to the one specific to the selected subject
  document.getElementById('dateInputJAVA').setAttribute('onchange', "loadAttendance('JAVA')");
  document.getElementById('dateInputDWDM').setAttribute('onchange', "loadAttendance('DWDM')");
  document.getElementById('dateInputIT').setAttribute('onchange', "loadAttendance('IT')");
  document.getElementById('dateInputELEC').setAttribute('onchange', "loadAttendance('ELEC')");
  document.getElementById('dateInputELECT').setAttribute('onchange', "loadAttendance('ELECT')");
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
  const subject = [...document.querySelectorAll('#JAVA, #DWDM, #IT, #ELEC, #ELECT')].find(div => div.style.display === 'block').id;
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