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
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin/form">
                            <i class="nc-icon nc-notes"></i>
                            <p>Forms</p>
                        </a>
                    </li>
                    <li>
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
                    <a class="navbar-brand" href="#pablo"> Form List </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="auth/log_out">
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
                                    <h4 class="card-title" style="display: inline-block;">Forms</h4>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#add_form_modal" style="display: inline-block; float:right;">Add Form</button>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover" style="margin: 10px;">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Slug</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Home</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Field</th>
                                                <th scope="col">Feedbacks</th>
                                                <!--  <th scope="col">Link</th>
                                                <th scope="col">Clone</th> -->
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($forms as $key => $value) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $key + 1; ?></th>
                                                    <td><?php echo $value['f_name']; ?></td>
                                                    <td><?php echo $value['f_slug']; ?></td>
                                                    <?php
                                                    if ($value['f_state'] == 1) {
                                                    ?>
                                                        <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn btn-success btn_active">Active</button></td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn btn-danger btn_active">Deactive</button></td>
                                                    <?php
                                                    }
                                                    if ($value['f_ishome'] == 0) {
                                                    ?>
                                                        <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn btn-danger btn_home">Active Home</button></td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn btn-success btn_home">Home</button></td>
                                                    <?php
                                                    }
                                                    ?>
                                                    <td><button type="button" data-id="<?php echo $value['f_name']; ?>" data-toggle="modal" data-target="#edit_form_modal" class="btn_edit btn btn-primary">Edit</button></td>
                                                    <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn_field btn btn-primary">Field</button></td>
                                                    <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn btn-primary btn_feedback">Feedback</button></td>
                                                    <!-- <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn btn-primary btn_link">Link</button></td> -->
                                                    <!-- <td><button type="button" data-id="<?php echo $value['f_name']; ?>" data-toggle="modal" data-target="#clone_form_modal" class="btn_clone btn btn-primary">Clone</button></td> -->
                                                    <td><button type="button" data-id="<?php echo $value['f_name']; ?>" class="btn_delete btn btn-danger">Delete</button></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
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

    <div class="modal fade" id="add_form_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="form/add_form" id="upload_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Form Name</label>
                                <input name="form_name" id="form_name" class="form-control" placeholder="Place form name" required></input>
                            </div>
                            <div class="col-md-12">
                                <label>Welcome Text</label>
                                <textarea class="form-control" id="welcome_text" name="welcome_text" placeholder="Place Welcome Text" style="height: 150px;" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Form Logo</label>
                                <input type="file" id="image_file" name="image_file" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close" />
                        <button type="submit" id="btn_upload" type="submit" class="btn btn-primary">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit_form_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="form/edit_form" id="upload_form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Form Name</label>
                                <input class="form-control" id="edit_form_name" name="edit_form_name" placeholder="Place form name" required></input>
                                <input class="form-control" id="current_name" name="current_name" type="hidden"></input>
                            </div>
                            <div class="col-md-12">
                                <label>Welcome Text</label>
                                <textarea class="form-control" id="edit_welcome_text" name="edit_welcome_text" style="height: 150px;" placeholder="Place Welcome Text" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Form Logo</label>
                                <input type="file" class="form-control" id="edit_logo" name="edit_logo" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn_end" type="submit" class="btn btn-primary">Edit Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--  <div class="modal fade" id="clone_form_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Clone Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Form Name</label>
                            <input class="form-control" placeholder="Place target form name"></input>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Clone Form</button>
                </div>
            </div>
        </div>
    </div> -->
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
    jQuery(function($) {
        $(".card table button.btn_active").on("click", function() {
            var form_id = $(this).data('id');
            $.ajax({

                url: 'form/active_func',
                type: 'post',
                data: {
                    'formid': form_id
                },
                dataType: 'json',
                success: function(data) {
                    if (data.state === "fail") {
                        alert(data.message);
                    } else {
                        alert(data.message);
                        location.href = "form";
                    }
                },
                error: function(request, error) {
                    alert("Ajax Error!!!");
                }
            });
        });

        $(".card table button.btn_edit").on("click", function() {
            var form_id = $(this).attr('data-id');
            $('#edit_form_name').val(form_id);
            $('#current_name').val(form_id);
        });

        $(".card table button.btn_field").on("click", function() {
            var form_id = $(this).attr('data-id');
            location.href = "form/edit_field?dist=" + form_id;
        });

        $(".card table button.btn_feedback").on("click", function() {
            var form_id = $(this).attr('data-id');
            location.href = "form/show_feedback?dist=" + form_id;
        });

        $(".card table button.btn_home").on("click", function() {
            var form_id = $(this).attr('data-id');
            $.ajax({

                url: 'form/home_func',
                type: 'post',
                data: {
                    'formid': form_id
                },
                dataType: 'json',
                success: function(data) {
                    if (data.state === "fail") {
                        alert(data.message);
                    } else {
                        alert(data.message);
                        location.href = "form";
                    }
                },
                error: function(request, error) {
                    alert("Ajax Error!!!");
                }
            });
        });


        $(".card table button.btn_delete").on("click", function() {
            var form_id = $(this).attr('data-id');
            var result = confirm("Do you want to delete this form?");
            if (result) {
                $.ajax({

                    url: 'form/delete_func',
                    type: 'post',
                    data: {
                        'formid': form_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.state === "fail") {
                            alert(data.message);
                        } else {
                            alert(data.message);
                            location.href = "form";
                        }
                    },
                    error: function(request, error) {
                        alert("Ajax Error!!!");
                    }
                });
            } else {
                alert("Delete form request cnacel!");
            }

        });
    });
</script>

</html>