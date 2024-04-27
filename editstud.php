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
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

</head>

<body>
    <!-- Pre-loader start -->

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
                    <?php include("./sidebar.php");

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
                    $sql = "SELECT * FROM student WHERE student_id = " . $_GET['sid'] . ""; // Assuming you want to fetch a specific student's data by their ID

                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();


                    if (isset($_POST['137'])) {
                        if (isset($_FILES["form137"])) {
                            $fileTmp = $_FILES["form137"]["tmp_name"];
                            $fileName = $_FILES["form137"]["name"];
                            $fileType = $_FILES["form137"]["type"];
                            
                            // Check for errors during file upload
                            if ($_FILES["form137"]["error"] !== UPLOAD_ERR_OK) {
                                echo "<script>alert('File upload failed with error code: " . $_FILES["form137"]["error"] ."')</script>";
                            }
                    
                            // Validate file type (you can add more validation if needed)
                            if ($fileType != 'application/pdf') {
                                echo "<script>alert('Only PDF files are allowed.')</script>";
                            }
                    
                            // Convert the file to a PDF if needed
                            $pdfBlob = file_get_contents($fileTmp);
                    
                            // Prepare and execute the SQL statement to update the PDF blob in the database
                            $stmt = $conn->prepare("UPDATE student SET form137 = ? WHERE student_id = ?");
                            $stmt->bind_param("ss", $pdfBlob, $_GET['sid']);
                            $stmt->execute();
                    
                            // Close statement
                            $stmt->close();
                    
                            echo "<script>alert('PDF uploaded and updated successfully')</script>";
                        }
                    }
                    ?>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">

                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- Page body start -->
                                    <div class="page-body">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit Student</h5>
                                                    </div>
                                                    <div class="card-block">
                                                       
                                                            <form method="post" enctype="multipart/form-data">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">LRN</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="username" value="<?= $row['lrn'] ?>" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Full Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" name="full_name" value="<?= $row['full_name'] ?>" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Form 137</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" class="form-control" name="form137">
                                                                    </div>
                                                                </div>


                                                                <!-- Submit Button -->
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10 offset-sm-2">
                                                                        <button type="submit" name="137" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <iframe src="display_pdf.php?sid=<?= $_GET['sid'] ?>" width="100%" height="600px"></iframe>

                                                 


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Page body end -->
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
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>

    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Custom js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>