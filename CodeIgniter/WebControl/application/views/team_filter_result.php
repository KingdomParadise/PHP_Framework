<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="VisualStudioCode">
    <meta name="Author" content="KingdomParadise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="">
    <meta name="Description" content="This is serverstation54 website.">
    <title>Filter By Team</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" integrity="sha512-thoh2veB35ojlAhyYZC0eaztTAUhxLvSZlWrNtlV01njqs/UdY3421Jg7lX0Gq9SRdGVQeL8xeBp9x1IPyL1wQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
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
        <form action="team_filter_log_show" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Syslog Filter by date</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3" style="margin-bottom: 0px;">
                            <span class="input-group-text" id="inputGroup-sizing-default">Team</span>
                            <input type="text" id="team_id" name="team_id" placeholder="Please input team id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <table class="table table-success table-striped">
                    <thead>
                        <th>No</th>
                        <th>IP</th>
                        <th>Date-Time</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($logs as $key => $value) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $key + 1; ?></th>
                                <td><?php echo $value['f_ip']; ?></td>
                                <td><?php echo $value['f_log_time']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <button id="search" name="search" type="submit" style="margin-top: 20px; float:right; width:150px; font-size:20px; margin-bottom:50px;" class="btn btn-success">Search</button>
                <button id="back" name="back" type="button" onclick="back_func()" class="btn btn-danger" style="margin-top: 20px; float:left; width:150px; font-size:20px; margin-bottom:50px;">Back</button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-q2vREMvON/xrz1KuOj5QKWmdvcHtM4XNbNer+Qbf4TOj+RMDnul0Fg3VmmYprdf3fnL1gZgzKhZszsp62r5Ugg==" crossorigin="anonymous"></script>

<script>
    function back_func() {
        location.href = "show_user_manage";
    }
</script>

</html>