<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/rooms.css">
<div class="viewContent">
<?php
          $conn=mysqli_connect("localhost","root","","hoteldb");
            if($conn){

            }else {
                 die("connection failed" .mysqli_connect_error());
            }//connection End
            if(isset($_GET['rid'])){
                 $roomid=$_GET['rid'];

                 $query="SELECT * FROM room WHERE rid='$roomid'";
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
<div class="room-details">
                    <div class="coverphoto">
                      <img src="" alt="">
                      <?php
                              $conn=mysqli_connect("localhost","root","","hoteldb");
                               if($conn){

                               }else {
                                    die("connection failed" .mysqli_connect_error());
                               }//connection End
                               $iquery="SELECT * FROM roomcoverimage WHERE rid='$rid'";
                               $irun=mysqli_query($conn,$iquery);
                               while ($row=mysqli_fetch_assoc($irun)) {
                                $image=$row['coverimgname'];
                      ?>
                      <img src="roomimages/<?php echo $image; ?>" alt="">

                    <?php } ?>
                        <span class="inputbtn" data-toggle="modal" data-target="#coverImage"><i class="far fa-plus-square"></i>
                        </span>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="coverImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload Cover Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form class="" action="roomdetails.php" method="post" enctype="multipart/form-data">
                              <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" id="roomid" class="form-control" name="rid" value="<?php echo $rid?>" required>
                                </div><!-- form-group end Start-->
                                <div class="form-group">
                                  <input type="file" name="img" required >
                                </div><!-- form-group end Start-->
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit"name="coverimgsave" class="btn btn-primary">Save</button>
                              </div>
                         </form>
                        </div>
                      </div>
                    </div>
                    <!--Model End-->
                    <div class="detailbox">
                      <div class="image-container">
                          <div class="addbtn">
                            <button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#exampleModal">
                              <i class="far fa-plus-square"></i> Image
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form class="" action="roomdetails.php" method="post" enctype="multipart/form-data">
                                      <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" id="roomid" class="form-control" name="rid" value="<?php echo $rid?>" required>
                                        </div><!-- form-group end Start-->
                                        <div class="form-group">
                                          <input type="file" name="img" required >
                                        </div><!-- form-group end Start-->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit"name="save" class="btn btn-primary">Save</button>
                                      </div>
                                 </form>
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="images">
                            <?php
                                       $conn=mysqli_connect("localhost","root","","hoteldb");
                                     if($conn){

                                     }else {
                                          die("connection failed" .mysqli_connect_error());
                                     }//connection End
                                     $iquery="SELECT * FROM roomimage WHERE rid='$rid'";
                                     $irun=mysqli_query($conn,$iquery);
                                     while ($row=mysqli_fetch_assoc($irun)) {
                                      $imgsid =$row['imgsid'];
                                      $image=$row['imgname'];
                            ?>
                              <div class="image-view">
                                <img src="roomimages/<?php echo $image; ?>" >
                                <a href="roomdetails.php?deleteimageid=<?php echo $imgsid;?>"><i class="fas fa-trash"></i></a>
                              </div>

                             <?php } ?>  <!--geting Image-->
                          </div>
                      </div>
                      <div class="room-info">
                        <div class="prime-features">
                          <div class="col-features">
                            <ul>
                                  <li> <i class="fab fa-accusoft"></i> Name: <?php echo $roomanme;?></li>
                                  <div class="form-group">
                                      <div class="row">
                                        <div class="col">
                                        <li> <i class="fab fa-accusoft"></i> Room code: <?php echo $roomcode;?> </li>
                                        </div>
                                        <div class="col">
                                          <li> <i class="fab fa-accusoft"></i> floor:   <?php echo $floor;?></li>
                                        </div>
                                      </div>
                                  </div><!-- form-group end Start-->
                                  <div class="form-group">
                                      <div class="row">
                                        <div class="col">
                                        <li> <i class="fab fa-accusoft"></i> Room Size: <?php echo $size;?></li>
                                        </div>
                                        <div class="col">
                                          <li> <i class="fab fa-accusoft"></i> View:   <?php echo $view;?></li>
                                        </div>
                                      </div>
                                  </div><!-- form-group end Start-->
                              <div class="form-group">
                                  <div class="row">
                                    <div class="col">
                                      <li> <i class="fab fa-accusoft"></i> Occunpancy:  <?php echo $cap;?></li>
                                    </div>
                                    <div class="col">
                                      <li> <i class="fab fa-accusoft"></i> Price: <?php echo  $price;?></li>
                                    </div>
                                  </div>
                              </div><!-- form-group end Start-->
                              <div class="form-group">
                                  <div class="row">
                                    <div class="col">
                                      <li> <i class="fab fa-accusoft"></i> Status: Active</li>
                                    </div>
                                    <div class="col">

                                    </div>
                                  </div>
                              </div><!-- form-group end Start-->

                              <div class="form-group">
                                  <div class="details">
                                      <p>Functionality & individuality are the essence of our Executive Suites. This room is of 400 sft with Ultra luxurious comfort. All the rooms are well decorated with all modern amenities for the ultimate relaxation of the guests</p>
                                  </div>
                              </div><!-- form-group end Start-->
                              <div class="form-group">
                                  <button type="button" class="btn editinfo " data-toggle="modal" data-target="#editdate"> Edit </button>
                                  <!--Add guest for Reservation Model-->
                                  <div class="modal fade" id="editdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Edit Room Information</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <form class="" action="roomdetails.php" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">

                                              <div class="form-group">
                                                  <input type="text" id="roomid" class="form-control" name="rid" value="<?php echo $rid?>" required>
                                              </div><!-- form-group end Start-->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="email" value="<?php echo $roomanme; ?>" placeholder="Title Of The Room" name="roomanme" required>
                                                </div><!-- form-group end Start-->
                                                <div class="form-group">
                                                    <div class="row">
                                                      <div class="col">
                                                        <input type="text" class="form-control" id="email" value="<?php echo $roomcode; ?>" placeholder="Room Code" name="roomcode" required>
                                                      </div>
                                                      <div class="col">
                                                        <select name="floor" class="custom-select">
                                                          <option selected> <?php echo $floor; ?></option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                          <option value="6">6</option>
                                                          <option value="7">7</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                </div><!-- form-group end Start-->
                                                <div class="form-group">
                                                    <div class="row">
                                                      <div class="col">
                                                        <select name="size" class="custom-select">
                                                          <option selected> <?php echo $size; ?></option>
                                                          <option value="720">720</option>
                                                          <option value="480">480</option>
                                                          <option value="1020">1020</option>
                                                        </select>
                                                      </div>
                                                      <div class="col">
                                                        <select name="roomview" class="custom-select">
                                                          <option selected> <?php echo $view; ?> </option>
                                                          <option value="Sea">Sea</option>
                                                          <option value="Hill">Hill</option>
                                                        </select>
                                                      </div>
                                                      <div class="col">
                                                        <select name="Occupancy" class="custom-select">
                                                          <option selected> <?php echo $cap; ?> </option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                </div><!-- form-group end Start-->
                                                <div class="form-group">
                                                    <h4>Discription</h4>
                                                </div><!-- form-group end Start-->
                                                <div class="form-group">
                                                    <Textarea placeholder=" Room Deteails .." name="detailes" >
                                                      Functionality & individuality are the essence of our Executive Suites. This room is of 400 sft with Ultra luxurious comfort.
                                                      All the rooms are well decorated with all modern amenities for the ultimate relaxation of the guests
                                                    </Textarea>
                                                </div><!-- form-group end Start-->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="email" placeholder="Initial Price" name="price"value="<?php echo $price; ?>" required>
                                                </div><!-- form-group end Start-->


                                          </div><!-- model Body-->
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              <button type="submit"name="editRoom" class="btn btn-primary">Save</button>
                                            </div>
                                       </form>
                                      </div>
                                    </div>
                                  </div>
                                  <!--End Model-->
                              </div><!-- form-group end Start-->
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="otherInfo">
                          <li>Room Availability Status</li>
                          <button type="button" class="btn ibtn btn-block" data-toggle="modal" data-target="#setdate">
                            Set Date
                          </button>
                          <!--Room Availability Model-->
                          <div class="modal fade" id="setdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Add Date for Reservation</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form class="" action="roomdetails.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                      <div class="form-group">
                                          <input type="text" id="roomid" class="form-control" name="rid" value="<?php echo $rid?>" required>
                                      </div><!-- form-group end Start-->
                                      <div class="form-group">
                                        <input type="date" class="form-control" id="email" placeholder="" name="avail">
                                      </div><!-- form-group end Start-->
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit"name="setdate" class="btn btn-primary">Save</button>
                                    </div>
                               </form>
                              </div>
                            </div>
                          </div>
                          <!--End Model-->
                          <!--Today Status of the room-->
                          <?php
                            date_default_timezone_set('asia/dhaka');
                            $date=date("Y/m/d");

                            $conn=mysqli_connect("localhost","root","","hoteldb");
                            $iquery="SELECT * FROM roomavailability WHERE rid='$rid' and unavailable='$date'";
                            $result=mysqli_query($conn,$iquery);
                            $count= mysqli_num_rows($result);
                           ?>
                           <li>today Status : <?php
                            if($count==1){
                              echo"Reserved";
                              }else {
                                 echo"Available";
                              }?>
                            </li>
                          <!-- Get unavailable date for room-->
                          <?php
                               $conn=mysqli_connect("localhost","root","","hoteldb");
                               $iquery="SELECT * FROM roomavailability WHERE rid='$rid'";
                               $irun=mysqli_query($conn,$iquery);
                               while ($row=mysqli_fetch_assoc($irun)) {
                                 $unavailable=$row['unavailable'];
                                 ?>
                                 <li><?php echo $unavailable; ?></li>

                           <?php } ?>

                      </div>
                      <!--End otherInfo-->
                    </div><!--End Dtails box-->

                </div><!--Roomdetails End Here -->


 <?php } } ?>

