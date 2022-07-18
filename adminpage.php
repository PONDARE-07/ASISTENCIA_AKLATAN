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

    <title>Admin Page</title>
    <link rel="stylesheet" href="css/start.css"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    

		<title>Library System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
	</head>

<body style = "background-color:#d3d3d3;">
	 <?php include('includes/header.php');?>
	 <br>
	  <div class="col-md-12">
                    <h4 class="page-head-line"> </h4>
                </div>
       <div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:10px;">
            <div class = "container-fluid">
				<div class = "navbar-header">
					<h3 class = "navbar-text navbar-right"><img src = "images/user.png" width = "50px" height = "50px"/><br>Welcome Administrator</h3>
				</div>
			</div>

            <hr style = "border:1px dotted #F0677C;"/>
		    <ul id = "menu" class = "nav menu">

                 <li><a style = "font-size:18px; border-bottom:1px solid #F0677C;" href = "adminpage.php"><i class = "glyphicon glyphicon-home"></i> HOME</a>

                 </li>

                 <li><a style = "font-size:18px; border-bottom:1px solid #F0677C;" href = ""><i class = "glyphicon glyphicon-tasks"></i> RECORDS</a>
						<ul style = "list-style-type:none;">
							<li><a href = "admin_student.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Students</a></li>
							
							<li><a href = "admin_faculty.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Faculty</a></li>

							<li><a href = "admin_visitors.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Visitors</a></li>

							<li><a href = "admin_staff.php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Staff</a></li>

						</ul>
			</li>

			     <li><a style = "font-size:18px; border-bottom:1px solid #F0677C;" href = ""><i class="fas fa-chart-bar"></i> DASHBOARD</a>
						<ul style = "list-style-type:none;">
							<li><a href = ".php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Availed Services</a></li>
							
							<li><a href = ".php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Monthly Visit</a></li>

							<li><a href = ".php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> </a></li>

							<li><a href = ".php" style = "font-size:15px;"><i class = "glyphicon glyphicon-user"></i> Staff</a></li>

						</ul>
			</li>

			    <li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> SETTINGS</a>
						<ul style = "list-style-type:none;">
							<li><a style = "font-size:15px;" href = "index.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a></li>
							<li><a style = "font-size:15px;" href = "change_pass.php"><i class = "glyphicon glyphicon-log-out"></i> Change Password</a></li>
						</ul>
			
			    
			    
        </ul>
        </div>


<div class = "col-lg-1"></div>

<div class="col-sm-9" style="background-color:lavenderblush;"> 
              <div class=" col-lg-9 well col-md-6 col-sm-8 col-xs-10 col-md-offset-2" style = "margin-top:10px;" >
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="images/frontimage.jpg" alt="" />
                           
                        </div>
                        <div class="item">
                            <img src="images/frontimage.jpg" alt="" />
                          
                        </div>
                        <div class="item">
                            <img src="images/frontimage.jpg" alt="" />
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>
            
             </div>
              </div>

<br>
<br>
</div>
<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
	<script src = "js/sidebar.js"></script>


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