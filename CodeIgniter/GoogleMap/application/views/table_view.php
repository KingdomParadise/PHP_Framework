<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ControlWeb</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="">
    <meta content="2021.01.14 Built by KingdomParadise" name="description" />
    <meta content="KingdomParadise" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="../../assets/css/transparent/app.min.css" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="../../assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatables.net-autofill-bs4/css/autofill.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatables.net-colreorder-bs4/css/colreorder.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatables.net-keytable-bs4/css/keytable.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatables.net-rowreorder-bs4/css/rowreorder.bootstrap4.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
</head>

<body style="color: black;">
    <!-- begin page-cover -->
    <div class="page-cover"></div>
    <!-- end page-cover -->

    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-content-full-height">
        <!-- begin #header -->
        <div id="header" class="header navbar-default show-bg">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Control</b> Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
            <!-- begin header-nav -->
            <ul class="navbar-nav navbar-right">
                <li class="dropdown navbar-user">
                    <a href="#">
                        <img src="../../assets/img/user/none.jpg" alt="" />
                        <span class="d-none d-md-inline">Admin</span></b>
                    </a>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end #header -->

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
                    <li class="has-sub active">
                        <a href="#">
                            <b class="caret"></b>
                            <i class="fa fa-list-ol"></i>
                            <span>Historico Datos </span>
                        </a>
                        <ul class="sub-menu active">
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
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb float-xl-right">
                <li class="breadcrumb-item"><a href="javascript:;">Historico Datos</a></li>
                <li class="breadcrumb-item active">Table History</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Mostrar tabla</h1>
            <!-- end page-header -->
            <!-- begin row -->
            <div class="row">
                <!-- begin col-1 -->
                <div class="col-1"></div>
                <!-- begin col-10 -->
                <div class="col-xl-10">
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Historico Datos</h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-combine" class="table table-striped table-bordered table-td-valign-middle">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>
                                        <th width="1%" data-orderable="false"></th>
                                        <th class="text-nowrap">Nombre Usuario</th>
                                        <th class="text-nowrap">Nombre Titular</th>
                                        <th class="text-nowrap">Pozo</th>
                                        <th class="text-nowrap">Pozo Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td width="1%" class="f-s-600 text-inverse">1</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Owner1</td>
                                        <td>Win 95+</td>
                                        <td>4</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td width="1%" class="f-s-600 text-inverse">2</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Owner1</td>
                                        <td>Win 95+</td>
                                        <td>5</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">3</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Owner1</td>
                                        <td>Win 95+</td>
                                        <td>5.5</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">4</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-4.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Owner1</td>
                                        <td>Win 98+</td>
                                        <td>6</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">5</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-5.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Owner1</td>
                                        <td>Win XP SP2+</td>
                                        <td>7</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">6</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-6.jpg" class="img-rounded height-30" /></td>
                                        <td>Trident</td>
                                        <td>Owner1</td>
                                        <td>Win XP</td>
                                        <td>6</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">7</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-7.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.7</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">8</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-8.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">9</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-9.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">10</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-10.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>Win 2k+ / OSX.3+</td>
                                        <td>1.9</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">11</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-11.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>OSX.2+</td>
                                        <td>1.8</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">12</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-12.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>OSX.3+</td>
                                        <td>1.8</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">13</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-13.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                        <td>1.7</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">14</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-14.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>Win 98SE+</td>
                                        <td>1.7</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">15</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner2</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">16</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-2.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner3</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td width="1%" class="f-s-600 text-inverse">17</td>
                                        <td width="1%" class="with-img"><img src="../../assets/img/user/user-3.jpg" class="img-rounded height-30" /></td>
                                        <td>Gecko</td>
                                        <td>Owner3</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td>1.1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="../../assets/js/app.min.js"></script>
    <script src="../../assets/js/theme/transparent.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="../../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-autofill/js/dataTables.autofill.min.js"></script>
    <script src="../../assets/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js"></script>
    <script src="../../assets/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-keytable/js/dataTables.keytable.min.js"></script>
    <script src="../../assets/plugins/datatables.net-keytable-bs4/js/keytable.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-rowreorder/js/dataTables.rowreorder.min.js"></script>
    <script src="../../assets/plugins/datatables.net-rowreorder-bs4/js/rowreorder.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="../../assets/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="../../assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../../assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../../assets/plugins/pdfmake/build/pdfmake.min.js"></script>
    <script src="../../assets/plugins/pdfmake/build/vfs_fonts.js"></script>
    <script src="../../assets/plugins/jszip/dist/jszip.min.js"></script>
    <script src="../../assets/js/demo/table-manage-combine.demo.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
</body>

</html>