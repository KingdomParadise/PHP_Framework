<body>
    <div class="wrapper">
        <h2 class="text-center">User Management</h2>
        <div class="container" style="height:320px;">
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
                        <button type="button" id="syslog" name="syslog" data-bs-toggle="modal" data-bs-target="#modal_syslog" class="btn btn-primary">Consult Syslog</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="equipment_mng" name="equipment_mng" class="btn btn-primary" onclick="equipment_manage_show()">Equipment Manage</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js" integrity="sha512-ZvbjbJnytX9Sa03/AcbP/nh9K95tar4R0IAxTS2gh2ChiInefr1r7EpnVClpTWUEN7VarvEsH3quvkY1h0dAFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js" integrity="sha512-q2vREMvON/xrz1KuOj5QKWmdvcHtM4XNbNer+Qbf4TOj+RMDnul0Fg3VmmYprdf3fnL1gZgzKhZszsp62r5Ugg==" crossorigin="anonymous"></script>

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