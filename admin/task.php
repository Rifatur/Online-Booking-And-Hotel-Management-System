<?php include("includes/default.php");?>

<link rel="stylesheet" href="./css/employee.css">

<div class="taskBox">
    <img src="img/task.png" alt="">
    <span class="userName">Task</span>
</div><!-- End Here R8|xCl7=F4$VmfLY -->
<div class="overview-container">
    <div class="ovewerview-header"><h4>Employee Overview</h4></div>
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
          <div class="cardInfo"><h4>Complete</h4> <h1>20</h1> </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
        <div class="overview-card">
          <div class="cardIcon"><img src="img/employees.png" alt=""> </div>
          <div class="cardInfo"><h4>Procce</h4> <h1>10</h1> </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
    </div>
</div><!-- overview End Here -->
    <div class="taskform">
      <div class="formHeader">
        <span class="formquotes">Creat New Tasks</span>
      </div>
      <form class="" action="task.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Task Title</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="ttilte" required>
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Task Due Date </span>
            </div>
            <input type="date" class="form-control" id="email" placeholder="" name="tdd" required>
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Massage </span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="msg" required>
          </div>
          <div class="input-group">
              <button type="submit" name="save" class="btn  btn-primary btn-block">Submit Task</button>
          </div>
      </form>
    </div><!--End taskform -->


<div class="taskstable">
  <div class="tableHeader">
    <span class="formquotes">list of New Tasks</span>
  </div>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>Task Name</th>
              <th>Task Code</th>
              <th>Due Date</th>
              <th>Status</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>
        <?php
              $conn=mysqli_connect("localhost","root","","hoteldb");
            if($conn){
            }else {
                die("connection failed" .mysqli_connect_error());
            }//connection End
            $query="SELECT * FROM `tasks`";
            $run=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($run)) {
              // code...
              $taskid=$row["taskid"];
              $taskgiven=$row["taskgiven"];
              $taskcode=$row["taskcode"];
              $tasktitle=$row["tasktitle"];
              $taskmsg=$row["taskmsg"];
              $taskduedate=$row["taskduedate"];
              $publish=$row["publish"];


        ?>
          <tr>
              <td><?php echo $tasktitle; ?></td>
              <td><?php echo $taskcode; ?></td>
              <td><?php echo $taskduedate; ?></td>
              <td>running</td>
              <td>
                <button type="button" class="btn btn-info btn-sm"><a href="taskdetails.php?taskid=<?php echo $taskid; ?>"><i class="far fa-eye"></i></a></button>
                <button type="button" class="btn btn-danger btn-sm"><a href="taskdetails.php?taskid=<?php echo $taskid; ?>"><i class="far fa-trash-alt"></i></a></button>
              </td>
          </tr>
        <?php } ?>
      <tfoot>

      </tfoot>
  </table>
</div>
<?php include("includes/footer.php");?>

<?php

        // Turn off all error reporting
        $taskcode= mt_rand(100000,640000);
        error_reporting(0);
        $conn=mysqli_connect("localhost","root","","hoteldb");
        if(isset($_POST['save'])){
          $ttilte=$_POST["ttilte"];
          $tdd=$_POST["tdd"];
          $msg=$_POST["msg"];

          $taskcode= mt_rand(100000,640000);
          $taskquery="INSERT INTO `tasks` (`taskgiven`, `taskcode`, `tasktitle`, `taskmsg`, `taskduedate`, `publish`)
           VALUES ( '3','$taskcode', '$ttilte', '$msg', '$tdd', CURDATE())";
           $runQuery=mysqli_query($conn,$taskquery);
      }
      if($runQuery){
          $_SESSION['status'] = "Tasks Add Successfully";
          $_SESSION['status_code']='success';
          echo "<script> window.open('task.php','_self')</script>";
       }

 ?>
