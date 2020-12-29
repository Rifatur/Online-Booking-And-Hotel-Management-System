<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/rooms.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
                <div class="roomBox">
                    <img src="img/res.png" alt="">
                    <span class="userName">Reservation</span>
                    <span class="quotes">
                      <a href="reservationform.php">Creat Reservation</a></span>
                </div><!-- End Here -->
                <div class="overview-container">
                    <div class="ovewerview-header"><h4>Reservation Overview</h4></div>
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
                          <div class="cardInfo"><h4>Yesterday</h4> <h1>56320</h1> </div>
                          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
                        </div>
                        <div class="overview-card">
                          <div class="cardIcon"><img src="img/employees.png" alt=""> </div>
                          <div class="cardInfo"><h4>Guests</h4> <h1>6320</h1> </div>
                          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
                        </div>
                    </div>
                </div><!-- overview End Here -->



<div class="reservationtable">
  <div class="tableHeader">
    <h4>List of all Reservation</h4>
  </div>
  <table id="example" class="table table-striped table-bordered" style="width:100%;text-align: center;">
        <thead>
          <tr>
            <th>Code</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Status</th>
            <th>PaymentStatus</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
              $conn=mysqli_connect("localhost","root","","hoteldb");//connection End
            //getting Query
            $query="SELECT * FROM reservation ";
            $run=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($run)) {
              // code...
            $resid=$row["resid"];
            $rescode=$row["rescode"];
            $checkin=$row["checkin"];
            $checkout=$row["checkout"];
            $arivaltime=$row["arivaltime"];
            $remark=$row["remark"];
            $offercode=$row["offercode"];
            $creatby=$row["creatby"];
            $status=$row["status"];
            $paymentStatus=$row["paymentStatus"];
            $createdate=$row["createdate"];
       ?>

          <tr>
            <td><?php echo $rescode; ?></td>
            <td><?php echo  $checkin; ?></td>
            <td><?php echo $checkout; ?></td>
            <td><?php
            if ($status==1) {
               // code...
               echo "reserved";
             }
             elseif ($status==2) {
                 echo "Checked in";
             }
             elseif ($status==3) {
               echo "Checked out";
             }
             elseif ($status==4) {
                 echo "Canceled";
             }
             ?></td>
            <td><?php
                             if ($paymentStatus==1) {
                                // code...
                                echo "Pandaing";
                              }
                              elseif ($paymentStatus==2) {
                                  echo "Paid";
                              }
                              elseif ($paymentStatus==3) {
                                echo "Waiting";
                              }
                              elseif ($paymentStatus==4) {
                                  echo "Canceled";
                              }
                              else {
                                // code...
                                echo"Not Added";
                              } ?></td>
            <td>
              <button type="button" class="btn btn-info"><a href="reservationdetails.php?resid=<?php echo $resid; ?>">
                <span class="material-icons">
                  visibility
                  </span></a></button>
              <button type="button" class="btn btn-danger"><a href="reservationdetails.php?resid=<?php echo $resid ;?>"><i class="fas fa-trash"></i></a></button>
            </td>
          </tr>
          <?php } ?>
        </tbody>

      </table>
</div><!--reservationtable End Here -->



<?php include("includes/footer.php");?>
