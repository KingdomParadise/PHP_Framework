<html lang="en">

<head>
    <!-- Metatag List  -->
    <meta charset="UTF-8">
    <meta name="Generator" content="VisualStudioCode">
    <meta name="Author" content="KingdomParadise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="">
    <meta name="Description" content="This is serverstation54 website.">
    <!-- The title - Website Name -->
    <title>User Manage</title>
    <!-- link Bootstrap by cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" integrity="sha512-thoh2veB35ojlAhyYZC0eaztTAUhxLvSZlWrNtlV01njqs/UdY3421Jg7lX0Gq9SRdGVQeL8xeBp9x1IPyL1wQ==" crossorigin="anonymous" />
    <!-- link Bootstrap by local vendor
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.css">
    -->
    <!-- link Fontawesome by cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- link Fontawesome by local vendor 
    <link rel="stylesheet" href="./vendor/fontawesome/css/all.css">
    -->
    <!-- link style.css and custom.css -->
    <link type="text/css" rel="stylesheet" href="../../assets/css/custom.css">
    <link type="text/css" rel="stylesheet" href="../../assets/css/style.css">

    <style>
        .wrapper {
            text-align: center;
        }

        .container {
            width: 500px;
            height: 450px;
            border: 1px solid blue;
            padding-left: 0;
            padding-right: 0;
        }

        .main {
            width: 500px;
            height: 450px;
            border: 1px solid blue;
            margin-right: 0px;
        }

        .text-center {
            margin-top: 200px;
        }

        .header {
            height: 60px;
            background-color: #00e1ff;
            padding-top: 10px;
        }

        .manage_body {
            padding-top: 30px;
        }

        .button {
            display: block;
        }

        button.btn.btn-primary {
            margin-top: 30px;
            width: 200px;
            height: 50px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2 class="text-center">Management Step 1</h2>
        <div class="container">
            <div class="header">
                <i class="fa fa-user" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">User Management</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="user_mng" name="user_mng" data-bs-toggle="modal" data-bs-target="#modal_user" class="btn btn-primary">User Management</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="team_mng" name="team_mng" data-bs-toggle="modal" data-bs-target="#modal_team" class="btn btn-primary">Team Management</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="syslog" name="syslog" data-bs-toggle="modal" data-bs-target="#modal_syslog" class="btn btn-primary">Consult Syslog</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="equipment_mng" name="equipment_mng" class="btn btn-primary" onclick="equipment_manage_show()">Equipment Manage</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- User Delete and Add Modal -->
    <div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-labelledby="modal_userLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_userLabel">User Management</h5>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" id="user_del" name="user_del" class="btn btn-primary" onclick="del_user_show()">Delete User</button>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 30px;">
                            <button type="button" id="user_add" name="user_add" class="btn btn-primary" onclick="add_user_show()">Add User</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Management Modal -->
    <div class="modal fade" id="modal_team" tabindex="-1" role="dialog" aria-labelledby="modal_teamLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_teamLabel">Team Management</h5>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" id="see_team" name="see_team" class="btn btn-primary">See Teams</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" id="team_add" name="team_add" class="btn btn-primary">Add Teams</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" id="team_del" name="team_del" class="btn btn-primary">Delete Teams</button>
                        </div>
                        <div class="col-md-12">
                            <button type="button" id="team_search" name="team_search" style="margin-bottom: 30px;" class="btn btn-primary">Search Team</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Consult Syslog Modal -->
    <div class="modal fade" id="modal_syslog" tabindex="-1" role="dialog" aria-labelledby="modal_syslogLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_syslogLabel">Syslog Filtering</h5>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" id="filter_by_date" name="filter_by_date" class="btn btn-primary" onclick="date_filter_show()">Filter By Date</button>
                        </div>
                        <div class="col-md-12" style="margin-bottom: 30px;">
                            <button type="button" id="filter_by_team" name="filter_by_team" class="btn btn-primary" onclick="team_filter_show()">Filter By Team</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<!-- link Bootstrap by cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-q2vREMvON/xrz1KuOj5QKWmdvcHtM4XNbNer+Qbf4TOj+RMDnul0Fg3VmmYprdf3fnL1gZgzKhZszsp62r5Ugg==" crossorigin="anonymous"></script>

<!-- link Bootstrap by local vendor 
    <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.bundle.js"></script>
    -->
<!-- link style.js and custom.js -->
<script type="text/javascript" src="../../assets/js/style.js"></script>
<script type="text/javascript" src="../../assets/js/custom.js"></script>

<script>
    $(document).ready(function() {

    });

    function del_user_show() {
        location.href = "delete_user"
    }

    function add_user_show() {
        location.href = "add_user"
    }

    function date_filter_show() {
        location.href = "date_filter_show";
    }

    function team_filter_show() {
        location.href = "team_filter_show";
    }

    function equipment_manage_show() {
        location.href = "equipment_manage";
    }
</script>