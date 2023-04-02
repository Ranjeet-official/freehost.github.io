<?php
session_start();
if (!isset($_SESSION['logiden']) && $_SESSION['logiden']!=true) {
  header("location: logout.php");
  exit();  
}

include 'inculde/header.php';
include 'inculde/navbar.php';
include 'inculde/sidebar.php';
include 'config/db.php';
$sql = "SELECT * FROM `admin_panel`";
$result = mysqli_query($conn,$sql);



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="post">      
        <div class="modal-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Phone Number</label>
          <input type="text" name="phone" placeholder="Enter Your Number" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Email id</label>
          <input type="email" name="email" placeholder="Enter Your Email Id" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Password</label>
          <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="adduser" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

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
    <!-- /.content-header -->

    <section>

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registration User</h3>
                <a href="#" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">Add User</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Numbar</th>
                    <th colspan="2" class="text-center">Action</th>
                  </tr>
                  </thead>
                 
                    <?php
                    $i = 1;
                   while ($row = mysqli_fetch_array($result)) {
                   
                  ?>
                  <tbody>
                  <tr>
                   <td><?php echo $i ;?></td>
                   <td><?php echo $row['name'];?></td>
                   <td><?php echo $row['email'];?></td>
                   <td><?php echo $row['phone'];?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="registration_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                  </tr>
                </tbody>
         <?php
                 $i++;    
                   }
         ?>          
              </table>
            </div>
          </div>
        </div>
     </div>


<?php 
include 'inculde/footer.php';


?>