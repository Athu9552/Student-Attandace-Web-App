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
      <a href="#Subject" onclick="showSubject()">B.TECH 3</a>
    </div>
    <div class="bTech4">
      <a href="bTech4.php">B.TECH 4</a>
    </div>
  </div>

  <!----------------------------------------SUBJECT------------------------------------------->
  <div id="Subject" class="centered">   
    <div class="Sub1">
      <a href="#CA" onclick="showTable('CA')">CA</a>
    </div>
    <div class="Sub2">
      <a href="#NF" onclick="showTable('NF')">NF</a>
    </div>
    <div class="Sub3">
      <a href="#DSA" onclick="showTable('DSA')">DSA</a>
    </div>
    <div class="Sub4">
      <a href="#DIS" onclick="showTable('DIS')">DIS</a>
    </div>
    <div class="Sub5">
      <a href="#DM" onclick="showTable('DM')">DM</a>
    </div>
    <div class="Sub5">
      <a href="#CN" onclick="showTable('CN')">CN</a>
    </div>
  </div>

  <!-------------------------------------SUBJECT - Computer Architecture----------------------------------------->
  <div id="CA" style="display: none;">
    <h2 id="1" style="text-align: center;">Student Attendance Table - CA</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputCA">Select Date : </label>
          <input type="date" id="dateInputCA" onchange="loadAttendance('CA')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
           <input type="checkbox" name="attendanceCA1" id="attendanceCA1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceCA2" id="attendanceCA2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceCA3" id="attendanceCA3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceCA4" id="attendanceCA4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!------------------------------------SUBJECT - Neuro-Fuzzy--------------------------------------->
  <div id="NF" style="display: none;">
   <h2 id="1" style="text-align: center;">Student Attendance Table - NF</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputNF">Select Date : </label>
          <input type="date" id="dateInputNF" onchange="loadAttendance('NF')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceNF1" id="attendanceNF1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceNF2" id="attendanceNF2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceNF3" id="attendanceNF3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceNF4" id="attendanceNF4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <!---------------------------------SUBJECT - Data Structures and Algorithms----------------------------------->
    <div id="DSA" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - DSA</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputDSA">Select Date : </label>
          <input type="date" id="dateInputDSA" onchange="loadAttendance('DSA')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceDSA1" id="attendanceDSA1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceDSA2" id="attendanceDSA2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceDSA3" id="attendanceDSA3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceDSA4" id="attendanceDSA4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>


      <!----------------------------SUBJECT - Database Information System-------------------------------->
      <div id="DIS" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - DIS</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputDIS">Select Date : </label>
          <input type="date" id="dateInputDIS" onchange="loadAttendance('DIS')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceDIS1" id="attendanceDIS1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceDIS2" id="attendanceDIS2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceDIS3" id="attendanceDIS3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceDIS4" id="attendanceDIS4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  

        <!--------------------------------------SUBJECT - Data Mining-------------------------------------->
        <div id="DM" style="display: none;">
    <h2 style="text-align: center;">Student Attendance Table - DM</h2>
    <table>
      <thead>
        <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th><label for="dateInputDM">Select Date : </label>
          <input type="date" id="dateInputDM" onchange="loadAttendance('DM')"><br>Present</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>
            <input type="checkbox" name="attendanceDM1" id="attendanceDM1">
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>
            <input type="checkbox" name="attendanceDM2" id="attendanceDM2">
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael Brown</td>
          <td>
            <input type="checkbox" name="attendanceDM3" id="attendanceDM3">
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Emily Johnson</td>
          <td>
            <input type="checkbox" name="attendanceDM4" id="attendanceDM4">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

          <!----------------------------------SUBJECT - Computer Network----------------------------------------->
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
  document.querySelectorAll('#CA, #NF, #DSA, #DIS, #DM, #CN').forEach(div => {
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