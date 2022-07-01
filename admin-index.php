<?php
require 'dbhandler.inc.php';
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Firmceder Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .main{
            width: 8em;
            height: 5em;
            background-image: url('img/logo.png');
            background-position: center;
            background-size: contain;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="sidebar-brand-icon main">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <!-- <img src="img/logo.png" alt=""> -->
                </div>
                <div class="sidebar-brand-text ">Firm Admin</div>

            </a>

            <!-- Divider -->
            
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Users:</h6>
                        <a class="collapse-item" href="buttons.html">Add User</a>
                        <a class="collapse-item" href="cards.html">Manage Client</a>
                        <a class="collapse-item" href="cards.html">promotional Email</a>
                        <a class="collapse-item" href="cards.html">Messages</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>setting</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin Settings</h6>
                        <a class="collapse-item" href="utilities-color.html">Change Password</a>
                        <a class="collapse-item" href="utilities-border.html">Change Username</a>
                        <a class="collapse-item" href="utilities-animation.html">Login Emain</a>
                        <a class="collapse-item" href="utilities-other.html">Site info</a>
                        <a class="collapse-item" href="utilities-other.html">Investment Plan</a>
                        <a class="collapse-item" href="utilities-other.html">Payment Plan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Clients</span>
                </a>
                 <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div> -->
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Clients</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Log Out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->




        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Firm</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Users  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                USERS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                             $dash_category_query = "SELECT * from users";
                                             $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                                             if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                echo '<h4>' .$category_total.'</h4>';
                                             }else{
                                                echo "No users yet.";
                                             }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Earnings -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Approved Deposits</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                           20
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Deposit Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                             $dash_category_query = "SELECT * from history";
                                             $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                                             if($category_total = mysqli_num_rows($dash_category_query_run)){
                                                echo '<h4>' .$category_total.'</h4>';
                                             }else{
                                                echo "No deposits yet.";
                                             }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   

    <div class="container">
        <h2>Registered Users</h2>
       <table class="table">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Username</th>
              <th>Email</th>
              <th>Country</th>
              <th>Phone number</th>
            </tr>
          </thead>
          <tbody>
            <?php
               while ($rows = mysqli_fetch_assoc($result)) {

            ?>
                <tr>
                    <td><?php echo $rows['usersName'] ?></td>
                    <td><?php echo $rows['lastname'] ?></td>
                    <td><?php echo $rows['usersUsername'] ?></td>
                    <td><?php echo $rows['usersEmail'] ?></td>
                    <td><?php echo $rows['country'] ?></td>
                    <td><?php echo $rows['mobile'] ?></td>
                </tr>
            <?php
               }
            ?>
            
          </tbody>
        </table>
    </div>

    

    <div class="container">
        <h2>Bitcoin Deposit Requests</h2>
        <div class="container" style="padding: 15px; width: 100%; height: 20cm; overflow: scroll;">
            <table class="table">
            <thead>
                <tr>
                <th>Transaction Id</th>
                <th>Username</th>
                <!-- <th>Email</th> -->
                <th>Gateway</th>
                <th>Amount</th>
                <th>status</th>

                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM history";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['username'] ?></td>
                        <!-- <td>Fine</td> -->
                        <td><?php echo $rows['Gateway'] ?></td>
                        <td><?php echo $rows['Amount'] ?></td>
                        <td>
                            <form action="admin-bitcoin.inc.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $rows['id'] ?>" >
                                <input type="hidden" name="approve" value="Approved" >
                                <input type="submit" name="submit" value="Approve">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
            </table>
        </div>
       
    </div>


    <div class="container">
        <h2>Etherium Deposit Requests</h2>
        <div class="container" style="padding: 15px; width: 100%; height: 20cm; overflow: scroll;">
            <table class="table">
            <thead>
                <tr>
                <th>Transaction Id</th>
                <th>Username</th>
                <!-- <th>Email</th> -->
                <th>Gateway</th>
                <th>Amount</th>
                <th>status</th>

                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM eth_history";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['username'] ?></td>
                        <!-- <td>Fine</td> -->
                        <td><?php echo $rows['Gateway'] ?></td>
                        <td><?php echo $rows['Amount'] ?></td>
                        <td>
                            <form action="admin-eth.inc.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $rows['id'] ?>" >
                                <input type="hidden" name="approve" value="Approved" >
                                <input type="submit" name="submit" value="Approve">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
            </table>
        </div>
       
    </div>



    <div class="container">
        <h2>Usdt Deposit Requests</h2>
        <div class="container" style="padding: 15px; width: 100%; height: 20cm; overflow: scroll;">
            <table class="table">
            <thead>
                <tr>
                <th>Transaction Id</th>
                <th>Username</th>
                <!-- <th>Email</th> -->
                <th>Gateway</th>
                <th>Amount</th>
                <th>status</th>

                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM usdt_histroy";
                    $result = mysqli_query($conn, $query);
                    while ($rows = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['username'] ?></td>
                        <!-- <td>Fine</td> -->
                        <td><?php echo $rows['Gateway'] ?></td>
                        <td><?php echo $rows['Amount'] ?></td>
                        <td>
                            <form action="admin-usdt.inc.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $rows['id'] ?>" >
                                <input type="hidden" name="approve" value="Approved" >
                                <input type="submit" name="submit" value="Approve">
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
                
            </tbody>
            </table>
        </div>
       
    </div>


    

    <?php

        //echo $rows['id'];
        
        // if(isset($_POST["submit"])){


        //     $query = "SELECT * FROM history";
        //     $result = mysqli_query($conn, $query);
        //     while($rows = mysqli_fetch_assoc($result)){
        //         echo $rows['id'];
        //     }
        
           
            
        //     // $approve = $_POST["approve"];
        //     // $id = $rows['id'];
        
        //     //echo $approve;
            
          
        //     require 'functions.inc.php';
        //     require 'dbhandler.inc.php';
          
            
        //     //$sql = "UPDATE `history` SET `paymentstatus` = 'Approved' WHERE `id` = 48";
        //     //$anything = mysqli_query($conn, $sql);
        
        //     // header("location:admin-index.php");
          
          
          
        // }

    ?>







    <?php 
    
    // foreach ($rows as $row) : 
    
    ?>
    
        <!-- <tr>
            <td><?php 
            // echo $row["username"]; 
            ?></td>
            <td><img src="uploads/<?php 
            // echo $row["username"]; 
            ?>"></td>
            </tr> -->

    <?php 

    // endforeach; 
    
    ?>
    


       

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>



    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//code.tidio.co/t7mzg1ep9jvjhkg4yq74l3eaetjmfclw.js" async></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script>

// function approve() {
//   document.getElementById("demo1").innerHTML = "Approved";
// }

</script>

</body>

</html>