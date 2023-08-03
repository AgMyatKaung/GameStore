<?php
require 'config/database.php';

if(isset($_POST['submit'])){

    
    $form_name = $_POST["form_name"];
    if ($form_name == "form1") {
       
        $_SESSION['btn1'] = "Button1download";

    } else if ($form_name == "form2") {
        
        $_SESSION['btn2'] = "Button2download";
    
    } else if ($form_name == "form3") {
        
        $_SESSION['btn3'] = "Button3download";
    
    } else if ($form_name == "form4") {
        
        $_SESSION['btn4'] = "Button4download";
    
    } else if ($form_name == "form5") {
        
        $_SESSION['btn5'] = "Button5download";
    
    } else if ($form_name == "form6") {
        
        $_SESSION['btn6'] = "Button6download";
    
    } else if ($form_name == "form7") {
        
        $_SESSION['btn7'] = "Button7download";
    
    } else if ($form_name == "form8") {
        
        $_SESSION['btn8'] = "Button8download";
    
    }
    

    // get form data
    $cardNo = filter_var($_POST['cardno'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //if(!$cardNO){
        //$_SESSION['unchecked'] = "Card Number required!!!"; 
   // } else{
        // fetch cardnumber from database
        $fetch_card_query = "SELECT cardno FROM cardnumber WHERE id='1'";
        $fetch_card_result = mysqli_query($connection, $fetch_card_query);

        //if(mysqli_num_rows($fetch_card_result) == 1){
            // convert the record into assoc array
            $card_record = mysqli_fetch_assoc($fetch_card_result);
            $db_no = $card_record['cardno'];
            // compare form card number with database card number
            if($cardNo == $db_no){
                // set session for successful paycheck
                //$_SESSION['checked'] = $card_record['cardno'];
                $_SESSION['checked'] = "Payment Successful. You can download the Game now!";

                $_SESSION['candownload'] = "Download";
                $_SESSION['candownload2'] = "Download2";
                $_SESSION['candownload3'] = "Download3";
                $_SESSION['candownload4'] = "Download4";
                $_SESSION['candownload5'] = "Download5";
                $_SESSION['candownload6'] = "Download6";
                $_SESSION['candownload7'] = "Download7";
                $_SESSION['candownload8'] = "Download8";

                
                
                // Redirect back to store page
                header('location: ' . ROOT_URL . 'store.php');


            } else{

                $_SESSION['unchecked'] = "Incorrect Card Number!!!";
                $_SESSION['nodownload'] = "Nodownload";
                $_SESSION['nodownload2'] = "Nodownload2";
                $_SESSION['nodownload3'] = "Nodownload3";
                $_SESSION['nodownload4'] = "Nodownload4";
                $_SESSION['nodownload5'] = "Nodownload5";
                $_SESSION['nodownload6'] = "Nodownload6";
                $_SESSION['nodownload7'] = "Nodownload7";
                $_SESSION['nodownload8'] = "Nodownload8";
                
            }

        //} else{
           // $_SESSION['unchecked'] = "Invalid Card!!!"; 
        //}
    //}


    // if any problem, redirect back to store page with login data
    if(isset($_SESSION['unchecked'])){
        $_SESSION['card-data'] = $_POST;
        header('location: ' . ROOT_URL . 'store.php');
        die();
    }

} else{
    header('location: ' . ROOT_URL . 'store.php');
    die();
}