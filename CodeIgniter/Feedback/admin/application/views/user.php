<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Forms</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <style>
        .card .card-body {
            padding: 0px;
            margin: 30px;
            margin-left: 10px;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Dashboard Menu
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="/admin/dashboard">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/admin/form">
                            <i class="nc-icon nc-notes"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin/user">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User List</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> User List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title" style="display: inline-block;">Users</h4>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#add_user_modal" style="display: inline-block; float:right;">Add User</button>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover" style="margin: 10px;">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr#</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Access</th>
                                                <th scope="col">State</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Anton</td>
                                                <td>mertviy333@gmail.com</td>
                                                <td>
                                                    <button style="display: inline-block;" type="button" class="btn btn-success">SuperAdmin</button>
                                                </td>
                                                <td><button type="button" class="btn btn-success">Active</button></td>
                                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Test</td>
                                                <td>test@test.com</td>
                                                <td>
                                                    <button style="display: inline-block;" type="button" class="btn btn-primary">Admin</button>
                                                </td>
                                                <td><button type="button" class="btn btn-success">Active</button></td>
                                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Admin</td>
                                                <td>admin@admin.com</td>
                                                <td>
                                                    <button style="display: inline-block;" type="button" class="btn btn-danger">User</button>
                                                </td>
                                                <td><button type="button" class="btn btn-success">Active</button></td>
                                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Anton</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

    <div class="modal fade" id="add_user_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>User Fullname</label>
                            <input type="text" class="form-control" placeholder="Place User Fullname"></input>
                        </div>
                        <div class="col-md-12">
                            <label>User Email</label>
                            <input type="email" class="form-control" placeholder="Place User Email"></input>
                        </div>
                        <div class="col-md-12">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Place User Password"></input>
                        </div>
                        <div class="col-md-12">
                            <label>Password Confirm</label>
                            <input type="password" class="form-control" placeholder="Place User Password Confirm"></input>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add User</button>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

<script>

</script>

</html>