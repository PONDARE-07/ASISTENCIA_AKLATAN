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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body style = "background-color:#d3d3d3;">
    <?php include('includes/header.php');?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">VISITORS INFORMATION</h4>
                </div>


            <div class = "col-lg-12 well" style = "margin-top:10px;">
                <div id = "book_table">
                         <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead class = "alert-success">
                                <tr>
                                    <th>#</th>
                                    <th>VISITORS NAME</th>
                                    <th>PURPOSE</th>
                                    <th>DATE ENTERED</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con = mysqli_connect('localhost','root','','librarydb');
                                $query = "SELECT * FROM `visitors`";
                                $result = mysqli_query($con, $query);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>".$row["id"]."</td>";
                                    echo "<td>".$row["visitors_name"]."</td>";
                                    echo "<td>".$row["purpose"]."</td>";
                                    echo "<td>".$row["date_entered"]."</td>";
                                    echo "<td><a class='btn btn-primary btn-sm'>Edit</a>
                                    <a class='btn btn-danger btn-sm'>Delete</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                           
                        </table>
                    </div>  
            </div>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>