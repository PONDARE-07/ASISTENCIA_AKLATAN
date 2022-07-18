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
                    <h4 class="page-head-line">FACULTY INFORMATION</h4>
                </div>

                <div id="wrapper">
                    <form method="post" action="inserted.php" enctype="multipart/form-data">
                    <input type="file" name="file"/>
                    <input type="submit" name="submit_file" value="Submit"/>
                    </form>
                </div>

            <div class = "col-lg-12 well" style = "margin-top:10px;">
                <div id = "book_table">
                        <table id = "table" class = "table table-bordered">
                            <thead class = "alert-success">
                                <tr>
                                    <th>FACULTY-ID</th>
                                    <th>FIRSTNAME</th>
                                    <th>LASTNAME</th>
                                    <th>DEPARTMENT</th>
                                    <th>PROGRAM</th>
                                    <th>SECTION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                        </table>
                    </div>  
            </div>
</div>
</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>