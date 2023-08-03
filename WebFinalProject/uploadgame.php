<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>uploadGame</title>
</head>
<body>
   
   <?php
    $conn = mysqli_connect('localhost','root','','steam');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "freegames/".$fileName;
        
        $query = "INSERT INTO freedownload(gamename) VALUES ('$fileName')";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "success";
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>
   
   <table border="1px" align="center">
       <tr>
           <td>
               <form action="uploadgame.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" name="submit"> Upload</button>
                </form>
           </td>
       </tr>
       <tr>
           <td>
              <?php
               $query2 = "SELECT * FROM freedownload ";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <a href="download-logic.php?file=<?php echo $rows['gamename'] ?>">Download</a><br>
               <?php
               }
               ?>
           </td>
       </tr>
   </table>
    
</body>
</html>