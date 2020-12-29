<?php
  SESSION_START();
    if (!isset($_SESSION['email'])) {
      header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
    <link rel="stylesheet" href="./css/index.css">

    <title>Hotel Dashboard </title>

</head>
<body>
    <div class="main-container">

        <div class="Navigation-col">
            <div class="sectionLogo">
              <h4>Trios RMS</h4>
            </div>
            <div class="nav-section">
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fab fa-buromobelexperte"></i></div>
                    <div class="nav-text"><a href="./index.php"> Dashboard </a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-hotel"></i></div>
                    <div class="nav-text"><a href="./reservation.php"> Reservation </a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-person-booth"></i></div>
                    <div class="nav-text"><a href="./rooms.php"> Rooms </a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-id-card-alt"></i></div>
                    <div class="nav-text"><a href="./employee.php"> Employees</a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-tasks"></i></i></div>
                    <div class="nav-text"><a href="./task.php"> Tasks</a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-users"></i></div>
                    <div class="nav-text"><a href="./user.php"> User</a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-file-invoice"></i></div>
                    <div class="nav-text"><a href="./invoice.php">Invoice</a> </div>
                </div>

                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-swatchbook"></i></div>
                    <div class="nav-text"><a href="./booking.php">Booking</a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-pager"></i></i></div>
                    <div class="nav-text"><a href="">Pages</a> </div>
                </div>
                <div class="nav-group" id="navGroup">
                    <div class="nav-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="nav-text"><a href="">Analytics</a> </div>
                </div>
            </div><!--NAV SECTION-->
            <div class="bottom-img">
              <img src="./img/hotel.png" alt="">
            </div>
        </div>
        <!-- Navigation-side div End Here -->
        <div id="content">
            <div class="content-board">
                <div class="content-header">
                    <h5 id="clock"></h5>
                    <script type="text/javascript">
                    function currentTime() {
                        var date = new Date(); /* creating object of Date class */
                        var hour = date.getHours();
                        var min = date.getMinutes();
                        var sec = date.getSeconds();
                        var midday = "AM";
                        midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
                        hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); /* assigning hour in 12-hour format */
                        hour = updateTime(hour);
                        min = updateTime(min);
                        sec = updateTime(sec);
                        document.getElementById("clock").innerText = hour + " : " + min + " : " + sec + " " + midday; /* adding time to the div */
                          var t = setTimeout(currentTime, 1000); /* setting timer */
                        }

                        function updateTime(k) { /* appending 0 before time elements if less than 10 */
                        if (k < 10) {
                          return "0" + k;
                        }
                        else {
                          return k;
                        }
                        }

                        currentTime();
                    </script>
                    <h5><?php
                    date_default_timezone_set('asia/dhaka');
                    echo date("l");?>
                    ,
                    <?php
                    echo date("jS \of F Y");
                    ?></h5>
                </div><!-- End Here -->
