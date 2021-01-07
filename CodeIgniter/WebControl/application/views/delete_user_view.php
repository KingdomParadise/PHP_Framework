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
    <title>Delete User</title>
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
            height: 300px;
            border: 1px solid blue;
            padding-left: 0;
            padding-right: 0;
        }

        .main {
            width: 500px;
            height: 200px;
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

        button.btn.btn-danger {
            margin-top: 30px;
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
        <h2 class="text-center">Management Step 1-2</h2>
        <div class="container">
            <div class="header">
                <i class="fa fa-user" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Delete User</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 40px;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                            <input type="text" id="username" name="username" placeholder="Please input username to delete" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <button type="button" id="del_user" name="del_user" onclick="del_user_func()" class="btn btn-danger">DELETE</button>
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
    function del_user_func() {
        var username = $('#username').val();
        if (username == "") {
            alert('Please input username!');
            return;
        }
        $.ajax({

            url: 'del_user_func',
            type: 'post',
            data: {
                'username': username
            },
            dataType: 'json',
            success: function(data) {
                if (data.state === "fail") {
                    alert(data.message);
                } else {
                    alert(data.message);
                    location.href = "show_user_manage";
                }
            },
            error: function(request, error) {
                alert("Ajax Error!!!");
            }
        });
    }
</script>