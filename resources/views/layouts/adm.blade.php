
<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Ingaps Admin</title>
            <link href="{{asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous" />
            <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js')}}" crossorigin="anonymous"></script>
            <link href="{{asset('css/styles.css')}}" rel="stylesheet">
       </head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/adm/">Ingaps</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
        >
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                 
                    <a class="dropdown-item" href="/login/">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Datos</div>
                                <a class="nav-link" href="{{url('adm/empresa')}}"><div class="sb-nav-link-icon"></div>Empresa</a>
                                <a class="nav-link" href="{{url('adm/consultas')}}"><div class="sb-nav-link-icon"></div>Consultas</a>
                                <a class="nav-link" href="{{url('adm/mensajes')}}"><div class="sb-nav-link-icon"></div>Mensajes</a>
                                <a class="nav-link" href="{{url('adm/cotizaciones')}}"><div class="sb-nav-link-icon"></div>Solicitud de cotizaciones</a>
                            <div class="sb-sidenav-menu-heading">Equipos</div>
                                <a class="nav-link collapsed" href="{{url('adm/equipos/alquiler')}}" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"></div>Alquiler<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion"><nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                <a class="nav-link" href="{{url('adm/categorias')}}">Categorias</a>
                                                <a class="nav-link" href="{{url('adm/equipos/alquiler/nuevo')}}">Nuevo</a>
                                                <a class="nav-link" href="{{url('adm/equipos/alquiler/listado')}}">Listado de Registros</a></nav>
                                            </div>
                                <a class="nav-link collapsed" href="{{url('adm/equipos/venta')}}" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"></div>Venta<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion"><nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                <a class="nav-link" href="{{url('adm/categorias')}}">Categorias</a>
                                                <a class="nav-link" href="{{url('adm/equipos/venta/nuevo')}}">Nuevo</a>
                                                <a class="nav-link" href="{{url('adm/equipos/venta/listado')}}">Listado de Registros</a></nav>
                                            </div>
                            <div class="sb-sidenav-menu-heading">Insumos</div>
                                    <a class="nav-link collapsed" href="{{url('adm/insumos/')}}" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages2"><div class="sb-nav-link-icon"></div>Registro<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                        <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion"><nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link" href="{{url('adm/insumos/nuevo')}}">Nuevo</a>                        
                                            <a class="nav-link" href="{{url('adm/insumos/listado')}}">Listado de Registros</a></nav>
                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages"></div>
                                                      
                                    </div>

                                        <div class="sb-sidenav-menu-heading">Opciones Estaticas</div>
                                        <a class="nav-link" href="{{url('adm/insumos/nuevo')}}">Textos Planos</a>                        
                                        <a class="nav-link" href="{{url('adm/insumos/listado')}}">Imagenes</a></nav>
                                    </nav>
                                    
                      
            </div>   
            
           
         
         <main class=" col-xl-10 py-md-4 pl-md-5 bd-content" role="main">
            <div class="container col-md-9">
                @yield('content')
            </div>
        </main>
            
        
        <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/datatables-demo.js')}}"></script>
    </body>
</html>

