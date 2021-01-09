<body>
    <div class="wrapper">
        <h2 class="text-center">Add Equipment</h2>
        <div class="container">
            <div class="header">
                <i class="fas fa-laptop-medical" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Add Equipment</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Type</span>
                            <select class="form-control" id="dev_type" name="dev_type">
                                <option value="firewall">Firewall</option>
                                <option value="switch">Switch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                            <input type="text" id="dev_name" name="dev_name" placeholder="Please input device name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                            <input type="text" id="dev_location" name="dev_location" placeholder="Please input device location" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">IP Address</span>
                            <input type="text" id="ip_address" name="ip_address" placeholder="Please input IP Address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" id="add_dev" name="add_dev" onclick="add_device_func()">Add Device</button>
            </div>
        </div>
    </div>
</body>
<script>
    function add_device_func() {
        var type = $('#dev_type').val();
        var name = $('#dev_name').val();
        var location = $('#dev_location').val();
        var ip_addr = $('#ip_address').val();
        if (name == '') {
            alert('Please input device name!');
            return;
        }
        if (location == '') {
            alert('Please input device location!');
            return;
        }
        if (ip_addr == '') {
            alert('Please input IP address!');
            return;
        }
        $.ajax({
            url: 'add_dev_func',
            type: 'post',
            data: {
                'type': type,
                'name': name,
                'location': location,
                'ip_addr': ip_addr
            },
            dataType: 'json',
            success: function(data) {
                if (data.state === "fail") {
                    alert(data.message);
                } else {
                    alert(data.message);
                    location.href = "equipment_manage";
                }
            },
            error: function(request, error) {
                alert("Ajax Error!!!");
            }
        });
    }
</script>