</div>

<?php include("includes/footer.php");?>

<?php
                                            error_reporting(0);
                                              $conn=mysqli_connect("localhost","root","","hoteldb");
                                            if($conn){
                                            }else {
                                                die("connection failed" .mysqli_connect_error());
                                            }//connection End
                                            if(isset($_POST['save'])){
                                              $roomid=$_POST['rid'];
                                              $image = $_FILES['img']['name'];
                                              $image_tmp = $_FILES['img']['tmp_name'];
                                              $target = "roomimages/".basename($image);
                                              move_uploaded_file($image_tmp,$target);

                                              $insertQuery="INSERT INTO `roomimage` (`imgname`, `rid`) VALUES ('$image','$roomid')";
                                              $runQuery=mysqli_query($conn,$insertQuery);
                                            }
                                            if($runQuery){
                                              $_SESSION['status'] = "Image Add Successfully";
                                              $_SESSION['status_code']='success';
                                              echo "<script> window.open('roomdetails.php?rid=$roomid','_self')</script>";
                                            }
                                            //uploading Room Image

                                            //edit name
  //uploading Room  Cover Image
  if(isset($_POST['coverimgsave'])){
    $roomid=$_POST['rid'];

    $image = $_FILES['img']['name'];
    $image_tmp = $_FILES['img']['tmp_name'];
    $target = "roomimages/".basename($image);
    move_uploaded_file($image_tmp,$target);

    $insertQuery="INSERT INTO `roomcoverimage` (`coverimgname`, `rid`) VALUES ('$image','$roomid')";
    $crunQuery=mysqli_query($conn,$insertQuery);
  }
  if($crunQuery){
    $_SESSION['status'] = "Image Add Successfully";
    $_SESSION['status_code']='success';
    echo "<script> window.open('roomdetails.php?rid=$roomid','_self')</script>";
  }

  // Set Room  Availability..
  if(isset($_POST['setdate'])){
    $roomid=$_POST['rid'];
    $avail=$_POST['avail'];
    $insertQuery="INSERT INTO `roomavailability` (`unavailable`, `rid`) VALUES ('$avail','$roomid')";
    $setrunQuery=mysqli_query($conn,$insertQuery);
  }
  if($setrunQuery){
    $_SESSION['status'] = "Date Set Successfully";
    $_SESSION['status_code']='success';
    echo "<script> window.open('roomdetails.php?rid=$roomid','_self')</script>";
  }

