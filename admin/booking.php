<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/rooms.css">
<div class="roomBox">
    <img src="img/svg3.png" alt="">
    <span class="userName">Booking </span>
    <span class="quotes">Have a Nice day at work </span>
</div> <!-- End Here -->
<div class="overview-container">
    <div class="ovewerview-header"><h4>Booking Overview</h4></div>
    <div class="overview-sec">
        <div class="overview-card">
          <div class="cardIcon"><img src="img/bed.png" alt=""> </div>
          <div class="cardInfo">
            <h4> Total</h4> <h1>
                <?php
                      $conn=mysqli_connect("localhost","root","","hoteldb");
                        $query= "SELECT count(resid ) AS total FROM reservation";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_array($result);
                        $totalNum=$row['total'];
                        echo $totalNum;
                ?>

            </h1>

          </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
        <div class="overview-card">
          <div class="cardIcon"><img src="img/employee.png" alt=""> </div>
          <div class="cardInfo"><h4>Today </h4> <h1>
            <?php
                    $conn=mysqli_connect("localhost","root","","hoteldb");
                    $query= "SELECT count(empid) AS total FROM `employees`";
                    $result=mysqli_query($conn,$query);
                    $row=mysqli_fetch_assoc($result);
                    $totalNum=$row['total'];
                    echo $totalNum;
            ?>
          </h1> </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
        <div class="overview-card">
          <div class="cardIcon"><img src="img/oficee.png" alt=""> </div>
          <div class="cardInfo"><h4>Complete</h4> <h1>20</h1> </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
        <div class="overview-card">
          <div class="cardIcon"><img src="img/employees.png" alt=""> </div>
          <div class="cardInfo"><h4>Procce</h4> <h1>10</h1> </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
    </div>
</div><!-- overview End Here -->
<div class="viewContent">
<table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Booking Code</th>
          <th>User name</th>
          <th>Room Name</th>
          <th>Due amount</th>
          <th>Status</th>
          <th>Activity</th>
        </tr>
      </thead>
      <tbody>
      <?php
          $conn=mysqli_connect("localhost","root","","hoteldb");
          $query="SELECT * FROM booking";
          $run=mysqli_query($conn,$query);
          while ($row=mysqli_fetch_assoc($run)) {
            // code...
            $bid=$row["bid"];
            $bookedcode=$row["bookedcode"];
            $userid=$row["userid"];
            $rid=$row["rid"];
            $invoice=$row["invoice"];
            $statusid=$row["statusid"];
            $dueamount=$row["dueamount"];

      ?>

        <tr>
          <td><?php echo $bookedcode; ?></td>
          <td><?php
          $conn=mysqli_connect("localhost","root","","hoteldb");
          $Query="SELECT * FROM `users` WHERE userid='$userid'";
            $run_query=mysqli_query($conn,$Query);
            while ($row=mysqli_fetch_assoc($run_query)) {
              $uid=$row['userid'];
              $username=$row['username'];
            ?>

            <?php echo $username;?>

          <?php } ?>  </td>
          <td><?php
          $conn=mysqli_connect("localhost","root","","hoteldb");
          $Query="SELECT * FROM `room` WHERE rid='$rid'";
            $run_query=mysqli_query($conn,$Query);
            while ($row=mysqli_fetch_assoc($run_query)) {
              $rid=$row['rid'];
              $title=$row['title'];
            ?>

            <?php echo $title;?>

          <?php } ?></td>
          <td><?php echo $dueamount; ?></td>
          <td><?php
            if($statusid==1){
              echo"Pannding";
            }
           ?></td>
          <td>
            <a href="bookingdetails.php?bid=<?php echo $bid; ?>"><i class="far fa-eye"></i></a>
            <a href="bookingdetails.php?bid=<?php echo $bid ;?>"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
        <?php } ?>
      </tbody>

    </table>
</div><!--  End Here -->


<?php include("includes/footer.php");?>
