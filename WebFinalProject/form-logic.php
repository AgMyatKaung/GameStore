<?php 

require 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST["button_name"]) && isset($_POST["form_name"])) {
        $button_name = $_POST["button_name"];
        $form_name = $_POST["form_name"];
        if ($form_name == "form1") {
          if ($button_name == "btn1") {
            // Code for handling Button click in form1
            $_SESSION['btn1'] = "Download";

          }
        } else if ($form_name == "form2") {
          if ($button_name == "btn2") {
            // Code for handling Button click in form2
            $_SESSION['btn2'] = "Download";
          }
        }
    }
    
    header('location: ' . ROOT_URL . 'store.php');
}

?>


