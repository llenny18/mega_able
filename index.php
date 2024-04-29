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
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/interaction.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [{
                        title: '',
                        start: '2024-05-23',
                        classNames: ['event-square'] // Add class for square event
                    },
                    {
                        title: '',
                        start: '2024-05-24',
                        classNames: ['event-circle'] // Add class for circle event
                    },
                    {
                        title: '',
                        start: '2024-05-03',
                        classNames: ['event-triangle'] // Add class for triangle event
                    }
                    // Add more events as needed
                ],
                eventContent: function(arg) {
                    var eventClass = arg.event.classNames[0];
                    var shapeHTML = '';

                    if (eventClass === 'event-square') {
                        shapeHTML = '<div class="square-shape"></div>';
                    } else if (eventClass === 'event-circle') {
                        shapeHTML = '<div class="circle-shape"></div>';
                    } else if (eventClass === 'event-triangle') {
                        shapeHTML = '<div class="triangle-shape"></div>';
                    }

                    return {
                        html: shapeHTML + '<div class="fc-content">' + arg.timeText + '</div>'
                    };
                }
            });

            calendar.render();
        });
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [{
                        title: '',
                        start: '2024-05-02',
                        classNames: ['event-square'] // Add class for square event
                    },
                    {
                        title: '',
                        start: '2024-05-03',
                        classNames: ['event-square'] // Add class for square event
                    },
                    {
                        title: 'X',
                        start: '2024-05-01',
                        classNames: ['event-circle'] // Add class for circle event
                    },
                    {
                        title: '',
                        start: '2024-05-23',
                        classNames: ['event-triangle'] // Add class for triangle event
                    },
                    {
                        title: '',
                        start: '2024-05-24',
                        classNames: ['event-triangle'] // Add class for triangle event
                    },
                    {
                        title: '',
                        start: '2024-05-30',
                        classNames: ['event-triangle'] // Add class for triangle event
                    },
                    {
                        title: '',
                        start: '2024-05-31',
                        classNames: ['event-triangle'] // Add class for triangle event
                    }
                    // Add more events as needed
                ],
                eventContent: function(arg) {
                    var eventClass = arg.event.classNames[0];
                    var shapeHTML = '';

                    if (eventClass === 'event-square') {
                        shapeHTML = '<div class="square-shape"></div>';
                    } else if (eventClass === 'event-circle') {
                        shapeHTML = 'X';
                    } else if (eventClass === 'event-triangle') {
                        shapeHTML = '<div class="triangle-shape"></div>';
                    }

                    return {
                        html: shapeHTML + '<div class="fc-content">' + arg.timeText + '</div>'
                    };
                }
            });

            calendar.render();


            var externalEventContainer = document.getElementById('external-events');

            new FullCalendar.Draggable(externalEventContainer, {
                itemSelector: '.external-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText.trim(),
                        backgroundColor: window.getComputedStyle(eventEl).getPropertyValue('background-color'),
                        borderColor: window.getComputedStyle(eventEl).getPropertyValue('border-color')
                    };
                }
            });



        });
    </script>


    <style>
       
        .square-shape {
            width: 100px;
            height: 100px;
            background-color: white;
            box-sizing: border-box;
            margin: 10px;
        }

        .event-circle {
            font-size: 100px;
            padding-left: 40px;

        }

        .triangle-shape {
            width: 0;
            height: 0;
            border-left: 80px solid transparent;
            border-right: 80px solid transparent;
            border-bottom: 100px solid white;
            display: inline-block;
            margin-right: 5px; 

        }
    </style>
</head>

<body>

    <!-- Pre-loader end -->
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
                        <div class="page-header">

                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>School Calendar</h5>
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

                                                    <div class="container mt-4">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h2 class="text-left">Legend:</h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <h3 class="text-left"><strong>x - Declared Holidays</strong></h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <h3 class="text-left"><strong>▲ - Days for INSET, Co-Curricular Activities, and Home-School Collaboration-Related Activities</strong></h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <h3 class="text-left"><strong>■ - Administration of Quarter Examination</strong></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id='calendar' style="padding: 10px;"></div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Page-body end -->
                            </div>
                            <div id="styleSelector"> </div>
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
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js "></script>
    <script>
        document.getElementsByClassName("fc-event-title")[0].innerHTML = "Administration\n of Quarter\n Examination";
    </script>
</body>

</html>