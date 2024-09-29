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
      <a href="bTech2.php">B.TECH 2</a>
    </div>
    <div class="bTech3">
      <a href="bTech3.php">B.TECH 3</a>
    </div>
    <div class="bTech4">
      <a href="#Subject" onclick="showSubject()">B.TECH 4</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT------------------------------------------->
  <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#SE" onclick="showTable('SE')">SE</a>
    </div>
    <div class="Sub2">
      <a href="#JP" onclick="showTable('JP')">JAVA</a>
    </div>
    <div class="Sub3">
      <a href="#DS" onclick="showTable('DS')">DS</a>
    </div>
    <div class="Sub4">
      <a href="#IP" onclick="showTable('IP')">IP</a>
    </div>
    <div class="Sub5">
      <a href="#NN" onclick="showTable('NN')">NN</a>
    </div>
    <div class="Sub5">
      <a href="#VP" onclick="showTable('VP')">VP</a>
    </div>
  </div>

  <!-------------------------------------SUBJECT - Software Engineering----------------------------------------->
  <div id="SE" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - SE</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputSE">Select Date : </label>
          <input type="date" id="dateInputSE" onchange="loadAttendance('SE')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
           <input type="checkbox" name="attendanceSE1" id="attendanceSE1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceSE2" id="attendanceSE2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceSE3" id="attendanceSE3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceSE4" id="attendanceSE4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!------------------------------------SUBJECT - Java Programming--------------------------------------->
  <div id="JP" style="display: none;">
   <h2 id="1" style="text-align: center;">Student Attendance Table - JP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputJP">Select Date : </label>
          <input type="date" id="dateInputJP" onchange="loadAttendance('JP')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceJP1" id="attendanceJP1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceJP2" id="attendanceJP2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceJP3" id="attendanceJP3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceJP4" id="attendanceJP4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!---------------------------------SUBJECT - Distributed Systems----------------------------------->
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
            <input type="checkbox" name="attendanceDS1" id="attendanceDS1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceDS2" id="attendanceDS2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceDS3" id="attendanceDS3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceDS4" id="attendanceDS4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>


      <!----------------------------SUBJECT - Image Processing-------------------------------->
  <div id="IP" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - IP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputIP">Select Date : </label>
          <input type="date" id="dateInputIP" onchange="loadAttendance('IP')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceIP1" id="attendanceIP1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceIP2" id="attendanceIP2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceIP3" id="attendanceIP3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceIP4" id="attendanceIP4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  

        <!--------------------------------------SUBJECT - Neural Networks-------------------------------------->
        <div id="NN" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - NN</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputNN">Select Date : </label>
          <input type="date" id="dateInputNN" onchange="loadAttendance('NN')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceNN1" id="attendanceNN1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceNN2" id="attendanceNN2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceNN3" id="attendanceNN3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceNN4" id="attendanceNN4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

          <!----------------------------------SUBJECT - Visual Programming----------------------------------------->
  <div id="VP" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - VP</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputVP">Select Date : </label>
          <input type="date" id="dateInputVP" onchange="loadAttendance('VP')"><br>Present</th>
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
  document.querySelectorAll('#SE, #JP, #DS, #IP, #NN, #VP').forEach(div => {
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