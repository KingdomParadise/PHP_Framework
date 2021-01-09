<body>
    <div class="wrapper">
        <h2 class="text-center">Search Equipment</h2>
        <div class="container" style="height: 300px;">
            <div class="header">
                <i class="fa fa-user" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Search Equipment</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 40px;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="width: 120px;" id="inputGroup-sizing-default">Equipment IP</span>
                            <input type="text" id="device_ip" name="device_ip" placeholder="Please input equipment IP to Search" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <button type="button" id="search_device" name="search_device" style="width: 150px; height:50px; margin-top:20px; font-size:20px;" onclick="search_dev_func()" class="btn btn-danger">SEARCH</button>
            </div>
        </div>
    </div>
</body>
<script>
    function search_dev_func() {
        let dev_ip = $('#device_ip').val();
        if (dev_ip == '') {
            alert('Please input Device IP Address!');
            return;
        }
        $.ajax({

            url: 'search_dev_func',
            type: 'post',
            data: {
                'dev_ip': dev_ip
            },
            dataType: 'json',
            success: function(data) {
                if (data.state === "fail") {
                    alert(data.message);
                } else {
                    var alt_msg = "TYPE:  " + data.type + " , NAME:  " + data.name + " , LOCATION:  " + data.location + " , STATE:  " + data.status;
                    alert(alt_msg);
                    location.href = "search_equipment";
                }
            },
            error: function(request, error) {
                alert("Ajax Error!!!");
            }
        });
    }
</script>