<?php include("includes/default.php");error_reporting(0);?>

<link rel="stylesheet" href="./css/employee.css">
<link rel="stylesheet" href="./css/task.css">

<div class="taskBox">
    <img src="img/task.png" alt="">
    <span class="userName">Task</span>
    <span class="quotes">
      <a href="task.php">Back To Tasks List</a></span>
</div><!-- End Here R8|xCl7=F4$VmfLY -->

<div class="taskFormContainer">
      <div class="taskcard-details">
      <!-- geting project Details From database taskid -->
      <?php
        $conn=mysqli_connect("localhost","root","","hoteldb");
        if(isset($_GET['taskid'])){
           $taskid=$_GET['taskid'];
           $query="SELECT * FROM tasks WHERE taskid='$taskid'";
           $run=mysqli_query($conn,$query);
           while ($row=mysqli_fetch_assoc($run)) {
                $taskid=$row['taskid'];
                $taskgiven=$row['taskgiven'];
                $taskcode=$row['taskcode'];
                $tasktitle=$row['tasktitle'];
                $taskmsg=$row['taskmsg'];
                $taskduedate=$row['taskduedate'];
                $publish=$row['publish'];
       ?>
        <div class="cardheader">
          <span> <i class="fas fa-circle"></i> due <?php echo $taskduedate; ?></span>
          <span><i class="far fa-edit" data-toggle="modal" data-target="#exampleModal"></i></span>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Update task status</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="" action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                        <select name="floor" class="custom-select" required>
                          <option selected> Select Floor</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                        </select>
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
        </div><!--end card header-->


        <div class="cardcontent">
            <ul>
              <li> <i class="fab fa-accusoft"></i> Task Name : <?php echo $tasktitle;?></li>
              <li> <i class="fab fa-accusoft"></i> Task Code :  <?php echo $taskcode;?></li>
              <li> <i class="fab fa-accusoft"></i> Task Massage :  <?php echo $taskmsg;?></li>
              <li> <i class="fab fa-accusoft"></i> Task Create By :
                <?php
                    $conn=mysqli_connect("localhost","root","","hoteldb");
                    $query="SELECT * FROM employees WHERE empid='$taskgiven'";
                    $run=mysqli_query($conn,$query);
                    while ($row=mysqli_fetch_assoc($run)) {
                      // code...
                      $empid=$row["empid"];
                      $emp_fname=$row["emp_fname"];
                      $position=$row["emptype"];
                 ?>
                 <?php echo $emp_fname ; ?>
               <?php } ?>
              </li>
              <li> <i class="fab fa-accusoft"></i> Task publish :  <?php echo $publish;?></li>
              <li>
                <?php
                    $conn=mysqli_connect("localhost","root","","hoteldb");
                    $query="SELECT * FROM taskassign WHERE taskid='$taskid'";
                    $run=mysqli_query($conn,$query);
                    while ($row=mysqli_fetch_assoc($run)) {
                      // code...
                      $empid=$row["empid"];
                 ?>
                <button type="button" class="btn btn-info"><?php echo $empid; ?></button>
              <?php } ?>
              </li>
              <li>
                  <a href="edittask.php?edit=<?php echo $taskid ;?>"> EDit</a>
              </li>
            </ul>
        </div><!--end card header-->

        <div class="cardfooter"><!--end card footer-->

          <button type="button" class="btn  btn-block" data-toggle="modal" data-target="#empModal">
            <i class="far fa-plus-square"></i> Assign employee
          </button>

          <div class="modal fade" id="empModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Select employee</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="" action="taskdetails.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                        <select name="empid" class="custom-select" required>
                          <option selected> Select employee</option>
                          <?php
                              $conn=mysqli_connect("localhost","root","","hoteldb");
                              $query="SELECT * FROM employees";
                              $run=mysqli_query($conn,$query);
                              while ($row=mysqli_fetch_assoc($run)) {
                                // code...
                                $empid=$row["empid"];
                                $emp_fname=$row["emp_fname"];
                                $position=$row["emptype"];
                           ?>
                          <option value="<?php echo $empid; ?>"><?php echo $emp_fname; ?></option>
                          <?php } ?>
                        </select>
                      </div><!-- form-group end Start-->
                      <div class="form-group">
                            <input type="text" id="roomid" class="form-control" name="taskid" value="<?php echo $taskid?>" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit"name="save" class="btn btn-primary">Save</button>
                    </div>
               </form>
              </div>
            </div>
          </div>
        </div><!--end card header-->



      <?php } } ?>
      <!--end query-->

      </div><!--end taskcard-->
</div><!--end task Form Container-->


<?php include("includes/footer.php");?>

<?php
  $conn=mysqli_connect("localhost","root","","hoteldb");
    if(isset($_POST['save'])){
      $empid=$_POST['empid'];
      $taskid=$_POST['taskid'];

      $insertQuery="INSERT INTO `taskassign` (`taskid`, `empid`) VALUES ( '$taskid', '$empid')";
      $runQuery=mysqli_query($conn,$insertQuery);
    }
    if($runQuery){
      $_SESSION['status'] = "Employee Assign Successfully";
      $_SESSION['status_code']='success';
      echo "<script> window.open('taskdetails.php?taskid=$taskid','_self')</script>";
    }


    if (isset($_POST['update'])) {
      // code...
      $taskid=$_POST["taskid"];
      $ttilte=$_POST["ttilte"];
      $tdd=$_POST["tdd"];
      $msg=$_POST["msg"];

      $update="UPDATE `tasks`SET `tasktitle` = '$ttilte', `taskmsg` = '$msg', `taskduedate` = 'tdd' WHERE `tasks`.`taskid` = '$taskid' ";
      $runQuery=mysqli_query($conn,$update);

    if($runQuery){
     $_SESSION['status'] = "Update Successfully";
     $_SESSION['status_code']='success';
     echo "<script> window.open('task.php','_self')</script>";
    }

    }




 ?>
