<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/rooms.css">
                <div class="roomBox">
                    <img src="img/res.png" alt="">
                    <span class="userName">Reservation</span>
                    <span class="quotes">
                      <a href="reservation.php">Back to Reservation list</a></span>
                </div><!-- End Here -->
    <!-- START FORM Here -->
<div  class="reservation-form">
<div class="inner-form">
  <form class="" action="reservationform.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="row">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Check In</span>
                    </div>
                    <input type="date" class="form-control" id="inputDate" placeholder="" name="cin" required>
                  </div>
                </div>
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Check Out</span>
                    </div>
                    <input type="date" class="form-control" id="inputDate" placeholder="" name="cout" required>
                  </div>
                </div>
            </div>
          </div><!-- form-group end Start-->
          <div class="form-group">
            <div class="row">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Arival time</span>
                    </div>
                    <input type="time" class="form-control" id="inputDate" placeholder="" name="atime">
                  </div>
                </div>
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">offer code</span>
                    </div>
                    <input type="text" class="form-control" id="inputDate" placeholder="" name="offercode">
                  </div>
                </div>
            </div>
          </div><!-- form-group end Start-->
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Remark</span>
              </div>
              <input type="text" class="form-control" id="inputDate" placeholder="" name="remark">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name="save" class="btn  btn-primary ">Add</button>
          </div>
    </form>
      <div class="reserv-col">
        <?php
              $conn=mysqli_connect("localhost","root","","hoteldb");
              $query= "SELECT * FROM `reservation`ORDER BY resid DESC LIMIT 1";
              $run=mysqli_query($conn,$query);
              while ($row=mysqli_fetch_assoc($run)) {
                // code...
                $resid=$row['resid'];
                $rescode=$row['rescode'];
        ?>

        <button type="button" class="btn  " data-toggle="modal" data-target="#addroom">Add Room</button>
        <button type="button" class="btn  " data-toggle="modal" data-target="#setguest">Add Guest</button>
        <button type="button" class="btn  " data-toggle="modal" data-target="#setdate">Status</button>
        <button type="button" class="btn  "><a href="reservationdetails.php?resid=<?php echo $resid ; ?>">View full reservation</a></button>
        <button type="button" class="btn  "> Reservation Code  <?php echo $rescode ;?></button>
      <?php } ?>
      </div>

      <!--Add Room for Reservation Model-->
      <div class="modal fade" id="addroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" id="inputDate" value="<?php echo $resid; ?>" name="rescod">
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
  </div>
</div>
  <!-- End reservation FORM Here -->

<?php include("includes/footer.php");?>

<?php
    // Set Room  Availability..
    $rescode= mt_rand(100000,640000);
    error_reporting(0);
    $conn=mysqli_connect("localhost","root","","hoteldb");
    if(isset($_POST['save'])){
      $cin=$_POST['cin'];
      $cout=$_POST['cout'];
      $atime=$_POST['atime'];
      $offercode=$_POST['offercode'];
      $Remark=$_POST['Remark'];
      $rescode= mt_rand(100000,640000);
      $reservQuery="INSERT INTO `reservation` (`rescode`, `checkin`, `checkout`, `arivaltime`, `remark`, `offercode`, `creatby`,`status`,`paymentStatus`, `createdate`)
       VALUES ('$rescode','$cin','$cout','$atime','$Remark','$offercode', '3','1','1',CURDATE())";
      $runQuery=mysqli_query($conn,$reservQuery);
    }
    if($runQuery){
      echo "<script> window.open('reservationform.php','_self')</script>";
    }

//
if(isset($_POST['addroom'])){
  $roomid=$_POST['roomid'];
  $resid=$_POST['rescod'];

  $insertQuery="INSERT INTO `reservroom` ( `rid`,`resid`) VALUES ('$roomid','$resid')";
  $rrunQuery=mysqli_query($conn,$insertQuery);
}
  if($rrunQuery){
  echo "<script> window.open('reservationform.php','_self')</script>";
  }



 ?>
<?php
$conn=mysqli_connect("localhost","root","","hoteldb");
//inserting the guest form
if(isset($_POST['setguest'])){

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

  $GuestQuery="INSERT INTO `guests` (`name`, `address`, `city`, `country`, `nid`, `passportNo`, `postcode`, `phoneNo`, `email`, `resid`)
   VALUES ('$Gname', '$address', '$city', '$country', '$nid', '$passportNo', '$postcode', '$phoneNo', '$email', '$rescod')";
  $runGuestQuery=mysqli_query($conn,$GuestQuery);
}
  if($runGuestQuery){
  $_SESSION['status'] = "Guest Add Successfully";
  $_SESSION['status_code']='success';
  echo "<script> window.open('reservationform.php','_self')</script>";
  }

 ?>
