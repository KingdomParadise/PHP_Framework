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
    <title>Equipment Manage</title>
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
            height: 600px;
            border: 1px solid blue;
            padding-left: 0;
            padding-right: 0;
        }

        .main {
            width: 500px;
            height: 400px;
            border: 1px solid blue;
            margin-right: 0px;
        }

        .text-center {
            margin-top: 100px;
        }

        .header {
            height: 60px;
            background-color: #00e1ff;
            padding-top: 10px;
        }

        .manage_body {
            padding-top: 10px;
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
        <h2 class="text-center">Management Step 2</h2>
        <div class="container">
            <div class="header">
                <i class="fa fa-user" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Equipment Management</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="view_equipment" name="view_equipment" class="btn btn-primary" onclick="view_equipment_show()">View Equipment</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="add_equipment" name="add_equipment" class="btn btn-primary" onclick="add_equipment_show()">Add Equipment</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="del_equipment" name="del_equipment" class="btn btn-primary" onclick="delete_equipment_show()">Delete Equipment</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="search_equipment" name="search_equipment" class="btn btn-primary" onclick="search_equipment_show()">Search Equipment</button>
                    </div>

                    <div class="col-md-12">
                        <button type="button" id="port_add" name="port_add" onclick="add_vlan_show()" class="btn btn-primary">Add Ports to VLAN</button>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 30px;">
                        <button type="button" id="rei_switch" name="rei_switch" onclick="restart_switch_show()" class="btn btn-primary">Restart switch</button>
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

    function view_equipment_show() {
        location.href = "view_equipment";
    }

    function add_equipment_show() {
        location.href = "add_equipment";
    }

    function delete_equipment_show() {
        location.href = "delete_equipment";
    }

    function search_equipment_show() {
        location.href = "search_equipment";
    }

    function add_vlan_show() {
        location.href = "add_vlan_ports";
    }

    function restart_switch_show() {
        location.href = "restart_switch";
    }
</script>