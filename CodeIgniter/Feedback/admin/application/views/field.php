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
                    <a class="navbar-brand" href="#pablo"> Field List(<?php echo $form_name; ?>) </a>
                    <input type="hidden" id="form_name" data-id="<?php echo $form_name; ?>">
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
                                    <h4 class="card-title" style="display: inline-block;">Fields(<?php echo $form_name; ?>)</h4>
                                    <a class="btn btn-primary" href="/admin/form" style="display: inline-block; float:right; color:#3472f7;">Go Form</a>
                                    <button class="btn btn-danger" style="display: inline-block; float:right; margin-right:20px;" data-toggle="modal" data-target="#add_field_modal">Add Field</button>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <?php
                                    foreach ($fields as $key => $value) {
                                    ?>
                                        <div class="row field_set">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Field Name</label>
                                                    <?php
                                                    if ($value['f_field_type'] == 0) {
                                                    ?>
                                                        <input type="text" id="name_<?php echo $value['f_id']; ?>" class="form-control" data-id="<?php echo $value['f_id']; ?>" value="<?php echo $value['f_section_content']; ?>" aria-describedby="emailHelp" placeholder="Enter email">
                                                        <input type="hidden" class="form-id" data-id="<?php echo $value['f_form_id']; ?>"></input>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <input type="text" id="name_<?php echo $value['f_id']; ?>" class="form-control" data-id="<?php echo $value['f_id']; ?>" value="<?php echo $value['f_label']; ?>" aria-describedby="emailHelp" placeholder="Enter email">
                                                        <input type="hidden" class="form-id" data-id="<?php echo $value['f_form_id']; ?>"></input>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <?php
                                                if ($value['f_field_type'] == 0) {
                                                ?>
                                                    <div class="form-group">
                                                        <label>Field Type</label>
                                                        <select class="form-control" id="type_<?php echo $value['f_id']; ?>" data-id="<?php echo $value['f_id']; ?>">
                                                            <option value="0" selected>Section</option>
                                                            <option value="1">Input</option>
                                                            <option value="2">Radio</option>
                                                            <option value="3">Text</option>
                                                        </select>
                                                    </div>
                                                <?php
                                                } else if ($value['f_field_type'] == 1) {
                                                ?>
                                                    <div class="form-group">
                                                        <label>Field Type</label>
                                                        <select class="form-control" id="type_<?php echo $value['f_id']; ?>" data-id="<?php echo $value['f_id']; ?>">
                                                            <option value="0">Section</option>
                                                            <option value="1" selected>Input</option>
                                                            <option value="2">Radio</option>
                                                            <option value="3">Text</option>
                                                        </select>
                                                    </div>
                                                <?php
                                                } else if ($value['f_field_type'] == 2) {
                                                ?>
                                                    <div class="form-group">
                                                        <label>Field Type</label>
                                                        <select class="form-control" id="type_<?php echo $value['f_id']; ?>" data-id="<?php echo $value['f_id']; ?>">
                                                            <option value="0">Section</option>
                                                            <option value="1">Input</option>
                                                            <option value="2" selected>Radio</option>
                                                            <option value="3">Text</option>
                                                        </select>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="form-group">
                                                        <label>Field Type</label>
                                                        <select class="form-control" id="type_<?php echo $value['f_id']; ?>" data-id="<?php echo $value['f_id']; ?>">
                                                            <option value="0">Section</option>
                                                            <option value="1">Input</option>
                                                            <option value="2">Radio</option>
                                                            <option value="3" selected>Text</option>
                                                        </select>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="col-1">
                                                <label>Field No</label>
                                                <input type="text" disabled class="form-control" data-id="<?php echo $value['f_form_id']; ?>" value="<?php echo $value['f_no']; ?>"></input>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-primary btn-edit" data-id="<?php echo $value['f_id']; ?>" style="margin-top: 25px; float:right;">Edit</button>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-danger btn-delete" data-id="<?php echo $value['f_id']; ?>" style="margin-top: 25px;">Delete</button>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
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

            <div class="modal fade" id="add_field_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Field</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="add_field" id="upload_form" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Field Name</label>
                                        <input id="add_field_name" name="add_field_name" class="form-control" placeholder="Place form name" required></input>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Field Type</label>
                                            <select class="form-control" id="add_field_type" name="add_field_type">
                                                <option value="0" selected>Section</option>
                                                <option value="1">Input</option>
                                                <option value="2">Radio</option>
                                                <option value="3">Text</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" id="form_id" name="form_id" value="<?php echo $fields[0]['f_form_id']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close" />
                                <button type="submit" id="btn_add" type="submit" class="btn btn-primary">ADD</button>
                            </div>
                        </form>
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
    jQuery(function($) {
        $(".btn-edit").on("click", function() {
            var field_id = $(this).data('id');
            var name_id = '#name_' + field_id;
            var type_id = '#type_' + field_id;
            var field_name = $(name_id).val();
            var field_type = $(type_id).val();
            var form_id = $('.form-id').data('id');
            var form_name = $('#form_name').data('id');
            var result = confirm("Do you want to edit this field?");
            if (result) {
                $.ajax({

                    url: 'edit_field_func',
                    type: 'post',
                    data: {
                        'field_id': field_id,
                        'field_name': field_name,
                        'field_type': field_type,
                        'form_id': form_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.state === "fail") {
                            alert(data.message);
                        } else {
                            alert(data.message);
                            location.href = "edit_field?dist=" + form_name;
                        }
                    },
                    error: function(request, error) {
                        alert("Ajax Error!!!");
                    }
                });
            } else {
                alert('Your edit request canceled!');
            }

        });

        $(".btn-delete").on("click", function() {
            var field_id = $(this).attr('data-id');
            var form_name = $('#form_name').data('id');
            var result = confirm("Do you want to delete this field?");
            if (result) {
                $.ajax({

                    url: 'delete_field_func',
                    type: 'post',
                    data: {
                        'field_id': field_id
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.state === "fail") {
                            alert(data.message);
                        } else {
                            alert(data.message);
                            location.href = "edit_field?dist=" + form_name;
                        }
                    },
                    error: function(request, error) {
                        alert("Ajax Error!!!");
                    }
                });
            } else {
                alert('Your delete request canceled!');
            }
        });
    });
</script>

</html>