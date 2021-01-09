<body>
    <div class="wrapper">
        <h2 class="text-center">Management Step 1-2</h2>
        <div class="container">
            <div class="header">
                <i class="fa fa-user" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Add User</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 40px;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                            <input type="text" id="username" name="username" placeholder="Please input username to add" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                            <input type="password" id="password" name="password" placeholder="Please input user password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Confirm</span>
                            <input type="password" id="confirm_pwd" name="confirm_pwd" placeholder="Please confirm password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <button type="button" id="add_user" name="add_user" onclick="add_user_func()" class="btn btn-primary">ADD</button>
            </div>
        </div>
    </div>
</body>
<script>
    function add_user_func() {
        var username = $('#username').val();
        var userpwd = $('#password').val();
        var confirm = $('#confirm_pwd').val();

        if (username == '') {
            alert('Please input username!');
            return;
        }
        if (userpwd == '') {
            alert('Please input password!');
            return;
        }
        if (confirm == '') {
            alert('Please confirm your password!');
            return;
        }
        if (userpwd != confirm) {
            alert('Please confirm your password correctly!');
            return;
        }
        $.ajax({
            url: 'auth_add_user',
            type: 'post',
            data: {
                'username': username,
                'userpwd': userpwd,
                'confirm': confirm
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