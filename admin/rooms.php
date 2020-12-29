<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/rooms.css">
                <div class="roomBox">
                    <img src="img/svg3.png" alt="">
                    <span class="userName">Rooms</span>
                    <span class="quotes">Have a Nice day at work </span>
                </div><!-- End Here -->
                <div class="overview-container">
                    <div class="ovewerview-header"><h4>Overview</h4></div>
                    <div class="overview-sec">
                        <div class="overview-card">
                          <div class="cardIcon"><img src="img/bed.png" alt=""> </div>
                          <div class="cardInfo">
                            <h4>Total Room</h4> <h1>
                                <?php
                                      $conn=mysqli_connect("localhost","root","","hoteldb");
                                        $query= "SELECT count(rid) AS total FROM room";
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
                          <div class="cardInfo"><h4>Employee</h4> <h1>
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
                          <div class="cardInfo"><h4>Users</h4> <h1>
                            <?php
                                    $conn=mysqli_connect("localhost","root","","hoteldb");
                                    $query= "SELECT count(userid) AS total FROM `users`";
                                    $result=mysqli_query($conn,$query);
                                    $row=mysqli_fetch_assoc($result);
                                    $totalNum=$row['total'];
                                    echo $totalNum;
                            ?>
                            </h1>
                           </div>
                          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
                        </div>
                        <div class="overview-card">
                          <div class="cardIcon"><img src="img/employees.png" alt=""> </div>
                          <div class="cardInfo"><h4>Booking</h4>
                             <h1>
                               <?php
                                       $conn=mysqli_connect("localhost","root","","hoteldb");
                                       $query= "SELECT count(bid) AS total FROM `booking`";
                                       $result=mysqli_query($conn,$query);
                                       $row=mysqli_fetch_assoc($result);
                                       $totalNum=$row['total'];
                                       echo $totalNum;
                               ?>
                             </h1>
                           </div>
                          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
                        </div>
                    </div>
                </div><!-- overview End Here -->

                <ul  class="ul">
                  <li class="Addbotton">
                      <span class="logo"><i class="fas fa-plus"></i></span>
                      <a href="./addroom.php">New room</a>
                  </li>
                </ul>
                <div class="viewContent">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Room Code</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>floor</th>
                          <th>Status</th>
                          <th>Activity</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            $conn=mysqli_connect("localhost","root","","hoteldb");
                          if($conn){

                          }else {
                              die("connection failed" .mysqli_connect_error());
                          }//connection End
                          $query="SELECT * FROM room";
                          $run=mysqli_query($conn,$query);
                          while ($row=mysqli_fetch_assoc($run)) {
                            // code...
                            $rid=$row["rid"];
                            $roomanme=$row["title"];
                            $roomcode=$row["roomcode"];
                            $floor=$row["floorcode"];
                            $price=$row["inirialPrice"];

                      ?>

                        <tr>
                          <td><?php echo $roomcode; ?></td>
                          <td><?php echo $roomanme;  ?></td>
                          <td><?php echo$price; ?></td>
                          <td><?php echo $floor; ?></td>
                          <td><button type="button" class="btn btn-warning">Active</button></td>
                          <td>
                            <button type="button" class="btn btn-info"><a href="roomdetails.php?rid=<?php echo $rid; ?>"><i class="far fa-eye"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="rooms.php?deleteid=<?php echo $rid ;?>"><i class="fas fa-trash"></i></a></button>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Room Code</th>
                          <th>Name</th>
                          <th>Price</th>
                          <th>floor</th>
                          <th>Status</th>
                          <th>Activity</th>
                        </tr>
                      </tfoot>
                    </table>
                </div><!--  End Here -->

<?php include("includes/footer.php");?>
 <?php
 error_reporting(0);
 $conn=mysqli_connect("localhost","root","","hoteldb");

   if (isset($_GET['deleteid'])) {
                   // code...
   $delete=$_GET['deleteid'];
   $query= "DELETE  FROM room WHERE rid='$delete'";
   $result=mysqli_query($conn,$query);
   if($result){
       echo "<script> alert('remove Successfully !')</script>";
       echo "<script> window.open('cart.php','_self')</script>";
     }
   }



  ?>