//Delete Room image
if(isset($_GET['deleteimageid'])){
    $deleteid=$_GET['deleteimageid'];
    $getrid="SELECT * FROM `roomimage`WHERE `roomimage`.`imgsid` ='$deleteid'";
    $getQuery=mysqli_query($conn,$getrid);
     while ($row=mysqli_fetch_assoc($getQuery)) {
       $rid=$row['rid'];
    }
    $Dquery ="DELETE FROM `roomimage` WHERE `roomimage`.`imgsid` ='$deleteid'";
    $DqueryrunQuery=mysqli_query($conn,$Dquery);
  }
if($DqueryrunQuery){
    $_SESSION['status'] = "Image Delete Successfully";
    $_SESSION['status_code']='success';
    echo "<script> window.open('roomdetails.php?rid=$rid','_self')</script>";
}
//Update Room Details

if (isset($_POST['editRoom'])) {
  // code...
  $conn=mysqli_connect("localhost","root","","hoteldb");
  $rid=$_POST["rid"];
  $roomanme=$_POST["roomanme"];
  $roomcode=$_POST["roomcode"];
  $size=$_POST["size"];
  $floor=$_POST["floor"];
  $roomview=$_POST["roomview"];
  $Occupancy=$_POST["Occupancy"];
  $detailes=$_POST["detailes"];
  $price=$_POST["price"];

  $update="UPDATE `room` SET `roomcode` = '$roomcode', `title` = '$roomanme', `details` = '$detailes',`roomview`='$roomview', `capacity` = '$Occupancy',
   `Bedsize` = '$size', `inirialPrice` = '$price' WHERE `room`.`rid` = '$rid'";
  $updateQuery=mysqli_query($conn,$update);
}
if($updateQuery){
$_SESSION['status'] = "Update Successfully";
$_SESSION['status_code']='success';
echo "<script> window.open('roomdetails.php?rid=$rid','_self')</script>";
}




 ?>
