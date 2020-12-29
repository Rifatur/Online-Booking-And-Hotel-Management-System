<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/employee.css">

<div class="employeeBox">
    <img src="img/employees.png" alt="">
    <span class="userName">Employees</span>
    <span class="quotes">
      <a href="employeeform.php">Creat New Employee</a></span>
</div><!-- End Here -->
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
          <div class="cardInfo"><h4>Present</h4> <h1>20</h1> </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
        <div class="overview-card">
          <div class="cardIcon"><img src="img/employees.png" alt=""> </div>
          <div class="cardInfo"><h4>leave</h4> <h1>10</h1> </div>
          <div class="cardMore"> <a href="#"><i class="fas fa-ellipsis-v"></i></a> </div>
        </div>
    </div>
</div><!-- overview End Here -->
<div class="employeetable">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Employee Id</th>
              <th>phone</th>
              <th>Salary</th>
              <th>Status</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
        <?php
              $conn=mysqli_connect("localhost","root","","hoteldb");
            if($conn){

            }else {
                die("connection failed" .mysqli_connect_error());
            }//connection End
            $query="SELECT * FROM employees";
            $run=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($run)) {
              // code...
              $empid=$row["empid"];
              $emp_fname=$row["emp_fname"];
              $position=$row["emptype"];
              $EmployeeId=$row["employeeid"];
              $phone=$row["phone"];
              $Salary=$row["bsalary"];
              $Status=$row["empstatus"];


        ?>
          <tr>
              <td><?php echo $emp_fname; ?></td>
              <td><?php
                if($position==1){
                  echo"Admin";
                }
                elseif ($position==2) {
                  echo "Accountant";
                }
                elseif ($position==3) {
                  echo "HR";
                }
              ?></td>
              <td><?php echo $EmployeeId; ?></td>
              <td><?php echo $phone; ?></td>
              <td>$ <?php echo $Salary; ?></td>
              <td><?php if($Status==1){echo"<button type='button' class='btn btn-info btn-sm'>Active</button>";}else {
              echo"<button type='button' class='btn btn-outline-info'>Dective</button>";
              } ?></td>
              <td>
                <button type="button" class="btn btn-info btn-sm"><a href="emaploye_details.php?empid=<?php echo $empid; ?>"><i class="far fa-eye"></i></a></button>
                <button type="button" class="btn btn-danger btn-sm"><a href="employee.php?empid=<?php echo $empid; ?>"><i class="far fa-trash-alt"></i></a></button>
              </td>
          </tr>
        <?php } ?>
      </tbody>
  </table>
</div>

<?php include("includes/footer.php");?>
<?php
    $conn=mysqli_connect("localhost","root","","hoteldb");
    if (isset($_GET['empid'])) {
      // code...
      $delete=$_GET['empid'];

      $query= "DELETE  FROM `employees` WHERE empid ='$delete'";
      $result=mysqli_query($conn,$query);
      if($result){
          $_SESSION['status'] = "Employee delete Successfully";
          $_SESSION['status_code']='success';
          echo "<script> window.open('employee.php','_self')</script>";
       }
    }
 ?>
