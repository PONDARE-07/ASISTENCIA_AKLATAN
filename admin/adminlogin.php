<?php
session_start();
session_destroy();

	include 'conFunc.php';
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin Login</title>
    <link rel="stylesheet" href="css/start.css"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body style = "background-color:#d3d3d3;">
	  <?php include('includes/header.php');?>

   <div class="content-wrapper">
        <div class="container">
            <div class="row">
            	<div class="col-md-12">
                    <h4 class="page-head-line">ADMIN LOG IN AREA</h4>
                </div>
                    <div class="row">
                    	<div class="col-md-3"></div>
                    	<div class="col-md-6">
                    		<div class="panel panel-default">
                    			<div class="panel-heading">
                          Enter Information to Login
                        </div>

                        <font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>

                        <div class="panel-body">

            <form  method="post">
				 <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Username" required />
  </div>
				<div class="form-group">
    <label for="password">Password  </label>
    <input type="password" class="form-control"  name="password" placeholder="Enter password" required />
  </div>   

				<br>
				 <input type="submit" name="submit" class="btn btn-danger" value="Login">
				 <div class="signup_link">
				    Forgot Password?<a href="newadmin.php">Sign in</a>
				</div>
			</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
	<!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body >
</html>

<?php
	session_start();
	
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT username, password FROM librarian where username = '$username' and password = '$password'";

  		if ($result = mysqli_query($link,$query))
  		{
  
  			$rowcount = mysqli_num_rows($result);
  			if($rowcount == 1){
  				$_SESSION['username'] = $username;
  				header("location:admin_page.php");
  			}
  			else{
  				echo "<script>alert('Incorrect Information');</script>";
  				header("location:adminlogin.php");
  			}
  
  		}

	}
?>