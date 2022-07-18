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
</head>

<body style = "background-color:#d3d3d3;">
    <?php include('includes/header.php');?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Select your Identity </h4>
                </div>

<form action="third.php" method="get">
    <!-- Choices -->
    <br>
    Digital Service    <input type="checkbox" name="color[]" id="color" value="Blue">
    <br>
    Internet Service    <input type="checkbox" name="color[]" id="color" value="Cyan">
    <br>
    Referral Service <input type="checkbox" name="color[]" id="color" value="Magenta">
    <br>
    Reference Service  <input type="checkbox" name="color[]" id="color" value="Yellow">
    <br>
    Circulation Service     <input type="checkbox" name="color[]" id="color" value="Red">
    <br>
    Certification Service       <input type="checkbox" name="color[]" id="color" value="Green">
    <br>
    <!-- Submit -->
    <input type="submit" value="submit">
</form>

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