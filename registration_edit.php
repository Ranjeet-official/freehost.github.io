<?php
include 'inculde/header.php';
include 'inculde/navbar.php';
include 'inculde/sidebar.php';
include 'config/db.php';
?>
<?php
$id = $_GET['id'];
$sq = "SELECT * FROM `admin_panel` WHERE id = '$id'";
$result = mysqli_query($conn,$sq);
$row = mysqli_fetch_array($result);

?>
<div class="content-wrapper">
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<hr>
   
      <form action="update.php" method="post">      
        <div class="modal-body">
          <div class="form-group">
          <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
          <label for="name">Phone Number</label>
          <input type="text" name="phone" placeholder="Enter Your Number" class="form-control" value="<?php echo $row['phone']; ?>">
        </div>
        <div class="form-group">
          <label for="name">Email id</label>
          <input type="email" name="email" placeholder="Enter Your Email Id" class="form-control" value="<?php echo $row['email']; ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="adduser" class="btn btn-primary">Upadte</button>
      </div>
    </form>
    </div>
  </div>
</div>


    

<?php 
include 'inculde/footer.php';


?>