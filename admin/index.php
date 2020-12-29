  <?php include("includes/default.php");?>
                <div class="welcomeBox">
                    <img src="img/svg1.png" alt="">
                    <span class="userName">Hello RIFAT</span>
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

                <div class="service-col2">
                  <div class="list-col-75">
                    <div class="Listheader">
                      <h6>Booking Analytics</h6>
                      <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                    </div><!--Listheader End Here -->
                    <div class="chart-container">
                        <canvas id="chart"></canvas>
                    </div>
                  </div>
                </div>
                <div class="service-col">

                    <div class="list-col-74">
                      <div class="Listheader">
                        <h6>Rooms</h6>
                        <a href="rooms.php"><i class="fas fa-ellipsis-v"></i></a>
                      </div><!--Listheader End Here -->
                      <?php
                            $conn=mysqli_connect("localhost","root","","hoteldb");
                            $query= "SELECT * FROM `room`ORDER BY rid DESC LIMIT 3";
                            $run=mysqli_query($conn,$query);
                            while ($row=mysqli_fetch_assoc($run)) {
                              // code...
                              $rid=$row['rid'];
                              $roomanme=$row['title'];
                              $roomcode=$row['roomcode'];
                              $floor=$row['floorcode'];
                              $size=$row['Bedsize'];
                              $view=$row['roomview'];
                              $cap=$row['capacity'];
                              $price=$row['inirialPrice'];

                      ?>
                            <div class="room-card">
                              <div class="card-image">
                              <?php
                                       $conn=mysqli_connect("localhost","root","","hoteldb");
                                     $iquery="SELECT * FROM roomimage WHERE rid='$rid'LIMIT 1";
                                     $irun=mysqli_query($conn,$iquery);
                                     while ($row=mysqli_fetch_assoc($irun)) {
                                      $image=$row['imgname'];
                              ?>
                                <img src="roomimages/<?php echo $image; ?>" alt="">
                              <?php }?>
                              </div>
                              <div class="card-info">
                                  <h6><?php  echo $roomanme; ?>  </h6>
                                  <p><?php  echo $view; ?></p>
                                  <span><?php  echo $price; ?>/night</span>
                              </div>
                              <div class="card-link"> <a href="roomdetails.php?rid=<?php echo $rid;?>"><i class="fas fa-ellipsis-v"></i></a></div>
                            </div><!--card End Here -->
                            <?php  } ?>

                    </div><!--col End Here -->
                    <div class="list-col-74">

                    </div>

                </div><!-- service End Here -->

<?php include("includes/footer.php");?>
