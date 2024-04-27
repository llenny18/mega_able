<?php include("./reqs.php"); ?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Mega Able bootstrap admin template by codedthemes </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
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
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
 
  <!-- Pre-loader end -->
  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <form class="md-float-material form-material"  method="POST">
    <div class="text-center">
        <img src="assets/images/logo.png" alt="logo.png">
    </div>
    <div class="auth-box card">
        <div class="card-block">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-center txt-primary">Sign up</h3>
                </div>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="username" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Choose Username</label>
            </div>
            <div class="form-group form-primary">
                <input type="password" name="password" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Password</label>
            </div>
            <div class="form-group form-primary">
                <input type="password" name="confirm_password" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Confirm Password</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="full_name" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Full Name</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="mother" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Father's Name</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="father" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="float-label">Mother's Name</label>
            </div>
            <div class="form-group form-primary">
                <input type="date" name="birthdate" class="form-control" required="">
                <span class="form-bar"></span>
                <label class="label">Birthdate (YYYY-MM-DD)</label>
            </div>
            <div class="form-group form-primary">
                <select name="gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <span class="form-bar"></span>
                <label class="float-label">Gender</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="religion" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Religion</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="age" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Age</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="sands" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Stand and Section</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="LRN" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">LRN</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="SY" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">SY</label>
            </div>
            <div class="form-group form-primary">
                <input type="text" name="Adress" class="form-control">
                <span class="form-bar"></span>
                <label class="float-label">Adress</label>
            </div>
      
            <div class="row m-t-30">
                <div class="col-md-12">
                    <button type="submit" name="sup" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
                </div>
            </div>
            <hr/>
        
        </div>
    </div>
</form>

                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
   <?php
if(isset($_POST['sup'])){
    // Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO student (username, password, full_name, email, birthdate, gender, religion, age, strand_and_section, lrn, school_year, address, father, mother) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Set parameters and execute
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt the password
$full_name = $_POST['full_name'];
$email = ''; // Fill in with the email value from the form or leave it empty
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$age = $_POST['age'];
$strand_and_section = $_POST['sands'];
$lrn = $_POST['LRN'];
$school_year = $_POST['SY'];
$address = $_POST['Adress'];
$father = $_POST['father'];
$mother = $_POST['mother'];

// Bind parameters
$stmt->bind_param("sssssssissssss", $username, $password, $full_name, $email, $birthdate, $gender, $religion, $age, $strand_and_section, $lrn, $school_year, $address, $father, $mother);

$stmt->execute();
echo"<script>alert('Stuent Register Successful')</script>";
}


?>
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>     <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>     <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>     <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>     <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
