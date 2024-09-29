<?php
session_start();
session_destroy();
header("Locatin: login.php");
?>

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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="Login.css">
</head>
<body>
<div class="login-box">
    <?php
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $resualt = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($resualt, MYSQLI_ASSOC);
        if($user){
            if(password_verify($password, $user["password"])){
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: index.php");
                die();
            }else{
                echo "Password Does Not Match !";
            }
        }else{
            echo "Email Does Not Exist !";
        }
    }
    ?>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="user-box">
          <label>Email</label><br>
          <input type="email" name="email" required="">
        </div>
        <div class="user-box">
            <label>Password</label><br>
            <input type="password" id="Password" name="password" required="" onkeyup='check()'>
        </div>
        <p id="AlertPassword"></p>
        <p>Create New Account &nbsp; <a id="a1" href="sign up.php">Sign Up</a></p><br>
        <a id="btn" href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input id="btn1" name="login" type="submit">
    </form>
</body>
</html>