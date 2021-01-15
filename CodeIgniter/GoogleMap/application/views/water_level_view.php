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
                    <li class="has-sub">
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
                    <li class="">
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

                    <li class="active">
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

        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb float-xl-right">
                <li class="breadcrumb-item"><a href="javascript:;">Volumenes de agua</a></li>
                <li class="breadcrumb-item active">Chart</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Volumenes de agua</h1>
            <!-- end page-header -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">VOLUMEN DIARIO</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-5">
                                    <button type="button" name="btn_pdf" id="btn_pdf" class="btn btn-warning" style="float:left; width:100px; margin-left:30px;">PDF</button>
                                    <button type="button" name="btn_excel" id="btn_excel" class="btn btn-green" style="float:left; width:100px; margin-left:30px;">EXCEL</button>
                                </div>
                                <div class="col-3">
                                    <select class="form-control" id="enero" name="enero" data-parsley-required="true" style="color: black;">
                                        <option value="">ENERO</option>
                                        <option value="foo">Foo</option>
                                        <option value="bar">Bar</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input class="form-control" type="date" id="search_date1" name="search_date1" value="2021-01-01" data-parsley-required="true">
                                </div>
                                <div class="col-1">
                                    <button type="button" name="btn_search1" id="btn_search1" class="btn btn-success" style="float:right; width:100px;">Buscar</button>
                                </div>
                            </div>
                            <div id="nv-bar-chart1" class="height-sm"></div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->

                <!-- begin col-12 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">VOLUMEN SEMANAL</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-5">
                                </div>
                                <div class="col-3">
                                    <select class="form-control" id="semana" name="semana" data-parsley-required="true" style="color: black;">
                                        <option value="">semana</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input class="form-control" type="date" id="search_date2" name="search_date2" value="2021-01-01" data-parsley-required="true">
                                </div>
                                <div class="col-1">
                                    <button type="button" name="btn_search2" id="btn_search2" class="btn btn-success" style="float:right; width:100px;">Buscar</button>
                                </div>
                            </div>
                            <div id="nv-bar-chart2" class="height-sm"></div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->

                <!-- begin col-12 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">VOLUMEN MEMSUAL</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-8">
                                </div>
                                <div class="col-3">
                                    <input class="form-control" type="date" id="search_date3" name="search_date3" value="2021-01-01" data-parsley-required="true">
                                </div>
                                <div class="col-1">
                                    <button type="button" name="btn_search3" id="btn_search3" class="btn btn-success" style="float:right; width:100px;">Buscar</button>
                                </div>
                            </div>
                            <div id="nv-bar-chart3" class="height-sm"></div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->

                <!-- begin col-12 -->
                <div class="col-xl-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">VOLUMEN ANUAL</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="nv-bar-chart4" class="height-sm"></div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->


        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="../../assets/plugins/d3/d3.min.js"></script>
        <script type="text/javascript" src="../../assets/js/water_level.js"></script>
        <script src="../../assets/plugins/nvd3/build/nv.d3.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
        </body>

        </html>