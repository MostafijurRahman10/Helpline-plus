<?php
$fileName = htmlspecialchars(basename($_SERVER['PHP_SELF']));
$name = explode(".", $fileName);
$title = $name[0];
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Helpline Plus</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
        <link href="assets/css/my-style.css" rel="stylesheet"/>

        <!--     Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar -->
            <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

                <!--
            
                    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                    Tip 2: you can also add an image using data-image tag
            
                -->

                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="dashboard.php" class="simple-text"> <!-- Helpline+ should be linked with landing page -->
                            <b>Helpline+</b>
                        </a>
                    </div>

                    <ul class="nav">
                        <li class="<?php if ($title === "dashboard") echo "active"; ?>">
                            <a href="dashboard.php">
                                <i class="fa fa-tachometer"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="<?php if ($title === "security") echo "active"; ?>">
                            <a href="security.php">
                                <i class="fa fa-shield"></i>
                                <p>Security Services</p>
                            </a>
                        </li>
                        <li class="<?php if ($title === "fire_brigade") echo "active"; ?>">
                            <a href="fire_brigade.php">
                                <i class="fa fa-fire-extinguisher"></i>
                                <p>Fire Brigade</p>
                            </a>
                        </li>
                        <li class="<?php if ($title === "hospital") echo "active"; ?>">
                            <a href="hospital.php">
                                <i class="fa fa-hospital-o"></i>
                                <p>Hospitals</p>
                            </a>
                        </li>
                        <li class="<?php if ($title === "doctor") echo "active"; ?>">
                            <a href="doctor.php">
                                <i class="fa fa-user-md"></i>
                                <p>Doctors</p>
                            </a>
                        </li>
                        <li class="<?php if ($title === "blood_donor") echo "active"; ?>">
                            <a href="blood_donor.php">
                                <i class="fa fa-tint"></i>
                                <p>Blood Donors</p>
                            </a>
                        </li>
                        <li class="<?php if ($title === "user") echo "active"; ?>">
                            <a href="user.php">
                                <i class="fa fa-user"></i>
                                <p>User Profile</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <!-- navigation bar -->
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="<?php echo $fileName;?>">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard.php">
                                        <i class="fa fa-plus"></i> New Post
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="settings.php">
                                        <i class="fa fa-cog"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-sign-out"></i> Sign out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
