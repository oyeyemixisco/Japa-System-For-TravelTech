<?php
session_start();

// Check if the admin session variable is not set
if (!isset($_SESSION['admin'])) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit();
}
error_reporting(0);
include 'connect.php';


//Total number of users
$Totalresult = mysqli_query($conn, "select COUNT(*) AS total_columns FROM relc_reg" );
$Totalactivated = mysqli_query($conn, "select COUNT(*) AS total_active FROM relc_reg WHERE status = 'ACTIVATED'" );
$Totalpending = mysqli_query($conn, "select COUNT(*) AS total_pending FROM relc_reg WHERE status = 'PENDING'" );

// Fetch the result row
$Totalrow = mysqli_fetch_assoc($Totalresult); 
$Totalactivate = mysqli_fetch_assoc($Totalactivated); 
$totalPending = mysqli_fetch_assoc($Totalpending); 

// Get the total number of columns
$totalColumns = $Totalrow['total_columns'];
$totalActive = $Totalactivate['total_active'];
$totalPend = $totalPending['total_pending'];


// Query to fetch data from the table
$allData = mysqli_query($conn, "SELECT * FROM relc_reg");


?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RelocateNow | Move to the UK, Sweden, Ireland & Other Countries Now!</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Manage Users</li><!-- /.menu-title -->
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>User Lists</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-users"></i><a href="#"> Registered Users</a></li>
                            <li><i class="fa fa-check-circle-o"></i><a href="activateduser.php"> Active Users</a></li>
                            <li><i class="fa fa-warning (alias)"></i><a href="pendinguser.php"> Pending Users</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/slogo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">               

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">0</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">No new notification</p>
                                
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">0</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">No new mwssages</p>                                
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            

                            <a class="nav-link" href="../members/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totalColumns; ?></span></div>
                                            <div class="stat-heading">All Users</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totalActive ?></span></div>
                                            <div class="stat-heading">Activated Users</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $totalPend ?></span></div>
                                            <div class="stat-heading">Non-active Userss</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
                
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <strong class="card-title" v-if="headerText">Registered Users</strong>
                                    <div class="float-right">
                                        <a href="export_phone_numbers.php" class="btn btn-info btn-sm"><i class="fa fa-download"></i> Download Phone Numbers</a>
                                        <a href="export_email.php" class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Download Email Address</a>
                                    </div>                               
                                </div>
                                <div class="card-body--">
                                    <div class="order-table ov-h">
                                        <table id="bootstrap-data-table" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>SignUp Date</th>
                                                    <th>Last Login</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    if ($allData && mysqli_num_rows($allData) > 0) {
                                                        // Output HTML table header
                                                        
                                                        // Loop through each row of data
                                                        while ($row = mysqli_fetch_assoc($allData)) {
                                                        // Output table row with data
                                                        $class = ($row['status'] == 'PENDING') ? 'btn btn-warning btn-sm' : 'btn btn-success btn-sm';
                                                        echo '<tr>';
                                                        echo '<td>'.$row['id'].'</td>';
                                                        echo '<td>'.$row['name']. '</td>';
                                                        echo '<td>'.$row['mobile']. '</td>';
                                                        echo '<td>'.$row['email']. '</td>';
                                                        echo '<td>'.$row['reg_date']. '</td>';
                                                        echo '<td>'.$row['last_login']. '</td>';
                                                        echo '<td><a class="' . $class . '" href="#" id="status-'.$row['id']. '">'.$row['status']. '</a></td>';
                                                        
                                                        echo '<td><a class="btn btn-info btn-sm" href="viewuser.php?id='. $row['id'].'">View</a><a class="btn btn-success btn-sm" href="#" onclick="activateUser(' . $row['id'] . ')">Activate</a><button type="button" class="btn btn-danger btn-sm" onclick="deactivateUser(' . $row['id'] . ')">De-activate</button></td>';
                                                        echo '</tr>';
                                                        }
                                                        
                                                    } else {
                                                        // If the query failed or no rows were returned, display an error message
                                                        echo "No data found.";
                                                    }
                                                ?>   
                                            </tbody>
                                        </table>
                                    </div>                               
                                     <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->
                    </div>
                </div>  
                
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2024 RelocateNow
                    </div>
                    <div class="col-sm-6 text-right">
                        Developed by <a href="https://webplay.com.ng">Webplay</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    
    <!--Local Stuff-->
    
</body>
</html>




<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/init/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table-export').DataTable();
  } );


  function activateUser(id) {
    // Function to activate a student
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Update the status in the HTML table
            var statusCell = document.getElementById("status-" + id);
            statusCell.textContent = "Activated";            
            statusCell.classList.remove("btn-warning");
            statusCell.classList.add("btn-success");
            
        }
    };
    xhr.open("GET", "index.php?id=" + id + "&action=activate", true); // Pass the student ID in the URL
    xhr.send();
}


function deactivateUser(id) {
    // Function to deactivate a student
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Update the status in the HTML table
            var statusCell = document.getElementById("status-" + id);
            statusCell.textContent = "PENDING";
            // Change the class of the status cell
            statusCell.classList.remove("btn-success");
            statusCell.classList.add("btn-warning");
        }
    };
    xhr.open("GET", "index.php?id=" + id+ "&action=deactivate", true); // Pass the student ID in the URL
    xhr.send();
}
</script>

<?php

// Get student ID from the URL parameter
$id = $_GET['id'];

$action = $_GET['action']; // 'activate' or 'deactivate'

// Prepare the status to be updated based on the action
$status = '';
if ($action === 'activate') {
    $status = 'Activated';
} elseif ($action === 'deactivate') {
    $status = 'PENDING';
} else {
    die("Invalid action");
}

// Update the status of the student
$query = "UPDATE relc_reg SET status = '$status' WHERE id = $id";

if (mysqli_query($conn, $query)) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}


?>