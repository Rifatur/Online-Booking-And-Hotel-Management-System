<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/reservationdetails.css">
<link rel="stylesheet" href="./css/employee.css">
<link rel="stylesheet" href="./css/rooms.css">
<div class="roomBox">
      <img src="img/res.png" alt="">
      <span class="userName"> Reservation Details</span>
      <span class="quotes">
      <a href="reservation.php">Back to Reservation list</a></span>
</div><!-- End Here -->
<div id="contentbox">
  <div class="emp-info">
    <div class="info-div">
        <div class="info-div-1">
          <div class="form-group">
              <li>Guest information</li>

          <?php
          $conn=mysqli_connect("localhost","root","","hoteldb");
            if (isset($_GET['resid'])) {
              $empid= $_GET['resid'];
              $query="SELECT * FROM guests WHERE resid='$empid'";
              $run=mysqli_query($conn,$query);
              $count= mysqli_num_rows($run);
              while ($row=mysqli_fetch_assoc($run)) {
                // code...
              $guestid=$row["guestid"];
              $name=$row["name"];
              $address=$row["address"];
              $city=$row["city"];
              $country=$row["country"];
              $nid=$row["nid"];
              $passportNo=$row["passportNo"];
              $postcode=$row["postcode"];
              $phone=$row["phoneNo"];
              $email=$row["email"];


           }}?>
      <?php
        if ($count==1) {?>
          <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#editguest">Edit</button>
          <!--End Model-->
          <!--Add guest for Reservation Model-->
          <div class="modal fade" id="editguest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Guest Information</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="" action="reservationdetails.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                        <?php
                          $query="SELECT * FROM guests WHERE resid='$empid'";
                          $run=mysqli_query($conn,$query);
                          while ($row=mysqli_fetch_assoc($run)) {
                          $gid=$row["guestid"];}?>
                        <input type="text" class="form-control" id="updatestate" value="<?php echo $gid;?>" name="rescod">
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                          </div>
                          <input type="text" class="form-control" id="inputDate" value="<?php echo $name;?>" name="Gname" required>
                        </div>
                      </div>
                        <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Address</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $name;?>" name="address" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">City</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $city;?>" name="city" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Country</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $country;?>" name="country" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Nid</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $nid;?>" name="nid" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Passport No</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $passportNo;?>" name="passportNo" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">postcode</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $postcode;?>" name="postcode" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">phoneNo</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $phone;?>" name="phoneNo" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Email</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $email;?>" name="email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Address</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" value="<?php echo $address;?>" name="address" required>
                      </div>
                    </div>
                  </div><!-- model Body-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit"name="editguest" class="btn btn-primary">Save</button>
                    </div>
               </form>
              </div>
            </div>
          </div>
          <!--End Model-->
          <!--Message-->
          <button type="button" class="btn  btn-info" data-toggle="modal" data-target="#editguest">Message</button>

          <!--Edit-->
      </div>
          <div class="info">
              <div class="title"><li> Name</li></div>
              <div class="title-value"><li><?php echo $name; ?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Email</li></div>
              <div class="title-value"><li><?php echo $email;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Phone No</li></div>
              <div class="title-value"><li><?php echo $phone;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>NID</li></div>
              <div class="title-value"><li><?php echo $nid;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Passport No</li></div>
              <div class="title-value"><li><?php echo $passportNo;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Country</li></div>
              <div class="title-value"><li><?php echo $country;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>City</li></div>
              <div class="title-value"><li><?php echo   $city;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Post Code</li></div>
              <div class="title-value"><li><?php echo $postcode;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Address</li></div>
              <div class="title-value"><li><?php echo $address;?></li></div>
          </div>

        </div><!---------->
      <?php  }else{?>
        <button type="button" class="btn  " data-toggle="modal" data-target="#setguest">Add Guest</button>
        <!--End Model-->
        <!--Add guest for Reservation Model-->
        <div class="modal fade" id="setguest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Date for Reservation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="" action="reservationform.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <input type="text" class="form-control" id="updatestate" value="<?php echo $empid; ?>" name="rescod">
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Name</span>
                        </div>
                        <input type="text" class="form-control" id="inputDate" placeholder="" name="Gname" required>
                      </div>
                    </div>
                      <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Address</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="address" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">City</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="city" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Country</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="country" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Nid</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="nid" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Passport No</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="passportNo" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">postcode</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="postcode" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">phoneNo</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="phoneNo" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                      </div>
                      <input type="text" class="form-control" id="inputDate" placeholder="" name="email" required>
                    </div>
                  </div>
                </div><!-- model Body-->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"name="setguest" class="btn btn-primary">Save</button>
                  </div>
             </form>
            </div>
          </div>
        </div>
        <!--End Model-->
    </div><!--End Info Col-->
        <div class="info">
            <div class="title"><li> Name</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>Email</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>Phone No</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>NID</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>Passport No</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>Country</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>City</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>Post Code</li></div>
            <div class="title-value"><li></li></div>
        </div>
        <div class="info">
            <div class="title"><li>Address</li></div>
            <div class="title-value"><li></li></div>
        </div>

      </div>
      <?php } ?>

        <div class="info-div-2"><!--Reservation section-->
          <?php
              $conn=mysqli_connect("localhost","root","","hoteldb");
              if (isset($_GET['resid'])) {
                $resid= $_GET['resid'];
                //getting Query
                $query="SELECT * FROM reservation WHERE resid='$resid'";
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
           }}?>
          <!--Info geting-->
          <div class="form-group">
              <li>Reservation information</li>
          </div>
          <div class="info">
            <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#editreservation">Edit</button>
            <!--End Model-->
            <!--Add guest for Reservation Model-->
            <div class="modal fade" id="editreservation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Reservation Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form class="" action="reservationdetails.php" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" id="updatestate" value="<?php echo $resid; ?>" name="resid" >
                          </div>
                        </div>

                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Status</span>
                          </div>
                          <select name="Status" class="custom-select" >
                              <option value="<?php echo $status; ?>"><?php if ($status==1) {
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
                               }?></option>
                              <option value="1">reserved</option>
                              <option value="2">Checked in</option>
                              <option value="3">Checked out</option>
                              <option value="4">Canceled</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Payment Status</span>
                          </div>
                          <select name="paymentStatus" class="custom-select" >
                              <option value="<?php echo $paymentStatus; ?>"><?php if ($paymentStatus==1) {
                                 // code...
                                 echo "Pandaing";
                               }
                               elseif ($paymentStatus==1) {
                                   echo "Paid";
                               }
                               elseif ($paymentStatus==1) {
                                 echo "Waiting";
                               }
                               elseif ($paymentStatus==1) {
                                   echo "Canceled";
                               }?></option>
                              <option value="1">Pandaing</option>
                              <option value="2">Paid</option>
                              <option value="3">Waiting</option>
                              <option value="4">Canceled</option>
                            </select>
                        </div>
                      </div>

                    </div><!-- model Body-->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit"name="editstatus" class="btn btn-primary">Save</button>
                      </div>
                 </form>
                </div>
              </div>
            </div>
            <!--End Model-->
          </div><!--End info End Button Div-->
          <div class="info">
              <div class="title"><li>Check In</li></div>
              <div class="title-value"><li><?php echo $checkin;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Check Out </li></div>
              <div class="title-value"><li><?php echo $checkout;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Code </li></div>
              <div class="title-value"><li><?php echo $rescode; ?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Arival Time</li></div>
              <div class="title-value"><li><?php echo $arivaltime ; ?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Remark</li></div>
              <div class="title-value"><li><?php echo $remark; ?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Create Date</li></div>
              <div class="title-value"><li><?php echo $createdate;?></li></div>
          </div>
          <div class="info">
              <div class="title"><li>Status</li></div>
              <div class="title-value"><li>
                <?php
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
                      else {
                        // code...
                        echo"Not Added";
                      }
                 ?>
              </li></div>
          </div>
          <div class="info">
              <div class="title"><li>Payment Status</li></div>
              <div class="title-value"><li><?php if ($paymentStatus==1) {
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
               } ?></li></div>
          </div>
        </div>
    </div><!--emp-info-->
    <!-------------------->
    <!-- Reservation Room section -->
      <div class="form-group">
          <li>Room information</li>
      </div>
      <div class="Roomlist"><!--Room Information-->
        <button type="button" class="btn  btn-warning" data-toggle="modal" data-target="#newroom">Add Room</button>
        <!--Add Room for Reservation Model-->
        <div class="modal fade" id="newroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Date for Reservation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="" action="reservationform.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputDate" value="<?php echo $resid; ?>" name="rescod">
                    </div>
                    <div class="form-group">
                     <select name="roomid" class="custom-select">
                      <?php
                          $conn=mysqli_connect("localhost","root","","hoteldb");
                            $query="SELECT * FROM room";
                            $run=mysqli_query($conn,$query);
                            while ($row=mysqli_fetch_assoc($run)) {
                              // code...
                              $rid=$row["rid"];
                              $roomanme=$row["title"];
                       ?>

                         <option value="<?php echo $rid; ?>"><?php echo $roomanme; ?></option>
                       <?php } ?>
                       </select>
                     </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"name="addroom" class="btn btn-primary">Save</button>
                  </div>
             </form>
            </div>
          </div>
        </div>
        <!--End Model-->
        <!--Add guest for Reservation Model-->
        <?php
            $conn=mysqli_connect("localhost","root","","hoteldb");
            if (isset($_GET['resid'])) {
              $resid= $_GET['resid'];
            }//getting Query
              $query="SELECT * FROM reservroom WHERE resid='$resid'";
              $run=mysqli_query($conn,$query);
              while ($row=mysqli_fetch_assoc($run)) {
                // code...
              $resroomid=$row["resroomid"];
              $resid=$row["resid"];
              $rid=$row["rid"];
              $getquery="SELECT * FROM room WHERE rid='$rid'";
              $queryrun=mysqli_query($conn,$getquery);

              while ($row=mysqli_fetch_assoc($queryrun)) {
                $rid=$row['rid'];
                $roomanme=$row['title'];
                $roomcode=$row['roomcode'];
                $floor=$row['floorcode'];
                $size=$row['Bedsize'];
                $view=$row['roomview'];
                $cap=$row['capacity'];
                $price=$row['inirialPrice'];

         ?>
        <!--Info geting-->

            <div class="res-roomcard">

              <?php
                      $conn=mysqli_connect("localhost","root","","hoteldb");
                      $iquery="SELECT * FROM roomimage WHERE rid='$rid'LIMIT 1";
                      $irun=mysqli_query($conn,$iquery);
                      while ($row=mysqli_fetch_assoc($irun)) {
                      $image=$row['imgname'];
              ?>
                <img src="roomimages/<?php echo $image; ?>" alt="">
              <?php }?>
              <span class="name"> <?php echo $roomanme;?> </span>
              <span class="price"> Tk <?php echo $price ?> </span>
              <span class="action">
                <span> <a href="reservationdetails.php?deleteroom=<?php echo $resroomid?>"><i class="fas fa-trash"></i></a> </span>
                <span> <a href="roomdetails.php?rid=<?php echo $rid; ?>"><i class="far fa-eye"></i></a> </span>
              </span>

            </div>
        <?php }} ?>
        <a href="invoiceform.php?resid=<?php echo $resid ;?>" class="invoice">Generate Invoice</a>
      </div>


  </div>

