<body>
    <div class="wrapper">
        <h2 class="text-center">Equipment Manage</h2>
        <div class="container" style="height:500px;">
            <div class="header">
                <i class="fa fa-user" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Equipment Management</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" id="view_equipment" name="view_equipment" class="btn btn-primary" onclick="view_equipment_show()">View Equipment</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="add_equipment" name="add_equipment" class="btn btn-primary" onclick="add_equipment_show()">Add Equipment</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="del_equipment" name="del_equipment" class="btn btn-primary" onclick="delete_equipment_show()">Delete Equipment</button>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="search_equipment" name="search_equipment" class="btn btn-primary" onclick="search_equipment_show()">Search Equipment</button>
                    </div>

                    <div class="col-md-12">
                        <button type="button" id="port_add" name="port_add" onclick="add_vlan_show()" class="btn btn-primary">Add Ports to VLAN</button>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 30px;">
                        <button type="button" id="rei_switch" name="rei_switch" onclick="restart_switch_show()" class="btn btn-primary">Restart switch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {

    });

    function view_equipment_show() {
        location.href = "view_equipment";
    }

    function add_equipment_show() {
        location.href = "add_equipment";
    }

    function delete_equipment_show() {
        location.href = "delete_equipment";
    }

    function search_equipment_show() {
        location.href = "search_equipment";
    }

    function add_vlan_show() {
        location.href = "add_vlan_ports";
    }

    function restart_switch_show() {
        location.href = "restart_switch";
    }
</script>