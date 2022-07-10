<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Blood Management</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Blood Management</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                            <form class="form-inline mr-auto mb-4" action="search.php" method="post">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="search" name="search">
                                <button class="btn btn-indigo btn-rounded btn-sm my-0 waves-effect waves-light" type="submit">Search</button>
                            </form>
                            </div>
                        </li>


                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">User </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>

                                <a class="dropdown-item" href="index.html"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">Dashboard</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="donate.php">Donate</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="request.php">Request</a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="reg.html">New Donor</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Log Out</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Blood Bank Management System </h2>


                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="A+ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>

                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">A+ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="O+ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">O+ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="O-ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">O-ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="A-ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">A-ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="AB+ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">AB+ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="B+ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">B+ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="B-ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">B-ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 style="float: left" class="text-muted">Balance</h5><h4 style="text-align: right">
                                        <?php
                                            $conn = new mysqli('localhost','root','','dbms');
                                            $sql='select Stock from stock where bloodtype="AB-ve"';
                                            $result=mysqli_query($conn,$sql);
                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                            foreach($rows as $row)
                                            echo $row['Stock']." units";
                                            mysqli_close($conn);
                                            ?></h4>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">AB-ve</h1>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        
                                                            
                                                            
                        <div class="row">
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->

                           
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Donor List</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                        <?php
// Database connection
                                                                $conn = new mysqli('localhost','root','','dbms');
                                                                if($conn->connect_error){
                                                                    echo "$conn->connect_error";
                                                                    die("Connection Failed : ". $conn->connect_error);
                                                                } else {
                                                                    
                                                                    $sql='select * from donors';
                                                            $result=mysqli_query($conn,$sql);
                                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                                            
                                                            echo '<table class="table"><thead class="bg-light">
                                                
                                                    <tr class="border-0">
                                                        <th class="border-0">Id</th>
                                                        <th class="border-0">Name</th>
                                                        <th class="border-0">Gender</th>
                                                        <th class="border-0">Age</th>
                                                        <th class="border-0">Address</th>
                                                        <th class="border-0">Contactno</th>
                                                        <th class="border-0">Bloodgroup</th>

                                                    </tr>
                                                </thead><tbody>';
                                                            
                                                            foreach($rows as $row)
                                                            {
                                                            echo "<tr>";
                                                            echo "<td>" . $row['id'] . "</td>";
                                                            echo "<td>" . $row['Name'] . "</td>";
                                                            echo "<td>" . $row['Gender'] . "</td>";
                                                            echo "<td>" . $row['Age'] . "</td>";
                                                            echo "<td>" . $row['Address'] . "</td>";
                                                            echo "<td>" . $row['Contactno'] . "</td>";
                                                            echo "<td>" . $row['Bloodgroup'] . "</td>";
                                                            
                                                            echo "</tr>";
                                                            }
                                                            echo "</tbody></table>";
                                                            mysqli_close($conn);}
                                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->





                            <!-- ============================================================== -->
                            <!-- end sales traffice country source  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>