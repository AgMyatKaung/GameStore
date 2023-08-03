<?php

require 'config/database.php';

// get signup from data if signup button was clicked
if(isset($_POST['submit'])){
    
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    // validate input values
    if(!$username){
        $_SESSION['signup'] = "Please enter your Username";
    } elseif(!$email){
        $_SESSION['signup'] = "Please enter a valid email";
    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
        $_SESSION['signup'] = "Password should be 8+ characters";
    } else{
        // check if password don't match
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] = "Password do not match";
        } else{
            // hash password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            
            // check if username or email already exist in database
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "Username or Email already exist";
            } 
        }
    }
    
    // redirect back to signup page if there was any problem
    if(isset($_SESSION['signup'])){
        // pass form data back to signup page
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'SignUp.php');
        die();
    } else{
        // insert new user into users table
        $insert_user_query = "INSERT INTO users SET username='$username', email='$email', password='$hashed_password'";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if(!mysqli_errno($connection)){
            // redirect to login page with success message
            $_SESSION['signup-success'] = "Registration successful. Please log in";
            header('location: ' .ROOT_URL . 'logIn.php');
            die();
        }

    }
    



} else{
    // if button wasn't clicked, bounce back to signup page
    header('location: ' . ROOT_URL . 'SignUp.php');
    die();

}
