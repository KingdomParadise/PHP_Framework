<body>
    <div class="wrapper">
        <h2 class="text-center">RESTART SWITCH</h2>
        <div class="container" style="height:300px;">
            <div class="header">
                <i class="fa fa-random" style="display: inline-block; color:white; font-size:40px; margin-right:20px;"></i>
                <h2 style="display: inline-block; color:white;">Restart Switch</h2>
            </div>
            <div class="manage_body">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 40px;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">IP Address</span>
                            <select class="form-control" id="ip_address" name="ip_address">
                                <?php
                                foreach ($equipments as $key => $value) {
                                ?>
                                    <option value="<?php echo $value['f_ip_address']; ?>"><?php echo $value['f_ip_address']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" id="del_user" name="del_user" style="width: 150px; height:50px; margin-top:20px; font-size:20px;" class="btn btn-danger">RESTART</button>
            </div>
        </div>
    </div>
</body>