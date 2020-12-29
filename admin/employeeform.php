


<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/employee.css">

<div class="employeeBox">
    <img src="img/employees.png" alt="">
    <span class="userName">Employees</span>
    <span class="quotes">
      <a href="employee.php">back to Employee List</a></span>
</div><!-- End Here -->
<div class="employeeform-container">
<div class="container-header"></div><!--Header-->
<div class="employeeform"><!--Form Start-->
  <div class="form-group">
    <li> <i class="fab fa-accusoft"></i>&nbsp Employee Details</li>
  </div>
<form class="" action="employeeform.php" method="post" enctype="multipart/form-data">


  <div class="form-group">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user-tie"></i>&nbsp Full Name</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="fullname" required>
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Nick Name</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="nickname">
          </div>
        </div>
      </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Father's Name</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="fathername" required>
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Date Of Birth</span>
            </div>
            <input type="date" class="form-control" id="email" placeholder="" name="dob">
          </div>
        </div>
      </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Email</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="email" required>
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Gender</span>
            </div>
              <select name="gender" class="custom-select">
                <option selected> Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

              </select>
          </div>
        </div>
      </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Nationality</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="Nationality" required>
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">NID</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="NID">
          </div>
        </div>
      </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Phone</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="phone" required>
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Home Phone</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="hphone">
          </div>
        </div>
      </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Merital Status</span>
            </div>
            <select name="Merital" class="custom-select">
              <option selected> Select </option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>

            </select>
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Language  known</span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="lknown">
          </div>
        </div>
      </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Local Address</span>
      </div>
      <input type="text" class="form-control" id="email" placeholder="" name="laddress">
    </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">Permanent Address</span>
      </div>
      <input type="text" class="form-control" id="email" placeholder="" name="paddress">
    </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
        <li> <i class="fab fa-accusoft"></i>&nbsp Company Details</li>
  </div>
  <div class="form-group">
      <div class="row">
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Employee ID </span>
            </div>
            <input type="text" class="form-control" id="email" placeholder="" name="employeeid" required>
          </div>
        </div>
        <div class="col">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Employee Type</span>
            </div>
              <select name="etype" class="custom-select">
                <option selected> Select</option>
                <option value="1">Admin</option>
                <option value="2">Accountant</option>
                <option value="3">HR</option>
                <option value="4">Cleaner</option>
              </select>
          </div>
        </div>
      </div>
  </div><!-- form-group end Start-->
  <div class="form-group">
        <div class="row">
          <div class="col">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Joining Date </span>
              </div>
              <input type="date" class="form-control" id="email" placeholder="" name="joingdate" required>
            </div>
          </div>
          <div class="col">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Employee Status</span>
              </div>
                <select name="estatus" class="custom-select">
                  <option selected> Select</option>
                  <option value="1">Active</option>
                  <option value="0">Deactive</option>
                </select>
            </div>
          </div>
        </div>
    </div><!-- form-group end Start-->
    <div class="form-group">
          <div class="row">
            <div class="col">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Basic Salary </span>
                </div>
                <input type="text" class="form-control" id="email" placeholder="" name="bsalary" required>
              </div>
            </div>
            <div class="col">
            </div>
          </div>
      </div><!-- form-group end Start-->
      <div class="form-group">
          <li> <i class="fab fa-accusoft"></i>&nbsp Bank Accounts Details</li>
      </div>
      <div class="form-group">
          <div class="row">
            <div class="col">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Holder Name</span>
                </div>
                <input type="text" class="form-control" id="email" placeholder="" name="bholdername" required>
              </div>
            </div>
            <div class="col">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Account  Number</span>
                </div>
                <input type="text" class="form-control" id="email" placeholder="" name="acnumber">
              </div>
            </div>
          </div>
      </div><!-- form-group end Start-->
      <div class="form-group">
          <div class="row">
            <div class="col">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-university"></i>&nbsp Bank Name</span>
                </div>
                <input type="text" class="form-control" id="email" placeholder="" name="bankname" required>
              </div>
            </div>
            <div class="col">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Branch</span>
                </div>
                <input type="text" class="form-control" id="email" placeholder="" name="BBranch">
              </div>
            </div>
          </div>
      </div><!-- form-group end Start-->
      <div class="form-group">
        <button type="submit" name="save" class="btn  btn-primary btn-block">save</button>
      </div><!-- form-group end Start-->
</form>
</div><!--employeeform  end Start-->
<div class="container-header"></div><!--Header-->
</div><!--employeeform container  end Start-->


<?php include("includes/footer.php");?>

<?php
// Turn off all error reporting
         error_reporting(0);
           $conn=mysqli_connect("localhost","root","","hoteldb");
         if(isset($_POST['save'])){

           $fullname=$_POST["fullname"];
           $nickname=$_POST["nickname"];
           $fathername=$_POST["fathername"];
           $dob=$_POST["dob"];
           $email=$_POST["email"];
           $gender=$_POST["gender"];
           $Nationality=$_POST["Nationality"];
           $NID=$_POST["NID"];
           $phone=$_POST["phone"];
           $hphone=$_POST["hphone"];
           $Merital=$_POST["Merital"];
           $lknown=$_POST["lknown"];
           $laddress=$_POST["laddress"];
           $paddress=$_POST["paddress"];
           $employeeid=$_POST["employeeid"];
           $etype=$_POST["etype"];
           $joingdate=$_POST["joingdate"];
           $estatus=$_POST["estatus"];
           $bsalary=$_POST["bsalary"];
           $bholdername=$_POST["bholdername"];
           $acnumber=$_POST["acnumber"];
           $bankname=$_POST["bankname"];
           $BBranch=$_POST["BBranch"];

           $insertQuery="INSERT INTO `employees` (`emp_fname`, `emp_nickName`, `emp_fathername`, `emp_DOB`, `email`, `mep_password`, `emp_gender`,
              `nationality`, `NID`, `phone`, `hphone`, `Mststus`, `lknown`, `laddress`, `paddress`, `employeeid`, `emptype`,
            `joningdate`, `empstatus`, `bsalary`, `bankholdername`, `bankAC`, `bankname`, `bankbranch`, `addedby`, `createdate`, `lastupdate`)
             VALUES ('$fullname', '$nickname', '$fathername', '$dob', '$email', 'f', '$gender', '$Nationality','$NID', '$phone', '$hphone', '$Merital',
               '$lknown', '$laddress', '$paddress', '$employeeid', '$etype', '$joingdate', '$estatus', '$bsalary', '$bholdername', '$acnumber', '$bankname', '$BBranch', '1',CURDATE(),CURDATE())";
           $runQuery=mysqli_query($conn,$insertQuery);
         }
         if($runQuery){
             $_SESSION['status'] = "Employee Add Successfully";
             $_SESSION['status_code']='success';
             echo "<script> window.open('employee.php','_self')</script>";
          }
          else{
           $_SESSION['status'] = "Employee Not Added";
           $_SESSION['status_code']='warning';
          }

         //DELETE FROM `room` WHERE `room`.`rid` = 2
?>
