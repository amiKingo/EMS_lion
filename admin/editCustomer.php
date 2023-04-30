<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['osghsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$eid = $_GET['editid'];
$status = $_POST['status'];

$sql = "UPDATE users SET status=:status WHERE id=:eid";
$query = $dbh->prepare($sql);
$query->bindParam(':status', $status, PDO::PARAM_STR);
$query->bindParam(':eid', $eid, PDO::PARAM_INT); // assuming id is an integer
$query->execute();

echo '<script>alert("Customer Detail has been updated")</script>';

  }
  ?>
<!DOCTYPE html>
<html>
<head>
  
  <title>Lion Security Services | Update Security Guard</title>
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include_once('includes/header.php');?>

 
<?php include_once('includes/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Security Guard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Update Security Guard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Security Guard</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
                <?php
                   $eid=$_GET['editid'];
$sql="SELECT * from users where id=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                <div class="card-body">
                     <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlentities($row->FirstName);?>" required="true" readonly>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value="<?php echo htmlentities($row->LastName);?>" required="true" readonly>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <textarea type="text" class="form-control" id="address" name="address" placeholder="Address" required="true" readonly><?php echo htmlentities($row->email);?></textarea>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value="<?php echo htmlentities($row->companyName);?>" required="true" readonly>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">About Company Attachable File</label>
                    <textarea type="text" class="form-control" id="address" name="address" placeholder="Address" required="true" readonly><?php echo htmlentities($row->file);?></textarea>
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" id="idnum" name="idnum" required="true" value="<?php if (htmlentities($row->status) == 1){
                    echo 'Account is Approved';
                }else if(htmlentities($row->status) == 0){
                    echo 'Account is Rejected';
                }else if (htmlentities($row->status) == 2){
                    echo 'Account is on Pending';
                } ?>" readonly>
                  </div>
    <label for="status">Status:</label>
    <select name="status" id="status"  class="form-control">
        <option value="1">Approve</option>
        <option value="0">Reject</option>
        <option value="2">Pending</option>
    </select>
                
                </div>
              <?php $cnt=$cnt+1;}} ?> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
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
 
<?php include_once('includes/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
<?php }  ?>