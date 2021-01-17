        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">

                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Menu</li>
                    <li>
                        <a href="/dashboard">
                            <i class="fas fa-map-marked-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="has-sub active">
                        <a href="#">
                            <b class="caret"></b>
                            <i class="fa fa-user"></i>
                            <span>Registrar</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/regist/user_reg_func"><i class="fa fa-user" style="margin-right: 10px;"></i>Usuario Registrar</a></li>
                            <li><a href="/regist/pos_reg_func"><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>Pozo Registrar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/assign">
                            <i class="fas fa-crosshairs" style="margin-right:10px;"></i>
                            <span>Asignar ESTACIONES a USUARIOS</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="#">
                            <b class="caret"></b>
                            <i class="fas fa-tools"></i>
                            <span>Mantenedores</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/maintenance/user_func"> Usuario </a></li>
                            <li><a href="/maintenance/waterhole_func"> Pozo</a></li>
                            <li><a href="/maintenance/hydrogeological_func"> Sector Hidrogeológico</a></li>
                            <li><a href="/maintenance/telemetry_func"> Proveedor Telemetria</a></li>
                            <li><a href="/maintenance/water_func"> Tipo de Derecho</a></li>
                            <li><a href="/maintenance/zone_func"> Zona Administrativa</a></li>
                            <li><a href="/maintenance/address_func"> Valores de Direccionamiento de variables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#">
                            <b class="caret"></b>
                            <i class="fa fa-list-ol"></i>
                            <span>Historico Datos </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="/history/graph_show"><i class="fas fa-chart-bar"></i> Espectáculo gráfico</a></li>
                            <li><a href="/history/table_show"><i class="fa fa-table"></i> Mostrar tabla</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/water_volume">
                            <i class="fas fa-water" style="margin-right:10px;"></i>
                            <span>Volúmenes de agua</span>
                        </a>
                    </li>
                    <li>
                        <a href="/auth/log_out">
                            <i class="fas fa-sign-out-alt" style="margin-right:10px;"></i>
                            <span>Cerrar sesión</span>
                        </a>
                    </li>
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb float-xl-right">
                <li class="breadcrumb-item"><a href="javascript:;">Registrar</a></li>
                <li class="breadcrumb-item active">Usuario Registrar</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Usuario</h1>
            <!-- end page-header -->

            <!-- begin row -->
            <div class="row">
                <div class="col-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="ui-general-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Registro de usuario</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form class="form-horizontal" data-parsley-validate="true" action="regist/user_regist_func" method="post" name="user_register_form" id="user_register_form" novalidate="">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-4 col-sm-4 col-form-label">Nombre de Usuario * :</label>
                                    <div class="col-md-8 col-sm-8">
                                        <input class="form-control" type="text" id="user_name" name="user_name" placeholder="Ingrese el nombre de usuario aquí" data-parsley-required="true">
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-4 col-sm-4 col-form-label">Nombre del Titular * :</label>
                                    <div class="col-md-8 col-sm-8">
                                        <input class="form-control" type="text" id="owner_name" name="owner_name" placeholder="Ingrese el nombre del propietario aquí" data-parsley-required="true">
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-4 col-sm-4 col-form-label">Email de Usuario * :</label>
                                    <div class="col-md-8 col-sm-8">
                                        <input class="form-control" type="email" id="user_email" name="user_email" data-parsley-type="email" placeholder="Ingrese su correo electrónico aquí" data-parsley-required="true">
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-4 col-sm-4 col-form-label">Contraseña * :</label>
                                    <div class="col-md-8 col-sm-8">
                                        <input class="form-control" type="password" id="user_pwd" name="user_pwd" placeholder="Introduzca la contraseña de usuario aquí" data-parsley-required="true">
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-4 col-sm-4 col-form-label">Contraseña confirmada * :</label>
                                    <div class="col-md-8 col-sm-8">
                                        <input class="form-control" type="password" id="pwd_confirm" name="pwd_confirm" placeholder="Por favor ingrese la contraseña confirme aquí" data-parsley-required="true">
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-4 col-sm-4 col-form-label">Seleccione perfil * :</label>
                                    <div class="col-md-8 col-sm-8">
                                        <select class="form-control" id="select_profile" name="select_profile" data-parsley-required="true" style="color: black;">
                                            <option value="">Select choose</option>
                                            <option value="foo">Foo</option>
                                            <option value="bar">Bar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-4 col-sm-4 col-form-label">Foto perfil :</label>
                                    <div class="col-md-8 col-sm-8">
                                        <input class="form-control" type="file" id="profile_photo" name="profile_photo" data-parsley-required="true" style="padding-top:4px; color:black;">
                                    </div>
                                </div>

                                <div class="form-group row m-b-0">
                                    <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                                    <div class="col-md-8 col-sm-8">
                                        <button type="submit" class="btn btn-primary" style="float:right; width:150px;">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->
        </body>

        </html>