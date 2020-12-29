<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/rooms.css">

                <ul  class="ul">
                  <li class="Addbotton">
                      <span class="logo"><i class="fas fa-angle-double-left"></i></span>
                      <a href="./rooms.php">Rooms </a>
                  </li>
                </ul>
                <div class="inputContainer">
                  <div class="formheader">  </div>
                  <!--  Form Start-->
                  <form class="" action="addroom.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Title Of The Room" name="roomanme" required>
                    </div><!-- form-group end Start-->
                    <div class="form-group">
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" id="email" placeholder="Room Code" name="roomcode" required>
                          </div>
                          <div class="col">
                            <select name="floor" class="custom-select">
                              <option selected> Select Floor</option>
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
                              <option selected> Select Room size</option>
                              <option value="720">720</option>
                              <option value="480">480</option>
                              <option value="1020">1020</option>
                            </select>
                          </div>
                          <div class="col">
                            <select name="roomview" class="custom-select">
                              <option selected> Select Room View</option>
                              <option value="Sea">Sea</option>
                              <option value="Hill">Hill</option>
                            </select>
                          </div>
                          <div class="col">
                            <select name="Occupancy" class="custom-select">
                              <option selected> Select Occupancy</option>
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
                        <Textarea placeholder=" Room Deteails .." name="detailes"></Textarea>
                    </div><!-- form-group end Start-->
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Initial Price" name="price" required>
                    </div><!-- form-group end Start-->
                    <div class="form-group">
                      <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="coverimg">
                        <label class="custom-file-label" for="customFile">Upload Cover photo ..</label>
                      </div>
                    </div><!-- form-group end Start-->
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block" name="submit"> insert </button>
                    </div>
                  </form><!-- form end Start-->
                </div>
 <?php include("includes/footer.php");?>
 <?php
 // Turn off all error reporting
          error_reporting(0);
            $conn=mysqli_connect("localhost","root","","hoteldb");
          if($conn){
          }else {
              die("connection failed" .mysqli_connect_error());
          }//connection End
          if(isset($_POST['submit'])){

            $roomanme=$_POST["roomanme"];
            $roomcode=$_POST["roomcode"];
            $size=$_POST["size"];
            $floor=$_POST["floor"];
            $roomview=$_POST["roomview"];
            $Occupancy=$_POST["Occupancy"];
            $detailes=$_POST["detailes"];
            $price=$_POST["price"];

            $insertQuery="INSERT INTO `room` (`roomcode`, `title`, `details`, `roomview`, `floorcode`, `capacity`, `Bedsize`, `inirialPrice`, `coverimage`, `createdate`, `updatedate`)
             VALUES ('$roomcode', '$roomanme', '$detailes', '$roomview', '$floor', '$Occupancy', '$size', ' $price', 'rr', CURDATE(),CURDATE())";
            $runQuery=mysqli_query($conn,$insertQuery);
          }
          if($runQuery){
              $_SESSION['status'] = "Room Add Successfully";
              $_SESSION['status_code']='success';
              echo "<script> window.open('rooms.php','_self')</script>";
           }
          /* else{
            $_SESSION['status'] = "Room Not Added";
            $_SESSION['status_code']='warning';
           }*/

          //DELETE FROM `room` WHERE `room`.`rid` = 2
?>
