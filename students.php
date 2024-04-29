<?php include("./reqs.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Balayan Senior High School</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="./assets/images/logo-bshs.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

</head>

<body>
    <!-- Pre-loader start -->
    <!-- Pre-loader start -->

    <!-- Pre-loader end -->
    <script>
        jQuery.noConflict();
        jQuery(document).ready(function($) {
            $('#dynamic-table-1').DataTable();
        });
    </script>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">

                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">


                    </div>
                </div>
            </nav>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include("./sidebar.php"); ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->

                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Students Table</h5>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table id="dynamic-table-1" class="table" data-id-field="code" data-sort-name="value1" data-sort-order="desc" data-show-chart="false" data-pagination="false" data-show-pagination-switch="false">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Form137 Status</th>
                                                                <th>Username</th>
                                                                <th>Full Name</th>
                                                                <th>Birthdate</th>
                                                                <th>Gender</th>
                                                                <th>Religion</th>
                                                                <th>Age</th>
                                                                <th>Strand and Section</th>
                                                                <th>LRN</th>
                                                                <th>SY</th>
                                                                <th>Address</th>
                                                                <th>Father</th>
                                                                <th>Mother</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php

                                                            // Database credentials
                                                            $hostname = "localhost";  // or your database server address
                                                            $username = "root";
                                                            $password = "";
                                                            $database = "school_cashier";

                                                            // Create connection
                                                            $conn = new mysqli($hostname, $username, $password, $database);

                                                            // Check connection
                                                            if ($conn->connect_error) {
                                                                die("Connection failed: " . $conn->connect_error);
                                                            } else {
                                                            }
                                                            $sql = "SELECT * FROM student";
                                                            $result = $conn->query($sql);

                                                            if ($result->num_rows > 0) {
                                                                // Output data of each row
                                                                while ($row = $result->fetch_assoc()) {
                                                                    echo "<tr>";
                                                                    echo "<td>" . $row['student_id'] . "</td>";
                                                                    echo "<td>";
                                                                    if (is_null($row['form137'])) {
                                                                        echo "None";
                                                                    } else {
                                                                        echo "Uploaded";
                                                                    }
                                                                    
                                                                    echo "</td>";
                                                                    echo "<td>" . $row['username'] . "</td>";
                                                                    echo "<td>" . $row['full_name'] . "</td>";
                                                                    echo "<td>" . $row['birthdate'] . "</td>";
                                                                    echo "<td>" . $row['gender'] . "</td>";
                                                                    echo "<td>" . $row['religion'] . "</td>";
                                                                    echo "<td>" . $row['age'] . "</td>";
                                                                    echo "<td>" . $row['strand_and_section'] . "</td>";
                                                                    echo "<td>" . $row['lrn'] . "</td>";
                                                                    echo "<td>" . $row['school_year'] . "</td>";
                                                                    echo "<td>" . $row['address'] . "</td>";
                                                                    echo "<td>" . $row['father'] . "</td>";
                                                                    echo "<td>" . $row['mother'] . "</td>";
                                                                    echo "<td><a href='editstud.php?sid=" . $row['student_id'] . "' style='background-color: green; border-radius: 10px; padding: 10px; color: white;'>Add Form 137</a><a href='delstud.php?sid=" . $row['student_id'] . "' style='background-color: red; border-radius: 10px; padding: 10px; color: white;'>Delete</a></td>";
                                                                    echo "</tr>";
                                                                }
                                                            } else {
                                                                echo "<tr><td colspan='12'>No records found</td></tr>";
                                                            }

                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- Background Utilities table end -->
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->

                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- Custom js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>