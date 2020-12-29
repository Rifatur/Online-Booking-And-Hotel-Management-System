<?php include("includes/default.php");?>
<link rel="stylesheet" href="css/invoice.css">
<link rel="stylesheet" href="./css/employee.css">

<div class="invoiceContainer">
  <div class="invoiceformheader">
    <div class="SystemInfo1">
      <h3>Trios System</h3>
      <h4>Address</h4>
      <p>Uttara Dhaka Bangladesh</p>
      <p>Post Code : 24856</p>
    </div>

    <div class="SystemInfo2"></div>
    <div class="SystemInfo3">
      <h3>Invoice :
        <?php
              $conn=mysqli_connect("localhost","root","","hoteldb");
              if (isset($_GET['resid'])) {
                  $resid= $_GET['resid'];
              }
              $query="SELECT * FROM invoice WHERE resid='$resid'";
              $run=mysqli_query($conn,$query);
              $count= mysqli_num_rows($run);
              while ($row=mysqli_fetch_assoc($run)) {
                // code...
              $invoiceid=$row["invoiceid"];
              $invoicecode=$row["invoicecode"];
            }
              echo $invoicecode;
          ?>
      </h3>
      <h6>Email: rifatur.iubat@gmail.com</h6>
      <p>Phone: 01868428129</p>
      <p>web :triossystem.com</p>
    </div>
  </div>
  <div class="invoice-basic-info">
      <span class="title">Invoice</span>
      <span class="item">Date issued: 01-01-2021</span>
      <span class="item">Due Date : 05-01-2021</span>
  </div>
  <!--Getting Guest Information-->
  <?php
    $conn=mysqli_connect("localhost","root","","hoteldb");
    if (isset($_GET['resid'])) {
    $empid= $_GET['resid'];
    $query="SELECT * FROM guests WHERE resid='$empid'";
    $run=mysqli_query($conn,$query);
    $count= mysqli_num_rows($run);
    while ($row=mysqli_fetch_assoc($run)) {
      // code...
    $guestid=$row["guestid"];
    $name=$row["name"];
    $address=$row["address"];
    $phone=$row["phoneNo"];
    $email=$row["email"];
    }}?>

  <div class="guestinfo">
    <div class="info">
        <div class="title"><li> Name</li></div>
        <div class="title-value"><li><?php echo $name; ?></li></div>
    </div>
    <div class="info">
        <div class="title"><li>Email</li></div>
        <div class="title-value"><li><?php echo $email; ?></li></div>
    </div>
    <div class="info">
        <div class="title"><li>Phone No</li></div>
        <div class="title-value"><li><?php echo $phone; ?></li></div>
    </div>

    <div class="info">
        <div class="title"><li>Address</li></div>
        <div class="title-value"><li><?php echo $address; ?></li></div>
    </div>

  </div><!--end-->
  <div class="invoice-room-info">
      <span class="title">Room Name</span>
      <span class="item">Room Code</span>
      <span class="item">Room Price</span>
  </div>
  <?php
      $conn=mysqli_connect("localhost","root","","hoteldb");
      $total=0;
      if (isset($_GET['resid'])) {
        $resid= $_GET['resid'];
      }//getting Query
        $query="SELECT * FROM reservroom WHERE resid='$resid'";
        $run=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_assoc($run)) {
          // code...
        $resroomid=$row["resroomid"];
        $resid=$row["resid"];
        $rid=$row["rid"];
        $getquery="SELECT * FROM room WHERE rid='$rid'";
        $queryrun=mysqli_query($conn,$getquery);

        while ($row=mysqli_fetch_assoc($queryrun)) {
          $rid=$row['rid'];
          $roomanme=$row['title'];
          $roomcode=$row['roomcode'];
          $roomprice=$row['inirialPrice'];
          $price=array($row['inirialPrice']);
          $value=array_sum($price);
          $total +=$value;

   ?>

  <div class="invoice-item-info">
      <span class="title"><?php echo $roomanme; ?></span>
      <span class="item"><?php echo $roomcode ?></span>
      <span class="item"><?php echo  $roomprice ?></span>
  </div>
<?php } } ?>
  <div class="invoice-item-info">
      <span class="title"></span>
      <span class="item">Total </span>
      <span class="item"><?php echo $total;?></span>
  </div>
  <div class="invoice-item-info">
      <span class="title"></span>
      <span class="item">Receive Now</span>
      <span class="item">
        <?php
              $conn=mysqli_connect("localhost","root","","hoteldb");
              if (isset($_GET['resid'])) {
                  $resid= $_GET['resid'];
              }
              $query="SELECT * FROM invoice WHERE resid='$resid'";
              $run=mysqli_query($conn,$query);
              $count= mysqli_num_rows($run);
              while ($row=mysqli_fetch_assoc($run)) {
                // code...
              $invoiceid=$row["invoiceid"];
              $recived=$row["recived"];
            }
              echo $recived;
          ?>
        &nbsp&nbsp&nbsp&nbsp<button type="submit" name="save" class="btn ">Add</button>
      </span>
  </div>
  <div class="invoice-item-info">
      <span class="title"></span>
      <span class="item">Due Price</span>
      <span class="item"><?php
        error_reporting(0);
          $conn=mysqli_connect("localhost","root","","hoteldb");
          if (isset($_GET['resid'])) {
              $resid= $_GET['resid'];
          }
          $query="SELECT * FROM invoice WHERE resid='$resid'";
          $run=mysqli_query($conn,$query);
          $count= mysqli_num_rows($run);
          if ($count==1) {
          while ($row=mysqli_fetch_assoc($run)) {
            // code...
          $invoiceid=$row["invoiceid"];
          $recived=$row["recived"];
        }

          // code...
          echo $total-$recived;
        }else {
          // code...
            echo $total;
        }

       ?></span>
  </div>
</div><!--invoiceContainer End-->

<?php include("includes/footer.php");?>

<?php //Createing Invoice.. UPDATE `invoice` SET `recived` = '10000' WHERE `invoice`.`invoiceid` = 9;

$conn=mysqli_connect("localhost","root","","hoteldb");
  if (isset($_GET['resid'])) {
      $resid= $_GET['resid'];
  }
  $query="SELECT * FROM invoice WHERE resid='$resid'";
  $run=mysqli_query($conn,$query);
  $count= mysqli_num_rows($run);
  if ($count==0) {
  $invoiceNo= mt_rand(100000,140000);
  $invoicecode="IN".$invoiceNo;

  $Insert="INSERT INTO `invoice` (`invoicecode`, `total`, `recived`, `status`, `issued`, `resid`)
  VALUES ('$invoicecode', NULL, NULL, '1', CURDATE(), '$resid')";
  $runbookingQuery=mysqli_query($conn,$Insert);
}else {
  // code...
}
?>
