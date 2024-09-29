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
  justify-content: center; /* If you want items centered horizontally */
  align-items: center; /* If you want items centered vertically */
}



    .bTech1, .bTech2, .bTEch3, .bTech4 {
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
      <option value="#B_TECH">B.TECH</option>
    </select>
  </div>

  <!----------------------------------------B.TECH------------------------------------------->
  <div id="B_TECH">
    <div class="bTech1" id="bTech1-div">
     <a href="bTech1.php">B.TECH 1</a>
    </div>
    <div class="bTech2">
      <a href="#Subject" onclick="showSubject()">B.TECH 2</a>
    </div>
    <div class="bTech3">
      <a href="bTech3.php">B.TECH 3</a>
    </div>
    <div class="bTech4">
      <a href="bTech4.php">B.TECH 4</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT------------------------------------------->
  <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#CO" onclick="showTable('CO')">CO</a>
    </div>
    <div class="Sub2">
      <a href="#PS" onclick="showTable('PS')">PS</a>
    </div>
    <div class="Sub3">
      <a href="#OOP" onclick="showTable('OOP')">OOP</a>
    </div>
    <div class="Sub4">
      <a href="#ITM" onclick="showTable('ITM')">ITM </a>
    </div>
    <div class="Sub5">
      <a href="#OR" onclick="showTable('OR')">OR</a>
    </div>
    <div class="Sub5">
      <a href="#SP" onclick="showTable('SP')">SP</a>
    </div>
  </div>

  <!-------------------------------------SUBJECT - Computer Organization----------------------------------------->
  <div id="CO" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - CO</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputCO">Select Date : </label>
          <input type="date" id="dateInputCO" onchange="loadAttendance('CO')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
           <input type="checkbox" name="attendanceCO1" id="attendanceCO1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceCO2" id="attendanceCO2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceV3" id="attendanceCO3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceCO4" id="attendanceCO4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!------------------------------------SUBJECT - Probability and Statistics--------------------------------------->
  <div id="PS" style="display: none;">
   <h2 id="1" style="text-align: center;">Student Attendance Table - PS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputPS">Select Date : </label>
          <input type="date" id="dateInputPS" onchange="loadAttendance('PS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendancePS1" id="attendancePS1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendancePS2" id="attendancePS2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendancePS3" id="attendancePS3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendancePS4" id="attendancePS4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!----------------------------------SUBJECT - Object-Oriented Programming------------------------------------->
    <div id="OOP" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - OOP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputOOP">Select Date : </label>
          <input type="date" id="dateInputOOP" onchange="loadAttendance('OOP')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceOOP1" id="attendanceOOP1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceOOP2" id="attendanceOOP2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceOOP3" id="attendanceOOP3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceOOP4" id="attendanceOOP4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>


      <!----------------------------SUBJECT - Interfacing Through Microprocessors-------------------------------->
      <div id="ITM" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - ITM</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputITM">Select Date : </label>
          <input type="date" id="dateInputITM" onchange="loadAttendance('ITM')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceITM1" id="attendanceITM1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceITM2" id="attendanceITM2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceITM3" id="attendanceITM3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceITM4" id="attendanceITM4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  

        <!--------------------------------------SUBJECT - Operations Research-------------------------------------->
        <div id="OR" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - OR</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputOR">Select Date : </label>
          <input type="date" id="dateInputOR" onchange="loadAttendance('OR')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceOR1" id="attendanceOR1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceOR2" id="attendanceOR2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceOR3" id="attendanceOR3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceOR4" id="attendanceOR4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

          <!----------------------------------SUBJECT - System Programming----------------------------------------->
          <div id="SP" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - SP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputSP">Select Date : </label>
          <input type="date" id="dateInputSP" onchange="loadAttendance('SP')"><br>Present</th>
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
  console.log("showSubject function is called");
  const subjectDiv = document.getElementById('Subject');
  subjectDiv.style.display = 'flex';  // Change to block or whatever suits your layout.
}

// Function to show the selected subject's table.
function showTable(subject) {
  // Hide all subject tables first
  document.querySelectorAll('#CO, #PS, #OOP, #ITM, #OR, #SP').forEach(div => {
    div.style.display = 'none';
  });

  // Display the selected subject table.
  document.getElementById(subject).style.display = 'block';

  // Load attendance for the selected subject on table load
  loadAttendance(subject);
}

// Function to load attendance from localStorage.
function loadAttendance(subject) {
  const dateInput = document.getElementById('dateInput' + subject);
  const date = dateInput ? dateInput.value : null;

  if (date) {
    const attendanceData = JSON.parse(localStorage.getItem('attendance_' + subject + '_' + date)) || {};
    // Update checkbox states based on the loaded data
    document.querySelectorAll(`#${subject} input[type="checkbox"]`).forEach(checkbox => {
      const name = checkbox.getAttribute('name');
      checkbox.checked = attendanceData[name] || false;
    });
  }
}

// Function to save attendance to localStorage with date validation and alert.
function saveAttendance(subject) {
  const dateInput = document.getElementById('dateInput' + subject);
  const date = dateInput ? dateInput.value : null;

  // Check if a date is selected
  if (!date) {
    alert("Please select a date first.");
    return;
  }

  const attendanceData = {};
  // Collect checkbox states
  document.querySelectorAll(`#${subject} input[type="checkbox"]`).forEach(checkbox => {
    const name = checkbox.getAttribute('name');
    attendanceData[name] = checkbox.checked;
  });
  // Save to localStorage
  localStorage.setItem('attendance_' + subject + '_' + date, JSON.stringify(attendanceData));
  
  alert("Attendance saved for " + date);
}

// Add event listeners to save attendance when checkboxes change
document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
  checkbox.addEventListener('change', function () {
    const subject = checkbox.closest('div').id;  // Find the closest subject (div ID)
    saveAttendance(subject);
  });
});


  </script>
</body>
</html>