<?php
require 'config/database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/contact.css">
  <title>SignUp</title>
</head>
<body>
    <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>


      <div class="box">
        <span class="borderLine"></span>
        <form action="sendmail.php" method="POST">
            <h3>Contact Us</h3>
            <label class="form-group">
                <input type="text" class="form-control" name="name"  required>
                <span>Your Name</span>
                <span class="border"></span>
            </label>
            <label class="form-group">
                <input type="text" class="form-control" name="email"  required>
                <span for="">Your Mail</span>
                <span class="border"></span>
            </label>
            <label class="form-group" >
                <textarea name="message" id="" class="form-control" required></textarea>
                <span for="">Your Message</span>
                <span class="border"></span>
            </label>
            <button type="submit" name="submit">Submit 
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
      </div>

    
  </div>
</body>
</html>
