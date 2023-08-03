<?php

require 'config/database.php';

// get back form data if there was a registration error

$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

// delete signup data session
unset($_SESSION['signup-data']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/signUp.css">
  <title>SignUp</title>
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
    <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST">
      <h2>Sign Up</h2>
      <div class="inputBox">
        <input type="text" required="required" name="username" value="<?= $username ?>">
        <span>Username</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="email" required="required" name="email" value="<?= $email ?>">
        <span>Email</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" required="required" name="createpassword" value="<?= $createpassword ?>">
        <span>Password</span>
        <i></i>
      </div>
      <div class="inputBox">
        <input type="password" required="required" name="confirmpassword" value="<?= $confirmpassword ?>">
        <span>Confirm Password</span>
        <i></i>
      </div>
      <div class="links">

        <?php if (isset($_SESSION['signup'])) : ?>
        <a href="#">
          <?= $_SESSION['signup'];
          unset($_SESSION['signup']); ?>
        </a>
        <?php else: ?>
        <a href="#">Already have an account?</a>
        <?php endif ?>

        <a href="logIn.php">LogIn</a>
      </div>
      <input type="submit" value="Sign Up" name="submit">
    </form>
    
  </div>
</body>
</html>
