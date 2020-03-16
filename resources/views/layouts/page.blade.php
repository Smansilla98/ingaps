<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <!-- Scripts -->
    <script src="{{ asset('js/page.js') }}" defer></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <!-- Navbar para desktop -->
    <header class="d-none d-lg-block" style="background-color:transparent">
    <!-- Menu superior -->
       <div class="top-menu border-bottom border-dark">
           <div class="container">
            <div class="row">
                <div class="col-sm-2 d-flex border-left border-dark px-0">
                </div>
                <div class="col-sm-5 d-flex offset-sm-5 border-dark justify-content-end">
                </div>
            </div>
           </div>
       </div>
    <!-- Nav -->
    <div class="container">
        <div class="row my-4">
            <div class="col-sm-4 d-flex justify-content-between">

                <a class="align-self-center @if(Request::is('/')) font-weight-bold @endif" href="{{url('/')}}"">INICIO</a>

                <a class="align-self-center @if(Route::is('empresa')) font-weight-bold @endif" href="{{url('/empresa')}}"">EMPRESA</a>

                <a class="align-self-center dropdown-content @if(Route::is('equipos*')) font-weight-bold @endif" href="{{url('/equipos')}}"">EQUIPOS</a>
                
                
            </div>
            <div class="col-sm-4 d-flex flex-column justify-content-center">
                <img src="{{ url('storage/ingapslogo.jpg') }}" class="img-fluid mx-auto">
            </div>
            <div class="col-sm-4 d-flex justify-content-between">

                <a class="align-self-center @if(Route::is('insumos')) font-weight-bold @endif" href="{{url('/insumos')}}"">INSUMOS</a>

                <a class="align-self-center @if(Route::is('ingenieria')) font-weight-bold @endif" href="{{url('/ingenieria')}}"">INGENIERIA</a>

                <a class="align-self-center @if(Route::is('contacto')) font-weight-bold @endif" href="{{url('/contacto')}}"">CONTACTO</a>

            </div>
        </div>
    </div>
    </header>
    <!-- Content -->
    
    @yield('content')

    <!-- Footer -->
    <footer class="container text-center text-md-left mt-5">
        <!-- Grid row -->
         <div class="row mt-3 dark-grey-text">
     
           <!-- Grid column -->
           <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
     
             <!-- Content -->
             <h6 class="text-uppercase font-weight-bold">Logo ingaps</h6>
             
             
             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                     <i class="fa fa-facebook-f"></i>
                   </a>
             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                     <i class="fa fa-linkedin"></i>
                   </a>
           </div>
           <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
             <h6 class="text-uppercase font-weight-bold">Secciones</h6>
             <p>
               <a class="dark-grey-text" href="{{url('/')}}">Inicio</a>
             </p>
             <p>
               <a class="dark-grey-text" href="{{url('/empresa')}}">Empresa</a>
             </p>
             <p>
                <a class="dark-grey-text" href="{{url('/ingenieria')}}">Ingenieria</a>
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"><br>
                <p>
                  <a class="dark-grey-text" href="{{url('/fabricacion')}}">Fabricación</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="{{url('/servicios')}}">Servicios</a>
                </p>
                <p>
                   <a class="dark-grey-text" href="{{url('/insumos')}}">Insumos</a>
                 </p>
               </div>
               <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"><br>
                <p>
                  <a class="dark-grey-text" href="{{url('/equipos')}}">Equipos</a>
                </p>
                <p>
                  <a class="dark-grey-text" href="{{url('/presupuesto')}}">Solicitar presupuesto</a>
                </p>
                <p>
                   <a class="dark-grey-text" href="{{url('/contacto')}}">Contacto</a>
                 </p>
               </div>
          
           <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
             <h6 class="text-uppercase font-weight-bold">INGAPS</h6>
             <p>
               <i class="fa fa-map-marker mr-3"></i>Direccion</p>
               <p>
                <i class="fa fa-phone mr-3"></i> Telefono</p>
              <p>
       
             <p>
               <i class="fa fa-envelope mr-3"></i> Correo</p>
           </div>
         </div>
       </div>
       <div class="footer-copyright text-black-50 py-3">
         <a class="dark-grey-text" href="https://osole.com.ar/"> By Osole</a>
       </div>
     </footer>

    <script src="https://kit.fontawesome.com/d53b1d2d14.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
