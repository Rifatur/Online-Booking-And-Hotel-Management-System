<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="login-container">
      <div class="loginform">
        <div class="formheader">
        </div>
        <div class="login-box">
          <form class="" action="login.php" method="post">
            <div class="input-filter">
              <input type="text" name="email" value=""required>
              <label>Your Email </label>
              <span></span>
            </div>
            <div class="input-filter">
              <input type="text" name="pass" value="" required>
              <label>PassWord</label>
              <span></span>
            </div>
            <div class="input-filter">
              <input type="submit" name="login" value="Log In"required="required">

            </div>
            </form>
        </div>
      </div>

    </div>

  </body>
</html>
<?php
          $conn=mysqli_connect("localhost","root","","hoteldb");
          if (isset($_POST['login'])) {
            // code...
                $Email=$_POST['email'];
                $pass=$_POST['pass'];
                $query="SELECT * FROM `employees` WHERE email='$Email'AND mep_password='$pass'";
                $runQuery=mysqli_query($conn,$query);
                $rowQuery= mysqli_num_rows($runQuery);
                if ($rowQuery==1) {
                  // code...
                  $_SESSION['email']=$Email;
                  header('location:index.php');
                }else{
                  echo "";
                  header('location:login.php');
                }


          }


 ?>
