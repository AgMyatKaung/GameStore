<?php
require 'config/database.php';

$username= $_SESSION['signin-data']['username'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/logIn.css">
  <title>LogIN</title>
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="emailer/">Contact</a></li>
    </ul>
  </nav>
  
  <div class="box">
    <span class="borderLine"></span>
    <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">
      <h2>Log In</h2>
      <div class="inputBox">
        <input type="text" required="required" name="username">
        <span>Username or Email</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" required="required" name="password">
        <span>Password</span>
        <i></i>
      </div>
      <?php if(isset($_SESSION['signup-success'])) : ?>
      <div class="links success">
        
        <p>
          <?= $_SESSION['signup-success'];
          unset($_SESSION['signup-success']); ?>
        <p>
       
        <a href="SignUp.php">SignUp</a>
      </div>
      <?php elseif(isset($_SESSION['signin'])) : ?>
      
        <div class="links error">
        
         <p>
           <?= $_SESSION['signin'];
           unset($_SESSION['signin']); ?>
         <p>
       
        <a href="SignUp.php">SignUp</a>

       </div>

      <?php else: ?>
        <div class="links success">
        
        <p>Please login here</p>
       
        <a href="SignUp.php">SignUp</a>
      </div>
      <?php endif ?>
      <input type="submit" value="LogIn" name="submit">
    </form>
  </div>
</body>
</html>
