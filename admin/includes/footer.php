</div>
            <div  class="profileboard">
                <div class="profile-header">
                        <a href=""> <i class="far fa-bell"></i></a>
                        <div class="inner-head">
                          <a href=""> <i class="fas fa-cogs"></i></a>
                          <a href="logout.php"> <i class="fas fa-sign-in-alt"></i></a>
                        </div>

                </div><!-- End Here -->
                <div class="profile-area">
                    <div class="profile-pic"><img src="img/pro.png" alt=""></div>
                    <h4>Rifatur Rahman</h4>
                    <h6>CEO & Founder</h6>
                </div><!-- End Here -->
                <div class="organiz-task">
                        <div class="task-box">
                          <p>click here for your attendance </p>

                          <?php
                          if (!isset($_SESSION['email'])) {
                            header('location:login.php');
                          }
                          else{?><?php
                            $email=$_SESSION['email'];
                            $conn=mysqli_connect("localhost","root","","hoteldb");
                            $Query="SELECT * FROM `employees` WHERE email='$email'";
                              $run_query=mysqli_query($conn,$Query);
                              while ($row=mysqli_fetch_assoc($run_query)) {
                                $eid=$row['empid'];
                              ?>
                              <?php
                                date_default_timezone_set('asia/dhaka');
                                $date=date("Y/m/d");

                                $conn=mysqli_connect("localhost","root","","hoteldb");
                                $iquery="SELECT * FROM attendance WHERE empid='$eid' and atDate='$date'";
                                $result=mysqli_query($conn,$iquery);
                                $count= mysqli_num_rows($result);
                               ?>

                               <?php if($count==1){?>
                                 <a href=""><?php echo " Given" ?> </a>
                               <?php }else {?>
                                    <a href="attendance.php?eid=<?php echo $eid; ?>"><?php echo "attend"; ?> </a>
                                <?php  }?>
                            <?php } ?>
                          <?php } ?>


                        </div>
                        <div class="report-section">
                           <div class="report-items">
                             <img src="img/set.png" alt="">
                             <span  class="titleTag"><p>Available</p></span>
                             <span  class="Tagnumber"><p>30</p></span>
                           </div><!-- End Here -->
                           <div class="report-items">
                             <img src="img/check-out.png" alt="">
                             <span  class="titleTag"><p>guest</p></span>
                             <span  class="Tagnumber"><p>
                               <?php
                                     $conn=mysqli_connect("localhost","root","","hoteldb");
                                       $query= "SELECT count(guestid) AS total FROM guests";
                                       $result=mysqli_query($conn,$query);
                                       $row=mysqli_fetch_array($result);
                                       $Num=$row['total'];
                                       echo $Num;
                               ?>
                               </p></span>
                           </div><!-- End Here -->
                           <div class="report-items">
                             <img src="img/check-out.png" alt="">
                             <span  class="titleTag"><p>Check-Out</p></span>
                             <span  class="Tagnumber"><p>10</p></span>
                           </div><!-- End Here -->
                           <div class="report-items">
                             <img src="img/icon2.png" alt="">
                             <span  class="titleTag"><p>Check-In</p></span>
                             <span  class="Tagnumber"><p>15</p></span>
                           </div>
                        </div>
                </div><!-- End Here -->


            </div>



            <!--Main wrapper div End Here -->
        </div>
        <!--Main Content div End Here -->
    </div><!-- Container div End Here -->
    <!-- All Script  File Here !-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <!-- All Script  File Here !-->
    <script>
      /*  let myChart=document.getElementById('myChart').getContext('2d');
        let reportChart= new Chart(myChart,{
            type:'bar',
            data:{
                labels:['Friday','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday'],
                datasets:[{
                    label:'Daily Booking  Analysis',
                    data:[
                        120,
                        100,
                        90,
                        80,
                        10,
                        608,
                        800
                    ],
                    backgroundColor:[
                        'rgba(0, 255, 255, 0.6)',
                        'rgba(255, 51, 153, 0.6)',
                        'rgba(255, 255, 153, 0.6)',
                        'rgba(102, 0, 255, 0.6)',
                        'rgba(204, 0, 102, 0.6)',
                        'rgba(204, 0, 202, 0.6)',
                        'rgba(102, 255, 102, 0.6)',
                        'rgba(255, 153, 51, 0.6)'
                    ],
                    /*borderWidth:1,
                    borderColor:'#666600'
                }]
            },
            option:{}
        });
        */
var data = {
  labels:['Friday','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday'],
  datasets: [{
  label:'Daily Booking  Analysis',
    backgroundColor:[
        'rgba(0, 255, 255, 0.6)',
        'rgba(255, 51, 153, 0.6)',
        'rgba(255, 255, 153, 0.6)',
        'rgba(102, 0, 255, 0.6)',
        'rgba(204, 0, 102, 0.6)',
        'rgba(204, 0, 202, 0.6)',
        'rgba(102, 255, 102, 0.6)',
        'rgba(255, 153, 51, 0.6)'
    ],
    borderWidth: 1,
    data:[
        120,
        100,
        90,
        80,
        10,
        608,
        800
    ],
  }]
};

var options = {
  maintainAspectRatio: false,
  scales: {
    yAxes: [{
      stacked: true,
      gridLines: {
        display: true,
        color: "rgba(25,99,132,0.2)"
      }
    }],
    xAxes: [{
      gridLines: {
        display: false
      }
    }]
  }
};


Chart.Bar('chart', {
  type: 'pie',
  options: options,
  data: data

});


</script>
    <!--Data Set -->
    <script>
            $(document).ready( function () {
            $('#example').DataTable({
                "order": [[ 3, "desc" ]]
            });
        } );

    </script>
  <!--Load content Set -->

    <?php
        if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    ?>
        <script>
            swal({
                    title: "<?php echo $_SESSION['status']; ?>",
                    icon: "<?php echo $_SESSION['status_code']; ?>",
                    button: "Done",
                });
        </script>
    <?php
            unset($_SESSION['status']);
        }
    ?>
</body>
</html>
