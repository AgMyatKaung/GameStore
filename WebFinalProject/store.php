<?php
require 'config/database.php';

$can_download7 = true;
$can_download8 = true;

// fetch games from database to download
$query1 = "SELECT gamename FROM freedownload WHERE id='5' ";
$run1 = mysqli_query($connection,$query1);
$row1 = mysqli_fetch_assoc($run1);

$query2 = "SELECT gamename FROM freedownload WHERE id='6' ";
$run2 = mysqli_query($connection,$query2);
$row2 = mysqli_fetch_assoc($run2);

$query3 = "SELECT gamename FROM freedownload WHERE id='7' ";
$run3 = mysqli_query($connection,$query3);
$row3 = mysqli_fetch_assoc($run3);

$query4 = "SELECT gamename FROM freedownload WHERE id='8' ";
$run4 = mysqli_query($connection,$query4);
$row4 = mysqli_fetch_assoc($run4);

$query5 = "SELECT gamename FROM freedownload WHERE id='9' ";
$run5 = mysqli_query($connection,$query5);
$row5 = mysqli_fetch_assoc($run5);

$query6 = "SELECT gamename FROM freedownload WHERE id='10' ";
$run6 = mysqli_query($connection,$query6);
$row6 = mysqli_fetch_assoc($run6);

$query7 = "SELECT gamename FROM freedownload WHERE id='11' ";
$run7 = mysqli_query($connection,$query7);
$row7 = mysqli_fetch_assoc($run7);

$query8 = "SELECT gamename FROM freedownload WHERE id='12' ";
$run8 = mysqli_query($connection,$query8);
$row8 = mysqli_fetch_assoc($run8);

?>




<!DOCTYPE html>
<html lang="en">
<head>

  <title>Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/store.css">

</head>
<nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="emailer/">Contact</a></li>
    </ul>
  </nav>



