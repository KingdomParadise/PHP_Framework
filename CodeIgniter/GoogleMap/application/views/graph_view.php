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

       <!-- begin #content -->
       <div id="content" class="content">
           <!-- begin breadcrumb -->
           <ol class="breadcrumb float-xl-right">
               <li class="breadcrumb-item"><a href="javascript:;">Historia</a></li>
               <li class="breadcrumb-item active">Mostrar gráfico</li>
           </ol>
           <!-- end breadcrumb -->
           <!-- begin page-header -->
           <h1 class="page-header">Historia <small>Vista de historial gráfico</small></h1>
           <!-- end page-header -->
           <!-- begin row -->
           <div class="row">
               <!-- begin col-6 -->
               <div class="col-1"></div>
               <div class="col-10">
                   <!-- begin panel -->
                   <div class="panel panel-inverse">
                       <div class="panel-heading">
                           <h4 class="panel-title">Stacked Area Chart</h4>
                           <div class="panel-heading-btn">
                               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                           </div>
                       </div>
                       <div class="panel-body">
                           <div class="row">
                               <div class="col-4">
                                   <input class="form-control" type="date" id="start_date" name="start_date" value="2021-01-01" data-parsley-required="true">
                               </div>
                               <div class="col-4">
                                   <input class="form-control" type="date" id="end_date" name="end_date" value="2021-01-01" data-parsley-required="true">
                               </div>
                               <div class="col-3">
                                   <select class="form-control" id="pozo_admin" name="pozo_admin" data-parsley-required="true" style="color: black;">
                                       <option value="">Elegir el Pozo Administraitvo</option>
                                       <option value="foo">Foo</option>
                                       <option value="bar">Bar</option>
                                   </select>
                               </div>
                               <div class="col-1">
                                   <button type="button" name="btn_search" id="btn_search" class="btn btn-success" style="float:right; width:100px;">Buscar</button>
                               </div>
                           </div>
                           <div id="nv-stacked-area-chart" class="height-sm"></div>
                           <div id="nv-stacked-area-chart2" class="height-sm"></div>
                       </div>
                   </div>
                   <!-- end panel -->
               </div>
               <div class="col-1"></div>
               <!-- end col-6 -->
               <!-- begin col-6 -->
               <!-- <div class="col-1"></div> -->
               <!-- <div class="col-10">
                   <div class="panel panel-inverse">
                       <div class="panel-heading">
                           <h4 class="panel-title">Stacked Bar Chart</h4>
                           <div class="panel-heading-btn">
                               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                           </div>
                       </div>
                       <div class="panel-body">
                           <div class="row">
                               <div class="col-4">
                                   <input class="form-control" type="date" id="start_date" name="start_date" value="2021-01-01" data-parsley-required="true">
                               </div>
                               <div class="col-4">
                                   <input class="form-control" type="date" id="end_date" name="end_date" value="2021-01-01" data-parsley-required="true">
                               </div>
                               <div class="col-3">
                                   <select class="form-control" id="pozo_admin" name="pozo_admin" data-parsley-required="true" style="color: black;">
                                       <option value="">Elegir el Pozo Administraitvo</option>
                                       <option value="foo">Foo</option>
                                       <option value="bar">Bar</option>
                                   </select>
                               </div>
                               <div class="col-1">
                                   <button type="button" name="btn_search" id="btn_search" class="btn btn-success" style="float:right; width:100px;">Buscar</button>
                               </div>
                           </div>
                           <div id="nv-stacked-bar-chart" class="height-sm"></div>
                       </div>
                   </div>
               </div> -->
               <!-- <div class="col-1"></div> -->
               <!-- end col-6 -->
           </div>
           <!-- end row -->
       </div>
       <!-- end #content -->

       <!-- begin scroll to top btn -->
       <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
       <!-- end scroll to top btn -->
       </div>
       <!-- end page container -->


       <!-- ================== BEGIN PAGE LEVEL JS ================== -->
       <script src="../../assets/plugins/d3/d3.min.js"></script>
       <script src="../../assets/plugins/nvd3/build/nv.d3.min.js"></script>
       <script type="text/javascript" src="../../assets/js/style.js"></script>
       <!-- ================== END PAGE LEVEL JS ================== -->
       </body>

       </html>