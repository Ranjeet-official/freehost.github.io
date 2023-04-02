<?php 
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  include 'config/db.php';
	  $name = $_POST['name'];
	  $password = $_POST['password'];

      $sql = "SELECT * FROM `admin_panel` WHERE name = '$name' And password= '$password'";
      $result = mysqli_query($conn,$sql);
      $numrowscount = mysqli_num_rows($result);

      if ($numrowscount == 1) {
          $login = true;
          session_start();
          $_SESSION['logiden'] = true;
          $_SESSION['name'] = $name;
          header("location: registration.php");
      }
	  	else{
	  		$showError = "Your Have Not Account";
	  	}
   
   }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<?php 
if ($login) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Sussecc</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
  if ($showError) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '. $showError .'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>
  <div class="container">
    <div class="row">
     <div class="card col-5 my-5 bg-success">
      <h3 align="center"><b>Login</b></h3>
      <form action="" method="post">
  <div class="mb-3 form-group col-12">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  <div class="mb-3 form-group col-12">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-danger ">Submit</button>
</form>
     </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>