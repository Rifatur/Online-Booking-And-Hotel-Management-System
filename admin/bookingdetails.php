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
      <h6>Email: rifatur.iubat@gmail.com</h6>
      <p>Phone: 01868428129</p>
      <p>web :triossystem.com</p>
    </div>
  </div>
  <div class="invoice-basic-info">
      <span class="title">Booking</span>
      <span class="item">Date issued: 01-01-2021</span>
      <span class="item">Due Date : 05-01-2021</span>
  </div>
  <!--Getting Guest Information-->
  <?php
    $conn=mysqli_connect("localhost","root","","hoteldb");
    if (isset($_GET['bid'])) {
    $bid= $_GET['bid'];
  }
  $query="SELECT * FROM booking WHERE bid='$bid'";
  $run=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_assoc($run)) {
    // code...
    $bid=$row["bid"];
    $bookedcode=$row["bookedcode"];
    $userid=$row["userid"];
    $rid=$row["rid"];
    $invoice=$row["invoice"];
    $statusid=$row["statusid"];
    $dueamount=$row["dueamount"];

    $query="SELECT * FROM users WHERE userid='$userid'";
    $run=mysqli_query($conn,$query);
    $count= mysqli_num_rows($run);
    while ($row=mysqli_fetch_assoc($run)) {
      // code...
    $userid=$row["userid"];
    $name=$row["username"];
    $userAddress=$row["userAddress"];
    $phoneNo=$row["phoneNo"];
    $useremail=$row["useremail"];
  }}?>

  <div class="guestinfo">
    <div class="info">
        <div class="title"><li> Name</li></div>
        <div class="title-value"><li><?php echo $name; ?></li></div>
    </div>
    <div class="info">
        <div class="title"><li>Email</li></div>
        <div class="title-value"><li><?php echo $useremail; ?></li></div>
    </div>
    <div class="info">
        <div class="title"><li>Phone No</li></div>
        <div class="title-value"><li><?php echo $phoneNo; ?></li></div>
    </div>

    <div class="info">
        <div class="title"><li>Address</li></div>
        <div class="title-value"><li><?php echo $userAddress; ?></li></div>
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
      if (isset($_GET['bid'])) {
        $bid= $_GET['bid'];
      }//getting Query
        $query="SELECT * FROM booking WHERE bid='$bid'";
        $run=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_assoc($run)) {
          // code...
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


</div><!--invoiceContainer End-->

<?php include("includes/footer.php");?>
