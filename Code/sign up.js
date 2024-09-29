var check = function(){
  if(document.getElementById('Password').value == document.getElementById('ConformPassword').value)

  {
    document.getElementById('AlertPassword').style.color = 'green';
    document.getElementById('AlertPassword').innerHTML = '<span><i class ="fa fa-check-circle">Match !</i></span>';
  }

  else{
    document.getElementById('AlertPassword').style.color = 'red';
    document.getElementById('AlertPassword').innerHTML = '<span><i class ="fa fa-check-circle">Not Match !</i></span>';
  }
}