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
    <title>Filter By Date</title>
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
            text-align: left;
        }

        .container {
            width: 700px;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Syslog Filter by date</h2>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="date" id="filter_date" name="filter_date" style="display: inline-block;">
                </div>
            </div>
            <table class="table table-success table-striped">
                <thead>
                    <th>No</th>
                    <th>IP</th>
                    <th>Date-Time</th>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>1.1.1.1</td>
                        <td>2021.01.05 12:01:12</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>1.1.1.1</td>
                        <td>2021.01.03 16:06:12</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>1.1.1.2</td>
                        <td>2021.01.02 08:01:12</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>1.1.1.2</td>
                        <td>2021.01.06 02:19:12</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>1.1.1.1</td>
                        <td>2021.01.07 23:01:12</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>1.1.1.5</td>
                        <td>2021.01.02 06:54:23</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>1.1.1.4</td>
                        <td>2021.01.01 12:01:12</td>
                    </tr>
                </tbody>
            </table>
            <button id="search" name="search" style="margin-top: 20px; float:right;" class="btn btn-success">Search</button>
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