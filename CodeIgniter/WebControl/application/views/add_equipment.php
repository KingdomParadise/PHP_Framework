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
    <title>Add Equipment</title>
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
            height: 400px;
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
            margin-top: 10px;
            width: 200px;
            height: 50px;
            font-size: 20px;
        }

        .input-group {
            margin-left: 50px;
            width: 400px;
        }

        span {
            width: 100px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2 class="text-center">Add Equipment</h2>
        <div class="container">
            <div class="header">
                <i class="fas fa-laptop-medical" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Add Equipment</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
                            <select class="form-control" id="dev_type" name="dev_type">
                                <option value="firewall">Firewall</option>
                                <option value="switch">Switch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                            <input type="text" id="dev_name" name="dev_name" placeholder="Please input device name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                            <input type="text" id="dev_location" name="dev_location" placeholder="Please input device location" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">IP Address</span>
                            <input type="text" id="ip_address" name="ip_address" placeholder="Please input IP Address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" id="add_dev" name="add_dev" onclick="add_device_func()">Add Device</button>
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

    function add_device_func() {
        var type = $('#dev_type').val();
        var name = $('#dev_name').val();
        var location = $('#dev_location').val();
        var ip_addr = $('#ip_address').val();

        if (name == '') {
            alert('Please input device name!');
            return;
        }
        if (location == '') {
            alert('Please input device location!');
            return;
        }
        if (ip_addr == '') {
            alert('Please input IP address!');
            return;
        }

        $.ajax({

            url: 'add_dev_func',
            type: 'post',
            data: {
                'type': type,
                'name': name,
                'location': location,
                'ip_addr': ip_addr
            },
            dataType: 'json',
            success: function(data) {
                if (data.state === "fail") {
                    alert(data.message);
                } else {
                    alert(data.message);
                    location.href = "equipment_manage";
                }
            },
            error: function(request, error) {
                alert("Ajax Error!!!");
            }
        });

    }
</script>