</div>
<?php include("includes/footer.php");?>
<?php
//Update Guest Query...UPDATE `reservation` SET `status` = '1', `paymentStatus` = '2' WHERE `reservation`.`resid` = 3;
error_reporting(0);
//reservation Edit..
$conn=mysqli_connect("localhost","root","","hoteldb");
  $empid= $_GET['resid'];
if(isset($_POST['editstatus'])){
  $resids=$_POST['resid'];
  $Status=$_POST['Status'];
  $paymentStatus=$_POST['paymentStatus'];

  $resupdate="UPDATE `reservation` SET `status` = '$Status', `paymentStatus` = '$paymentStatus' WHERE `reservation`.`resid` = $resids";
  $resupdateQuery=mysqli_query($conn,$resupdate);
}
  if($resupdateQuery){
      echo "<script> alert('Edit Successfully !')</script>";
      echo "<script> window.open('reservationdetails.php?resid=$resids','_self')</script>";
  }



//Guests Edit..
if(isset($_POST['editguest'])){
  $rescod=$_POST['rescod'];
  $Gname=$_POST['Gname'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $country=$_POST['country'];
  $nid=$_POST['nid'];
  $passportNo=$_POST['passportNo'];
  $postcode=$_POST['postcode'];
  $phoneNo=$_POST['phoneNo'];
  $email=$_POST['email'];

  $update="UPDATE `guests` SET `name` = '$Gname', `address` = '$address', `city` = '$city', `country` = '$country',
 `nid` = '$nid', `passportNo` = '$passportNo', `postcode` = '$postcode', `phoneNo` = '$phoneNo', `email` = '$email' WHERE `guests`.`guestid` ='$rescod'";
  $runGuestQuery=mysqli_query($conn,$update);
}
  if($runGuestQuery){
  $_SESSION['status'] = "Update Successfully";
  $_SESSION['status_code']='success';
  echo "<script> window.open('reservationdetails.php?resid=$empid','_self')</script>";
  }
//Update Guest Query End...


//Deleting Room From reservation ...
  $conn=mysqli_connect("localhost","root","","hoteldb");
  if (isset($_GET['deleteroom'])) {
                  // code...
  $delete=$_GET['deleteroom'];
  $query= "DELETE  FROM reservroom WHERE resroomid='$delete'";
  $result=mysqli_query($conn,$query);
  if($result){
      echo "<script> alert('remove Successfully !')</script>";
      echo "<script> window.open('reservation.php','_self')</script>";
    }
  }





 ?>
