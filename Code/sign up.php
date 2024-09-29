<?php
session_start();
if(isset($_SESSION["user"])){
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="sign up.css">
</head>
<body>
  <div class="login-box">
    <?php
    if(isset($_POST["signUp"])){
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];

      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $errors = array();

      if(empty($name) OR empty($email) OR empty($password) OR empty($cpassword)){
        array_push($errors,"All Fields Are Requeried");
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email Is Not Valid");
      }
      if(strlen($password)<8){
        array_push($errors, "Password Must Be At Least 8 Characters");
      }
      if($password!==$cpassword){
        array_push($errors, "Password Does Not Match");
      }

      require_once "database.php";
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli_num_rows($result);
      if($rowCount>0){
        array_push($errors, "Email Already Exists !");
      }
      if(count($errors)>0){
        foreach($errors as $error){
          echo "<div class='login-box'>$error</div>";
        }
      }else{
        
        $sql = "INSERT INTO users (name, email, password) VALUES ( ?, ?, ?  )";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
        if($prepareStmt){
          mysqli_stmt_bind_param($stmt,"sss",$name,$email,$passwordHash);
          mysqli_stmt_execute($stmt);
          echo "You Are Sign Up Successfully.";
        }else{
          die("Somthing Went Wrong !");
        }
      }
    }
    ?>
    <h2>Sign up</h2>
    <form action="sign up.php" method="post">
        <div class="user-box">
            <label>Name</label><br>
            <input type="text" name="name" required="">
        </div>
        <div class="user-box">
          <label>Email</label><br>
          <input type="email" name="email" required="">
        </div>
        <div class="user-box">
            <label>Password</label><br>
            <input type="password" id="Password" name="password" required="" onkeyup='check()'>
        </div>
        <div class="user-box">
            <label>Conform Password</label><br>
            <input type="password" id="ConformPassword" name="cpassword" required="" onkeyup='check()'>
        </div>
        <p id="AlertPassword"></p>
        <p>Already Have Account &nbsp; <a id="a1" href="login.php">Login</a></p><br>
        <a id="btn" href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input id="btn1" name="signUp" type="submit">
    </form>
    <script src="sign up.js"></script>
</body>
</html>