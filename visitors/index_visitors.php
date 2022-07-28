<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title></title>
   <link rel="stylesheet" href="css/start.css"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body style = "background-color:#d3d3d3;">
    <?php include('includes/header.php');?>

 <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Enter Information</h4>
                </div>
	<div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          Visitors Registration
                        </div>

<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


<div class="panel-body">
    <form name="dept" method="post" action="visitsert.php">
        <div class="form-group">
        <label for="">Visitors Name  </label>
          <input type="text" class="form-control" id="visits" name="visits" autocomplete="off" placeholder="Visitors Name" required />
        </div>

        <div class="form-group">
        <label for="">Purpose of Coming</label>
             <select name="purpose" class="form-control">
             <option value="Visitation">
             Visitation
            </option>
            <option value="Others">
            Others
            </option>
           </select>
        </div>

 <button type="submit" name="submit" id="submit" class="btn btn-danger">Sumbit</button>
    </form>
</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php include('includes/footer.php');?>
     <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
     <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
<script>
</script>
</body>
</html>
