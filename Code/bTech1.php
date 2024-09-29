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
     <a href="#Subject" onclick="showSubject()">B.TECH 1</a>
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

  <!----------------------------------------SUBJECT------------------------------------------->
  <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#English" onclick="showTable('English')">English</a>
    </div>
    <div class="Sub2">
      <a href="#AP" onclick="showTable('AP')">AP</a>
    </div>
    <div class="Sub3">
      <a href="#M1" onclick="showTable('M1')">M1</a>
    </div>
    <div class="Sub4">
      <a href="#CIT" onclick="showTable('CIT')">CIT</a>
    </div>
    <div class="Sub5">
      <a href="#EDP" onclick="showTable('EDP')">EDP</a>
    </div>
    <div class="Sub5">
      <a href="#SDC" onclick="showTable('SDC')">SDC</a>
    </div>
    <div class="Sub5">
      <a href="#CDS" onclick="showTable('CDS')">CDS</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT - English------------------------------------------->
  <div id="English" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - English</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputEnglish">Select Date : </label>
          <input type="date" id="dateInputEnglish" onchange="loadAttendance('English')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
           <input type="checkbox" name="attendanceEnglish1" id="attendanceEnglish1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceEnglish2" id="attendanceEnglish2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceEnglish3" id="attendanceEnglish3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceEnglish4" id="attendanceEnglish4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!----------------------------------------SUBJECT - AP------------------------------------------->
  <div id="AP" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - AP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputAP">Select Date : </label>
          <input type="date" id="dateInputAP" onchange="loadAttendance('AP')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceAP1" id="attendanceAP1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceAP2" id="attendanceAP2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceAP3" id="attendanceAP3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceAP4" id="attendanceAP4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!----------------------------------------SUBJECT - M1------------------------------------------->

    <div id="M1" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - M1</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputM1">Select Date : </label>
          <input type="date" id="dateInputM1" onchange="loadAttendance('M1')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceM11" id="attendanceM11">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceM12" id="attendanceM12">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceM13" id="attendanceM13">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceM14" id="attendanceM14">
          </td>
        </tr>
      </tbody>
    </table>
  </div>


      <!----------------------------------------SUBJECT - CIT------------------------------------------->
      <div id="CIT" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - CIT</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputCIT">Select Date : </label>
          <input type="date" id="dateInputCIT" onchange="loadAttendance('CIT')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceCIT1" id="attendanceCIT1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceCIT2" id="attendanceCIT2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceCIT3" id="attendanceCIT3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceCIT4" id="attendanceCIT4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  

        <!----------------------------------------SUBJECT - EDP------------------------------------------->
        <div id="EDP" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - EDP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputEDP">Select Date : </label>
          <input type="date" id="dateInputEDP" onchange="loadAttendance('EDP')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceEDP1" id="attendanceEDP1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceEDP2" id="attendanceEDP2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceEDP3" id="attendanceEDP3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceEDP4" id="attendanceEDP4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

          <!----------------------------------------SUBJECT - SDC------------------------------------------->
          <div id="SDC" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - SDC</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputSDC">Select Date : </label>
          <input type="date" id="dateInputSDC" onchange="loadAttendance('SDC')"><br>Present</th>
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

          <!----------------------------------------SUBJECT - CDS------------------------------------------->
  <div id="CDS" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - CDS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputCDS">Select Date : </label>
          <input type="date" id="dateInputCDS" onchange="loadAttendance('CDS')"><br>Present</th>
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
  document.querySelectorAll('#English, #AP, #M1, #CIT, #EDP, #SDC, #CDS').forEach(div => {
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