<!-- Container (games) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Games</h3>

    <?php if(isset($_SESSION['unchecked'])) : ?>
    <?php $can_download7 = false ?>
    <?php $can_download8 = false ?>
    <h3 class="text-center">
      <?= $_SESSION['unchecked'];
      unset($_SESSION['unchecked']); ?>
    </h3><br/>
    <?php elseif(isset($_SESSION['checked'])) : ?>
    <h3 class="text-center">
      <?= $_SESSION['checked'];
      unset($_SESSION['checked']); ?>
    </h3><br/>
    <?php endif ?> 
    
    <div class="row text-center">

      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/eldenring.webp">
          <p><strong>Eldenring</strong></p>

          <?php if (isset($_SESSION['candownload']) && isset($_SESSION['btn1']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row1['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload']) ?>
          <?php unset($_SESSION['btn1']) ?>
          <?php else : ?>
          
          <button class="btn" data-toggle="modal" data-target="#myModal1" name="button_name" vaule="btn1" type="submit">Buy</button>
          
          <?php endif ?>

        </div>
      </div>
      
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/ghostw.png" >
          <p><strong>GhostWire</strong></p>
          
          <?php if (isset($_SESSION['candownload2']) && isset($_SESSION['btn2']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row2['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload2']) ?>
          <?php unset($_SESSION['btn2']) ?>
          <?php else : ?>

          <button class="btn" data-toggle="modal" data-target="#myModal2" name="button_name" vaule="btn2" type="submit">Buy</button>

          <?php endif ?>

        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/The_Quarry.png" >
          <p><strong>The Quarry</strong></p>

          <?php if (isset($_SESSION['candownload3']) && isset($_SESSION['btn3']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row3['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload3']) ?>
          <?php unset($_SESSION['btn3']) ?>
          <?php else : ?>

          <button class="btn" data-toggle="modal" data-target="#myModal3" name="button_name" vaule="btn3" type="submit">Buy</button>

          <?php endif ?>

        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/Halo1.png" >
          <p><strong>Halo Infinite</strong></p>

          <?php if (isset($_SESSION['candownload4']) && isset($_SESSION['btn4']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row4['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload4']) ?>
          <?php unset($_SESSION['btn4']) ?>
          <?php else : ?>

          <button class="btn" data-toggle="modal" data-target="#myModal4" name="button_name" vaule="btn4" type="submit">Buy</button>

          <?php endif ?>

        </div>   
      </div>

  </div>

  
  
  
</div>

<!--2-->
<div id="tour" class="bg-1">
  <div class="container">
   
    <div class="row text-center">

      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/cod2.jpg">
          <p><strong>Call of Duty:Modern Warfare</strong></p>

          <?php if (isset($_SESSION['candownload5']) && isset($_SESSION['btn5']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row5['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload5']) ?>
          <?php unset($_SESSION['btn5']) ?>
          <?php else : ?>

          <button class="btn" data-toggle="modal" data-target="#myModal5" name="button_name" vaule="btn5" type="submit">Buy</button>

          <?php endif ?>

        </div>
        
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/tunic1.jpg" height="300">
          <p><strong>TUNIC</strong></p>

          <?php if (isset($_SESSION['candownload6']) && isset($_SESSION['btn6']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row6['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload6']) ?>
          <?php unset($_SESSION['btn6']) ?>
          <?php else : ?>

          <button class="btn" data-toggle="modal" data-target="#myModal6" name="button_name" vaule="btn6" type="submit">Buy</button>

          <?php endif ?>

        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/stanley.webp" >
          <p><strong>The Stanley Parable</strong></p>

          <?php if (isset($_SESSION['candownload7']) && isset($_SESSION['btn7']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row7['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload7']) ?>
          <?php unset($_SESSION['btn7']) ?>
          <?php else : ?>

          <button class="btn" data-toggle="modal" data-target="#myModal7" name="button_name" vaule="btn8" type="submit">Buy</button>

          <?php endif ?>

        </div>
      </div>

      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="images/olli1.webp" >
          <p><strong>OlliOlli World</strong></p>

          <?php if (isset($_SESSION['candownload8']) && isset($_SESSION['btn8']) && $can_download7 == true) : ?>
          <a class="btn" href="download-logic.php?file=<?php echo $row8['gamename'] ?>">Download</a>
          <?php unset($_SESSION['candownload8']) ?>
          <?php unset($_SESSION['btn8']) ?>
          <?php else : ?>

          <button class="btn" data-toggle="modal" data-target="#myModal8" name="button_name" vaule="btn8" type="submit">Buy</button>

          <?php endif ?>

        </div>   
    </div>
  </div>
  
  <!-- Modal1 -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog"> 
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
            <input type="hidden" name="form_name" value="form1">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn1">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div> 

  <!-- Modal2 -->
  <div class="modal" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
          <input type="hidden" name="form_name" value="form2">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn2">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal3 -->
  <div class="modal" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
          <input type="hidden" name="form_name" value="form3">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn3">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal4 -->
  <div class="modal" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
          <input type="hidden" name="form_name" value="form4">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn4">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal5 -->
  <div class="modal" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
          <input type="hidden" name="form_name" value="form5">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn5">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal6 -->
  <div class="modal" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
          <input type="hidden" name="form_name" value="form6">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn6">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal7 -->
  <div class="modal" id="myModal7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
          <input type="hidden" name="form_name" value="form7">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn7">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal8 -->
  <div class="modal" id="myModal8" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4><span class="glyphicon glyphicon-lock"></span>MaaK Gaming</h4>
        </div>
        <div class="modal-body">
          <form role="form" method="POST" action="<?= ROOT_URL ?>paycheck.php">
          <input type="hidden" name="form_name" value="form8">
            <div class="form-group">
              <label for="usrname">Enter Your Credit Card no :</label>
              <input type="text" class="form-control" id="cardno" name="cardno">
            </div>
              <button type="submit" class="btn btn-block" name="submit" value="btn8">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>


</div>


<!-- Footer -->
<footer class="text-center">
 
  <p>MaaK Gaming By AungMyatKaung </p> 
</footer>

</body>
</html>
