<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="style-contact.css" />
</head>
<body>

    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">
            <h1 align="center">Steam Clone</h1>
    <h3 align="center">Hello...Gamers!! Send massage and contact us </h3>
            <div class="input-row">
                <label style="padding-top: 20px;"></label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"  placeholder="Name"
                    id="userName" />
            </div>
            <div class="input-row">
                <label></label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail"  placeholder="Email" id="userEmail" />
            </div>
            <div class="input-row">
                <label></label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject"  placeholder="Subject" />
            </div>
            <div class="input-row">
                <label></label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"  placeholder="Message"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" /> 

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
<div id="footer">
      <p align="center"> <a href="../">Steam Clone</a>  </p>
    </div>

   

  </div>
</body>
</html>