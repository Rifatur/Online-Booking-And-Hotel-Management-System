<?php
  $conn=mysqli_connect("localhost","root","","hoteldb");
if (isset($_GET['eid'])) {
  $empid= $_GET['eid'];
  }
  $getroom="SELECT * FROM employees WHERE empid='$empid'";
  $run_getroom=mysqli_query($conn,$getroom);
  while ($row=mysqli_fetch_assoc($run_getroom)) {
    // code...
          $eid=$row['empid'];
        }

  $taskquery="INSERT INTO `attendance` (`empid`, `atStatus`, `atDate`, `att_time`)VALUES ('$eid', '1',CURDATE(),CURTIME())";
  $runQuery=mysqli_query($conn,$taskquery);
  if($runQuery){
      $_SESSION['status'] = "Tasks Add Successfully";
      $_SESSION['status_code']='success';
      echo "<script> window.open('index.php','_self')</script>";
   }

 ?>
