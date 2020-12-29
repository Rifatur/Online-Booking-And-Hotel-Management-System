<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/employee.css">


  <div class=" empProfileUI">
      <div class="proheader">
        <div class="emppic">
            <img src="img/pro.png" alt="">
        </div>
        <div class="empbasic">
              <div class="personal-info">
                <?php
                  $conn=mysqli_connect("localhost","root","","hoteldb");
                if (isset($_GET['empid'])) {
                  $empid= $_GET['empid'];
                  $query="SELECT * FROM employees WHERE empid='$empid'";
                  $run=mysqli_query($conn,$query);
                  while ($row=mysqli_fetch_assoc($run)) {
                    // code...
                  $eid=$row["empid"];
                  $emp_fname=$row["emp_fname"];
                  $position=$row["emptype"];
                  $EmployeeId=$row["employeeid"];
                  $phone=$row["phone"];
                  $email=$row["email"];
                  $Salary=$row["bsalary"];
                  $Status=$row["empstatus"];


            ?>
                  <h3><?php echo $emp_fname;?> <span class="badge badge-success">Active</span></h3>
                  <h5><?php
                    if($position==1){
                      echo"Admin";
                    }
                    elseif ($position==2) {
                      echo "Accountant";
                    }
                    elseif ($position==3) {
                      echo "HR";
                    }?></h5>
                  <h6> <?php echo $email ;?></h6>
                  <h6><?php echo $phone ;?></h6>
                  <li><a href="emaploye_details.php?empid=<?php echo $eid ;?>">Massege</a></li>

                <?php } } ?>
              </div>
              <div class="official-info">

              </div>
        </div>
        <div class="navbar">
          <ul>
            <li><button type="button" class="btn btn-outline-info btn-block" data-toggle="modal" data-target="#exampleModal">Edit</button></li>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form class="" action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                            <input type="text" id="roomid" class="form-control" name="rid" value="" required>
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


            <!--End EDIT PART-->
            <li><a href="">attendance</a></li>
            <li><a href="">Salary</a></li>
            <li><a href="">Info</a></li>
          </ul>
        </div>
      </div>

      <div id="contentbox">
        <div class="emp-info">
          <div class="info-div">
              <div class="info-div-1">
                <div class="form-group">
                    <li>Basic information</li>
                </div>
                <div class="info">
                    <div class="title"><li>Full Name</li></div>
                    <div class="title-value"><li><?php echo $emp_fname;?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>nick Name</li></div>
                    <div class="title-value"><li><?php echo "rifat";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>Father name</li></div>
                    <div class="title-value"><li><?php echo "Moklasur Rahman";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>Date Of Birth</li></div>
                    <div class="title-value"><li><?php echo "28-06-1996";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>Gender</li></div>
                    <div class="title-value"><li><?php echo "male";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>Notionality</li></div>
                    <div class="title-value"><li><?php echo "Bangladeshi";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>Merital Status</li></div>
                    <div class="title-value"><li><?php echo "Single";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>NID</li></div>
                    <div class="title-value"><li><?php echo "233648455154";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>languages known</li></div>
                    <div class="title-value"><li><?php echo "bangla english Hindi";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>joing date</li></div>
                    <div class="title-value"><li><?php echo "12-12-2020";?></li></div>
                </div>
              </div>
              <div class="info-div-2">
                <div class="form-group">
                    <li>bank information</li>
                </div>
                <div class="info">
                    <div class="title"><li>Basic Salary</li></div>
                    <div class="title-value"><li><?php echo "60000";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>bank holder </li></div>
                    <div class="title-value"><li><?php echo "rifatur rahman";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>Account Number </li></div>
                    <div class="title-value"><li><?php echo "4158426569";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>bank name</li></div>
                    <div class="title-value"><li><?php echo "dhaka bank";?></li></div>
                </div>
                <div class="info">
                    <div class="title"><li>branch</li></div>
                    <div class="title-value"><li><?php echo "uttara dhaka";?></li></div>
                </div>
              </div>
          </div>


            <div class="form-group">
                <li>Contact information</li>
            </div>
            <div class="info">
                <div class="title"><li>home phone</li></div>
                <div class="title-value"><li><?php echo $phone ;?></li></div>
            </div>
            <div class="info">
                <div class="title"><li>permanent address</li></div>
                <div class="title-value"><li>Tongi Commerce College, সুরতরঙ্গ রোড, Auchpara, Tongi</li></div>
            </div>
            <div class="info">
                <div class="title"><li>local address</li></div>
                <div class="title-value"><li>Tongi Commerce College, সুরতরঙ্গ রোড, Auchpara, Tongi</li></div>
            </div>

        </div>

      </div>


  </div>


<?php include("includes/footer.php");?>
