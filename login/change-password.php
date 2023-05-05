<?php
// Start the session
session_start();
error_reporting(0);

// Check if the user is logged in
if (!isset($_SESSION["user_id"])) {
  // Redirect the user to the login page
  header("Location: index.php");
  exit();
}

// Connect to the database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "osghsdb";

$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the user's current profile information
$user_id = $_SESSION["user_id"];


// Process the form data
// Get the form data
// Get the form data
$newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
$confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
$currentpassword = mysqli_real_escape_string($conn, $_POST['currentpassword']);

// Hash the new password
$newpassword = md5($newpassword);
$confirmPassword = md5($confirmPassword);

$user_id = $_SESSION["user_id"];

// Check if the current password is correct
$sql = "SELECT password FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $currentpassword_db = $row['password'];

  if ($currentpassword_db == md5($currentpassword)) {
    // Update the password
    $sql = "UPDATE users SET password = '$newpassword', cpassword = '$confirmPassword' WHERE id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
      // Redirect the user to the profile page
      echo "<script>alert('Your Changes Have Been Made Successfully. PLease Log in Again');</script>";
   
      
    } else {
      // Handle the error
      echo "Error updating record: " . $conn->error;
    }
  } else {
    // Handle the error
    echo "<script>alert('The Current Password You Entered Is Incorrect.');</script>";
  }
} else {
  // Handle the error
  echo "Error updating record: " . $conn->error;
}

?>



<!DOCTYPE html>
<html>
<head>
  
  <title>Lion Security Services | Change Password</title>
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

</script>
<style>
 .content-wrapper {
    background: #ffffff !important;
}
  #footer {
    color: #37423b;
    font-size: 14px;
    background: #eef0ef;
}

#footer .footer-top {
    padding: 60px 0 30px 0;
    background: #f9faf9;
}

#footer .footer-top .footer-contact {
    margin-bottom: 30px;
}

#footer .footer-top .footer-contact h4 {
    font-size: 22px;
    margin: 0 0 30px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-weight: 700;
}

#footer .footer-top .footer-contact p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: "Raleway", sans-serif;
    color: #777777;
}

#footer .footer-top h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
}

#footer .footer-top .footer-links {
    margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

#footer .footer-top .footer-links ul i {
    padding-right: 2px;
    color: black !important;
    font-size: 18px;
    line-height: 1;
}

#footer .footer-top .footer-links ul li {
    padding: 10px 0;
    display: flex;
    align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
}

#footer .footer-top .footer-links ul a {
    color: #777777;
    transition: 0.3s;
    display: inline-block;
    line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
    text-decoration: none;
    color: #c358cb;
}

#footer .footer-newsletter {
    font-size: 15px;
}

#footer .footer-newsletter h4 {
    font-size: 16px;
    font-weight: bold;
    color: #444444;
    position: relative;
    padding-bottom: 12px;
}

#footer .footer-newsletter form {
    margin-top: 30px;
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 50px;
    text-align: left;
    border: 1px solid #e0e5e2;
}

#footer .footer-newsletter form input[type="email"] {
    border: 0;
    padding: 4px 8px;
    width: calc(100% - 100px);
}

#footer .footer-newsletter form input[type="submit"] {
    position: absolute;
    top: -1px;
    right: -1px;
    bottom: -1px;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 20px 2px 20px;
    background: #c358cb;
    color: #fff;
    transition: 0.3s;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form input[type="submit"]:hover {
    background: #8b3f91;
}

#footer .credits {
    padding-top: 5px;
    font-size: 13px;
}

#footer .credits a {
    color: #8b3f91;
    transition: 0.3s;
}

#footer .credits a:hover {
    color: #c358cb;
}

#footer .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #007bff !important;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}

#footer .social-links a:hover {
    background: #095bb1 !important;
    color: #fff;
    text-decoration: none;
}
</style>
</head>
<body >
<div class="wrapper">
  <?php include_once('../customer/header.php');?>

 <br><br><br><br><br>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form name="changepassword" method="post" onsubmit="return checkpass();" action="">
                                
                            <div class="card-body card-block">
 
                                <div class="form-group"><label for="company" class=" form-control-label">Current Password</label><input type="password" name="currentpassword" id="currentpassword" class="form-control" required=""></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">New Password</label><input type="password" name="newpassword"  class="form-control" required=""></div>
                                        <div class="form-group"><label for="street" class=" form-control-label">Confirm Password</label><input type="password" name="confirmpassword" id="confirmpassword" value=""  class="form-control"></div>
                                                                                                
                                                    </div>
                                                   
                                                    <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i> Change
                                                        </button></p>
                                                     
                                                </div>
                                                </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->

    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

    <div class="col-lg-9 col-md-6 footer-contact">
        <h3>Lion Security Services</h3>
        <p>
          Ethiopia Addis Ababa,<br>
          Mekanisa,<br><br>
          <strong>Phone:</strong> +251 116 683333 , +251 930 519202<br>
          <strong>Email:</strong> www.lionsecurityservices.com<br>
        </p>
      </div>
      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="About us.php" style="color:black !important;">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact us.php" style="color:black !important;">Contact us</a></li>
        </ul>
      </div>
    
<div class="container d-md-flex py-4">

  <div class="mr-md-auto text-center text-md-left">
    <div class="copyright">
      &copy; <strong><span>Lion Security Services PLC</span></strong> - <?php echo date('Y');?> - Developed By REHA TECH
    </div>
    <div class="credits">
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i  style="color:#fff;" class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i style="color:#fff;" class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i style="color:#fff;" class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i style="color:#fff;" class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i style="color:#fff;" class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer>
<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../adminplugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../admindist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php  ?>