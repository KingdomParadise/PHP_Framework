<body>
    <div class="wrapper">
        <h2 class="text-center">Delete User</h2>
        <div class="container" style="height: 300px;">
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
                <button type="button" id="del_user" name="del_user" style="width: 150px; height:50px; margin-top:20px; font-size:20px;" onclick="del_user_func()" class="btn btn-danger">DELETE</button>
            </div>
        </div>
    </div>
</body>

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