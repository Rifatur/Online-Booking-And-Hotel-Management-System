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
        <?php
        $conn=mysqli_connect("localhost","root","","hoteldb");
        if(isset($_GET['edit'])){
           $taskid=$_GET['edit'];
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



        <form class="" action="edittask.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group">
                  <input type="text" id="taskid" class="form-control" name="taskid" value="<?php echo $taskid;?>" required>
              </div><!-- form-group end Start-->
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Task Title</span>
                </div>
                <input type="text" class="form-control" id="email" value="<?php echo $tasktitle;?>"name="ttilte" required>
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Massage </span>
                </div>
                <input type="text" class="form-control" id="email" value="<?php echo $taskmsg;?>" name="msg" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit"name="update" class="btn btn-primary">Save</button>
            </div>
       </form>

<?php } } ?>


      </div>
</div>



<?php include("includes/footer.php");?>

<?php
$conn=mysqli_connect("localhost","root","","hoteldb");
if (isset($_POST['update'])) {
  // code...
  $taskid=$_POST["taskid"];
  $ttilte=$_POST["ttilte"];
  $tdd=$_POST["tdd"];
  $msg=$_POST["msg"];

  $update="UPDATE `tasks`SET `tasktitle` = '$ttilte', `taskmsg` = '$msg' WHERE `tasks`.`taskid` = '$taskid' ";
  $runQuery=mysqli_query($conn,$update);
}
if($runQuery){
 $_SESSION['status'] = "Update Successfully";
 $_SESSION['status_code']='success';
 echo "<script> window.open('task.php','_self')</script>";
}
 ?>
