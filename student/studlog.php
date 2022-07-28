<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Student Login</title>
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
                        <div class="panel panel-default">
                            
    <div class="panel-heading">
                        STUDENT LOG IN
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>

<div class="panel-body">
            <form action="studentsert.php" method="post">
                <div class="form-group">
                 <label for="">Student's SR-CODE</label>
                 <input type="text" class="form-control" name="sr_code" placeholder="Enter Sr-Code" required />
                </div>
                 <input type="submit" name="submit" value="Login">
            </form>

</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
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