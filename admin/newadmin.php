<?php
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
                  <div class="col-md-3"></div>
                    <div class="col-md-5">

<div class="container">
    <div class="title">Create New Account</div>
    <div class="content">
	
      <form method="post" action = "adminsert.php"> 
			<div class="txt_registration">
					<i></i>
					<input type="text" name="username" required>
					<span></span>
					<label >Username</label>
					
			</div>
			
			<div class="txt_registration">
					<input type="password" name="password" required>
					<span></span>
					<label> Password</label>
			</div>
		
          <input type="submit" name="submit" value = "Submit">
		  
      </form>
      <br>
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
</body>
</html>