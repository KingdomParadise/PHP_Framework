<body>
    <div class="wrapper">
        <h2 class="text-center">Add VLAN Ports</h2>
        <div class="container" style="height:350px;">
            <div class="header">
                <i class="fas fa-network-wired" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Add VLAN Ports</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">IP Address</span>
                            <select class="form-control" id="ip_address" name="ip_address">
                                <?php
                                foreach ($ip_addrs as $key => $value) {
                                ?>
                                    <option value="<?php echo $value['f_ip_address']; ?>"><?php echo $value['f_ip_address']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Port</span>
                            <select class="form-control" id="port" name="port">
                                <?php
                                for ($i = 0; $i < 24; $i++) {  ?>
                                    <option value="<?php echo $i + 1; ?>"><?php echo $i + 1; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">VLAN</span>
                            <select class="form-control" id="vlan" name="vlan">
                                <option value="core">CORE</option>
                                <option value="user">USER</option>
                                <option value="printing">PRINTING</option>
                                <option value="management">MANAGEMENT</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" onclick="add_port_func()" id="add_dev" name="add_dev">ADD</button>
            </div>
        </div>
    </div>
</body>
<script>
    function add_port_func() {
        var ip_addr = $('#ip_address').val();
        var port = $('#port').val();
        var vlan = $('#vlan').val();
        $.ajax({

            url: 'add_port_func',
            type: 'post',
            data: {
                'ip_addr': ip_addr,
                'port': port,
                'vlan': vlan
            },
            dataType: 'json',
            success: function(data) {
                if (data.state === "fail") {
                    alert(data.message);
                } else {
                    alert(data.message);
                    location.href = "add_vlan_ports";
                }
            },
            error: function(request, error) {
                alert("Ajax Error!!!");
            }
        });
    }
</script>