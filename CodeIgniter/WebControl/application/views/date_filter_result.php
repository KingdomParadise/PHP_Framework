<style>
    .container>h2 {
        text-align: left;
    }
    .container {
        width: 700px;
        border: 0px;
        margin-top: 100px;
    }
</style>
<body>
    <div class="wrapper">
        <form action="search_date_filter_show" method="post">
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
                <button id="search" name="search" type="submit" style="margin-top: 20px; float:right; margin-bottom:50px;" class="btn btn-success">Search</button>
                <button id="back" name="back" type="button" onclick="back_func()" class="btn btn-danger" style="margin-top: 20px; float:left;">Back</button>
            </div>
        </form>
    </div>
</body>
<script>
    function back_func() {
        location.href = "show_user_manage";
    }
</script>
</html>