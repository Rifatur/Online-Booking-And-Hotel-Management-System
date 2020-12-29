<?php
// Start the session
session_start();
?>
<div class="manu-area">
    <div class="manu-logo-inner">
       <a href=""> <img src="images/logo.png" alt=""></a>
    </div><!-- manu  end-->

    <div class="navigation">
      <li><a href="./index.php">Home</a></li>
      <li><a href="./room-list.php">Room & suits</a></li>
      <li><a href="">special offerr</a></li>
      <li><a href="">gallery</a></li>
      <li><a href="account.php">
        <?php
          if (!isset($_SESSION['useremail'])) {

          }
          else{
            echo "MyAccount";
          }

        ?>
      </a></li>
    </div><!-- manu navigation end-->

    <div class="manu-right-ienner">
      <li><?php
        if (!isset($_SESSION['useremail'])) {
           echo' <a href="login.php"><i class="fas fa-unlock-alt"></i> login</a>';
        }
        else{
          echo' <a href="logout.php"><i class="fas fa-unlock-alt"></i> logout</a>';
        }

      ?>
      </li>
      <li><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
      <li><a href=""><i class="fas fa-align-justify"></i></a></li>
    </div><!-- manu  end-->

</div><!-- manu Area end-->
