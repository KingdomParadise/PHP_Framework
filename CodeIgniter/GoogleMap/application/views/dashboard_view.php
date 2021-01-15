        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">

                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Menu</li>
                    <li class="active">
                        <a href="dashboard">
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
                            <li><a href="regist/user_reg_func"><i class="fa fa-user" style="margin-right: 10px;"></i>Usuario Registrar</a></li>
                            <li><a href="regist/pos_reg_func"><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>Pozo Registrar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widget">
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
                            <li><a href="maintenance/user_func"> Usuario </a></li>
                            <li><a href="maintenance/waterhole_func"> Pozo</a></li>
                            <li><a href="maintenance/hydrogeological_func"> Sector Hidrogeológico</a></li>
                            <li><a href="maintenance/telemetry_func"> Proveedor Telemetria</a></li>
                            <li><a href="maintenance/water_func"> Tipo de Derecho</a></li>
                            <li><a href="maintenance/zone_func"> Zona Administrativa</a></li>
                            <li><a href="maintenance/address_func"> Valores de Direccionamiento de variables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#">
                            <b class="caret"></b>
                            <i class="fa fa-list-ol"></i>
                            <span>Historico Datos </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="history/graph_show"><i class="fas fa-chart-bar"></i> Espectáculo gráfico</a></li>
                            <li><a href="history/table_show"><i class="fa fa-table"></i> Mostrar tabla</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="water_volume">
                            <i class="fas fa-water" style="margin-right:10px;"></i>
                            <span>Volúmenes de agua</span>
                        </a>
                    </li>
                    <li>
                        <a href="auth/log_out">
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

        <div id="content" class="content content-full-width content-inverse-mode">

            <!-- begin page-header -->
            <h1 class="page-header text-white">Google Map <small class="text-white-transparent-5">(Please check positions)</small></h1>
            <!-- end page-header -->
            <div class="map-content">
                <div class="btn-group map-btn pull-right">

                </div>
            </div>
            <div class="map">
                <div id="google-map-default" class="height-full width-full"></div>
            </div>
        </div>
        <!-- end #content -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->


        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="../../assets/js/demo/map-google.demo.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
        </body>

        </html>