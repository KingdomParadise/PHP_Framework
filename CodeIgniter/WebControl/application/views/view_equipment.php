<!doctype html>
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
    <title>View Equipment</title>
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
    <link type="text/css" rel="stylesheet" href="./css/style.css">
    <link type="text/css" rel="stylesheet" href="./css/custom.css">
    <style>
        .container>h2 {
            margin-top: 100px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h2>Equipment Management</h2>
            <table class="table table-success table-striped">
                <thead>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>IP</th>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>1.1.1.1</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>1.1.1.2</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td></td>
                        <td>1.1.1.3</td>
                    </tr>
                </tbody>
            </table>
            <button id="status_view" name="status_view" data-bs-toggle="modal" data-bs-target="#equipment_status" style="margin-top: 20px; float:right;" class="btn btn-success">View Status</button>
        </div>
    </div>

    <!-- Team Management Modal -->
    <div class="modal fade" id="equipment_status" tabindex="-1" role="dialog" aria-labelledby="equipment_statusLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="equipment_statusLabel">Team Management</h5>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <div class="row">
                        <table class="table table-success table-striped">
                            <thead>
                                <th>IP</th>
                                <th>Name</th>
                                <th>State</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1.1.1.1</th>
                                    <td>Mark</td>
                                    <td>OK</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.1.1.2</th>
                                    <td>Jacob</td>
                                    <td>OK</td>
                                </tr>
                                <tr>
                                    <th scope="row">1.1.1.3</th>
                                    <td>Larry the Bird</td>
                                    <td>FAIL</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- link Bootstrap by cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-q2vREMvON/xrz1KuOj5QKWmdvcHtM4XNbNer+Qbf4TOj+RMDnul0Fg3VmmYprdf3fnL1gZgzKhZszsp62r5Ugg==" crossorigin="anonymous"></script>

<!-- link Bootstrap by local vendor 
    <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="./vendor/bootstrap/js/bootstrap.bundle.js"></script>
    -->
<!-- link style.js and custom.js -->
<script type="text/javascript" src="./js/style.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>

</html>