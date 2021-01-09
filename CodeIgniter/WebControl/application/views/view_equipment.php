<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="VisualStudioCode">
    <meta name="Author" content="KingdomParadise">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="">
    <meta name="Description" content="This is serverstation54 website.">
    <title>View Equipment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" integrity="sha512-thoh2veB35ojlAhyYZC0eaztTAUhxLvSZlWrNtlV01njqs/UdY3421Jg7lX0Gq9SRdGVQeL8xeBp9x1IPyL1wQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <style>
        .container>h2 {
            margin-top: 100px;
            text-align: center;
        }

        .container {
            width: 800px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <h2>Equipment List</h2>
            <table class="table table-success table-striped">
                <thead>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>IP</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($equipments as $key => $value) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $value['f_type']; ?></th>
                            <td><?php echo $value['f_name']; ?></td>
                            <td><?php echo $value['f_location']; ?></td>
                            <td><?php echo $value['f_ip_address']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <button id="status_view" name="status_view" style="float:right; margin-top:20px; width:150px; font-size:20px; margin-bottom:50px;" data-bs-toggle="modal" data-bs-target="#equipment_status" style="margin-top: 20px; float:right;" class="btn btn-success">View Status</button>
            <button id="back" name="back" onclick="back_func()" style="margin-top: 20px; float:left; width:150px; font-size:20px; margin-bottom:50px;" class="btn btn-danger">Back</button>
        </div>
    </div>

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
                                <?php
                                foreach ($equipments as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $value['f_ip_address']; ?></th>
                                        <td><?php echo $value['f_name']; ?></td>
                                        <td>
                                            <?php
                                            if ($value['f_state'] == 0) {
                                                echo 'FAIL';
                                            } else {
                                                echo 'OK';
                                            }
                                            ?>
                                        </td>
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
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-q2vREMvON/xrz1KuOj5QKWmdvcHtM4XNbNer+Qbf4TOj+RMDnul0Fg3VmmYprdf3fnL1gZgzKhZszsp62r5Ugg==" crossorigin="anonymous"></script>
<script>
    function back_func() {
        location.href = "equipment_manage";
    }
</script>

</html>