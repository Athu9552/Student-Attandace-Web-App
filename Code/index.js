// Function to show the subject selection.
function showSubject() {
  document.getElementById('Subject').style.display = 'flex';
}

// Function to show the selected subject's table.
function showTable(subject) {
  // Hide all subject tables first
  document.querySelectorAll('#HRM, #CN, #RDBMS, #DS, #STATS').forEach(div => {
    div.style.display = 'none';
  });

  // Display the selected subject table.
  document.getElementById(subject).style.display = 'block';

  // Update the date input ID to the one specific to the selected subject
  document.getElementById('dateInputHRM').setAttribute('onchange', "loadAttendance('HRM')");
  document.getElementById('dateInputCN').setAttribute('onchange', "loadAttendance('CN')");
  document.getElementById('dateInputRDBMS').setAttribute('onchange', "loadAttendance('RDBMS')");
  document.getElementById('dateInputDS').setAttribute('onchange', "loadAttendance('DS')");
  document.getElementById('dateInputSTATS').setAttribute('onchange', "loadAttendance('STATS')");
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
  const subject = [...document.querySelectorAll('#HRM, #CN, #RDBMS, #DS, #STATS')].find(div => div.style.display === 'block').id;
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

