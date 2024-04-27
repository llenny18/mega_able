

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

if(!isset($_SESSION['us_id'])){
    echo"<script>window.location.href='login.php'</script>";
   
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                              <img src="assets/images/logo-bshs.png" alt="logo.png" style="width: 150px;">
                                  <div class="user-details">
                                      <span id="more-details"><?php
                                      if($_SESSION['us_type'] == "student"){
                                     $us_id = $_SESSION['us_id'];

                                     // Prepare a SQL statement to fetch the username based on the session ID
                                     $sql = "SELECT full_name FROM student WHERE student_id = ?";
                                 
                                     // Use prepared statements to avoid SQL injection
                                     $stmt = $conn->prepare($sql);
                                     $stmt->bind_param("i", $us_id); // Assuming us_id is an integer
                                 
                                     // Execute the statement
                                     $stmt->execute();
                                 
                                     // Bind the result
                                     $stmt->bind_result($full_name);
                                 
                                     // Fetch the result
                                     $stmt->fetch();
                                 
                                     // Output the username
                                     echo "$full_name";}
                                     else{
                                        
                                        $us_id = $_SESSION['us_id'];

                                        $sql = "SELECT full_name FROM administrator WHERE admin_id = ?";
                                 
                                     // Use prepared statements to avoid SQL injection
                                     $stmt = $conn->prepare($sql);
                                     $stmt->bind_param("i", $us_id); // Assuming us_id is an integer
                                 
                                     // Execute the statement
                                     $stmt->execute();
                                 
                                     // Bind the result
                                     $stmt->bind_result($full_name);
                                 
                                     // Fetch the result
                                     $stmt->fetch();
                                 
                                     // Output the username
                                     echo "$full_name";
                                     }
                                     
                                     
                                     
                                     ?><i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                 
                                          <a href="logout.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Home</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li <?php if (basename($_SERVER['REQUEST_URI']) == "index.php") { ?> class="active" <?php } ?>>
                                  <a href="index.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fas fa-tachometer-alt"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                            
                          </ul>
                              
                              
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Files And Information</div>
                          <ul class="pcoded-item pcoded-left-item">
                          <?php if($_SESSION['us_type']=="admin"){ ?>
                          <li <?php if (basename($_SERVER['REQUEST_URI']) == "students.php") { ?> class="active" <?php } ?>>
                                  <a href="students.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fas fa-user"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Student List</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                              <li <?php if (basename($_SERVER['REQUEST_URI']) == "admins.php") { ?> class="active" <?php } ?>>
                                  <a href="admins.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fas fa-user-shield"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Admin List</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                             

                              <li <?php if (basename($_SERVER['REQUEST_URI']) == "files.php") { ?> class="active" <?php } ?>>
                                  <a href="files.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fas fa-file"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Download Files</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <?php } else{ ?>
                           
                                <li <?php if (basename($_SERVER['REQUEST_URI']) == "sfiles.php") { ?> class="active" <?php } ?>>
                                  <a href="sfiles.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fas fa-file"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Download Files</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <?php }  ?>

                          </ul>
        
                      </div>
                  </nav>
