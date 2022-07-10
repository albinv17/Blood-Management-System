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

                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
                                <a class="nav-link" href="index2.php">Dashboard</a>

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
                                <h2 class="pageheader-title">Blood Bank Management System </h2><br>
                                <h3>Request</h3>
                               
                                <form action="requestsearch.php" method="post">
                                   
                                        <label for="exampleInputEmail1">Select your bloodgroup </label>

                                                                    <select class="form-select" name="bloodtype" aria-label="Default select example">
                                                                    <option selected>Blood group</option>
                                                                    <option value="A+ve">A+ve</option>
                                                                    <option value="O+ve">O+ve</option>
                                                                    <option value="O-ve">O-ve</option>
                                                                    <option value="A-ve">A-ve</option>
                                                                    <option value="AB+ve">AB+ve</option>
                                                                    <option value="B+ve">B+ve</option>
                                                                    <option value="B-ve">B-ve</option>
                                                                    <option value="AB-ve">AB-ve</option>
                                                                    </select><br>
                                                                    <label for="exampleInputEmail1">Enter units required </label><br>
                                                                    <input type="text" class="form-control" id="units" name="units" placeholder="units">

                                                                    
                                                                </div><button type="submit" class="btn btn-primary">Submit</button>
                                                                </form>
                                                                <br>
                                    <?php
                                    $type = $_POST['Bloodtype'];
                                    $Units = $_POST['units'];

                                                            
                                                                $conn = new mysqli('localhost','root','','dbms');
                                                                if($conn->connect_error){
                                                                    echo "$conn->connect_error";
                                                                    die("Connection Failed : ". $conn->connect_error);
                                                                } else {
                                                                    
                                                                    $sql="select Stock from stock where Bloodtype='$type' ";
                                                            $result=mysqli_query($conn,$sql);
                                                            $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                                                            $a=0;
                                                            foreach($rows as $row){
                                                                $oldunits=$row['Stock'];
                                                            }
                                                                if($oldunits<$Units)
                                                                echo "<h4>Sorry blood not available. Available balance : $oldunits units</h4>";
                                                                else{
                                                                echo "<h4><br>Blood available</h4><br>";
                                                                echo "<h4>Enter your details</h4>";
                                                                echo '<form action="requestdata.php" method="post">
                                                                <div class="form-group">
                                                                  <label for="name">Name</label>
                                                                  <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleFormControlSelect1">Blood group</label>
                                                                  <select class="form-control" id="type" name="type">
                                                                  <option selected>Blood group</option>
                                                                  <option value="A+ve">A+ve</option>
                                                                  <option value="O+ve">O+ve</option>
                                                                  <option value="O-ve">O-ve</option>
                                                                  <option value="A-ve">A-ve</option>
                                                                  <option value="AB+ve">AB+ve</option>
                                                                  <option value="B+ve">B+ve</option>
                                                                  <option value="B-ve">B-ve</option>
                                                                  <option value="AB-ve">AB-ve</option>
                                                                  </select>
                                                                </div><div class="form-group">
                                                                <label for="exampleFormControlSelect2">Units needed</label>
                                                                  <input type="text" class="form-control" placeholder="units" name="units" id="units"></div>
                                                                <div class="form-group">
                                                                  <label for="exampleFormControlSelect2">Contact number</label>
                                                                  <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="exampleFormControlTextarea1">Address</label>
                                                                  <input type="text" class="form-control" name="address" id="address" placeholder="address"></textarea>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                              </form>';
                                                            



                                                        }}
                                                                
                                                                
                                    ?>
                                    <br>
                                    


                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                                                   
                                                            
                        
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