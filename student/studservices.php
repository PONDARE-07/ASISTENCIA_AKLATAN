<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Select Service</title>
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
                    <h4 class="page-head-line">SERVICES</h4>
                </div>
                  <div class="col-md-2"></div>
                    <div class="col-md-7">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                        Select Service to Avail
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
<form action="submit.php" method="get">
    <!-- Choices -->
    <br>
 <div class="form-group">
  <input type="radio" id="html" name="fav_language" value="1">
  <label for="html">Internet</label><br>
  <input type="radio" id="css" name="fav_language" value="2">
  <label for="css">Circulation</label><br>
  <input type="radio" id="javascript" name="fav_language" value="3">
  <label for="javascript">Referral</label><br>
       <input type="radio" id="javascript" name="fav_language" value="4">
  <label for="javascript">Certification</label>
  <br> <!-- Submit -->
   <input type="submit" value="Submit" class="btn btn-danger" class="nav navbar-right">
</div>
</form>
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
</body>
</html>