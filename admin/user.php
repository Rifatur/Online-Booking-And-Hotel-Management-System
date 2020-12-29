<?php include("includes/default.php");?>
<link rel="stylesheet" href="./css/employee.css">
<link rel="stylesheet" href="css/invoice.css">

<div class="taskBox">
    <img src="img/task.png" alt="">
    <span class="userName">User</span>
</div><!-- End Here R8|xCl7=F4$VmfLY -->
<div class="overview-container">
    <div class="ovewerview-header"><h4>User Overview</h4></div>
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
 <div class="invoices-list">
   <div class="listheader">

   </div>
   <div class="list-content">
     <table id="example" class="table table-striped table-bordered" style="width:100%">
           <thead>
             <tr>
               <th>Invoice Code</th>
               <th>Guest name</th>
               <th>Guest Phone</th>
               <th>Status</th>
               <th>Activity</th>
             </tr>
           </thead>
           <tbody>
           <?php
               $conn=mysqli_connect("localhost","root","","hoteldb");
               $query="SELECT * FROM invoice";
               $run=mysqli_query($conn,$query);
               while ($row=mysqli_fetch_assoc($run)) {
                 // code...
                 $invoiceid =$row["invoiceid"];
                 $invoicecode=$row["invoicecode"];
                 $resid=$row["resid"];
                 $status=$row["status"];
           ?>

             <tr>
               <td> <?php echo $invoicecode; ?> </td>
               <td><?php
               $conn=mysqli_connect("localhost","root","","hoteldb");
               $Query="SELECT * FROM `guests` WHERE resid='$resid'";
                 $run_query=mysqli_query($conn,$Query);
                 while ($row=mysqli_fetch_assoc($run_query)) {
                   $name=$row['name'];
                   $phoneNo=$row['phoneNo'];
                 ?>

                 <?php echo $name;?>

               <?php } ?></td>
               <td><?php echo $phoneNo; ?></td>
               <td><?php
                 if($status==1){
                   echo"Pannding";
                 }
                ?></td>
               <td>
                 <a href="invoiceform.php?resid=<?php echo $resid; ?>"><i class="far fa-eye"></i></a>
                 <a href="invoiceform.php?resid=<?php echo $resid; ?>"><i class="far fa-edit"></i></a>
                 <a href="invoiceform.php?resid=<?php echo $resid ;?>"><i class="fas fa-trash"></i></a>
               </td>
             </tr>
             <?php } ?>
           </tbody>

         </table>
   </div>

 </div>


<?php include("includes/footer.php");?>
