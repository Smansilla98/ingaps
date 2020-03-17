<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
    
    <script src="https://kit.fontawesome.com/ebfafc2eb8.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/page.js') }}" defer></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style>
  .container{
    font-family:"Montserrat";
    color:#2956b2;
    
  }
  .searchbox{
    position: relative;
    display: inline-block;
    margin-left: 1.5rem;
  }
  .searchbox input:focus {
    outline: none; /*by default,input shows an outline on focus */
  }
  .searchbox input{
    z-index: 0;
    margin-top: 30%;
    width: 160%;
    height: 40px;
    background:white;
    border-radius: 9px;
    border: 3px solid #f1f3f4;
  }
  form{
    display:inline-block;
  }
#closeid{
  display: none;
}
 .fa-search{
     position: absolute;
     top:50%;
     left:10%;
     color:#2956b2;
 }
 .close{
        position: absolute;
        top:50%;
        right:-160%;
        color:#8e99a4;
 }
 .search{
  color:black;
  font-weight: 400; 
  padding-left: 50px;
  font-size: 18px;
  z-index: 3;
  
 }

    </style>


  </head>
<body>
    <header class="d-none d-lg-block" style="background-color:transparent">
       <div class="top-menu">
           <div class="container justify-content">
                         <div class="row" style="position:relative top:60px">
                <div class="col-sm-2 d-flex border-leftpx-0">
                  <div class="searchbox animated zoomIn">
                    <form method="get">
                        <input oninput="triggercross(this.value)" type="text" placeholder="Estoy buscando..." id="search" name="search"
                            class="search"><i class="fas fa-search"></i>
                        <button onclick="close1()" id="closeid" type="reset" class="close">
                            <i class="fas fa-times"></i>
                            <p id="demo"></p>
                        </button>
                    </form>    
                </div>
                </div>
                <div class="col-sm-5 d-flex offset-sm-5 justify-content-end" style='text-align:left'>
                  <i class="fas fa-2x fa-calendar-check" style="color:#2956b2 padding-top:10px"><button class="btn" style="background-color:white"><h5>Solicitar presupuesto</h5><span>Online, facil y sin cargo</span></button></div></i>
            </div>
           </div>
       </div>
    <div class="container">
        <div class="row my-4">
          
            <div class="col-sm-4 d-flex justify-content-between">
                <a class="align-self-center @if(Request::is('/')) font-weight-bold @endif" href="{{url('/')}}">INICIO</a>
                <a class="align-self-center @if(Route::is('empresa')) font-weight-bold @endif" href="{{url('/empresa')}}">EMPRESA</a>
                <a class="align-self-center @if(Route::is('equipos')) font-weight-bold @endif" href="{{url('/equipos')}}">EQUIPOS</a>
                 </div>
            <div class="col-sm-4 d-flex flex-column justify-content-center">
                <img src="{{ url('images/ingapslogo.jpg') }}" href="{{url('/')}}"  class="img-fluid mx-auto">
            </div>
            <div class="col-sm-4 d-flex justify-content-between">
                <a class="align-self-center @if(Route::is('insumos')) font-weight-bold @endif" href="{{url('/insumos')}}">INSUMOS</a>
                <a class="align-self-center @if(Route::is('ingenieria')) font-weight-bold @endif" href="{{url('/ingenieria')}}">INGENIERIA</a>
                <a class="align-self-center @if(Route::is('contacto')) font-weight-bold @endif" href="{{url('/contacto')}}">CONTACTO</a>
            </div>
        </div>
    </div>
    </header>
    @yield('content')
    <footer class="container text-center text-md-left mt-5" 
    style="
    box-shadow: 0px 0px  rgba(0,0,0,0.12);
    padding:30px">
         <div class="row mt-3 ">
           <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
            <img src="{{ url('images/ingapslogo.jpg') }}" style="width:40%;" class="img-fluid mx-auto"><br><br>
             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                     <i class="fab fa-lg fa-facebook-f"></i>
                   </a>
             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                     <i class="fab fa-lg fa-linkedin"></i>
                   </a><br><br>
                   <a  href="https://osole.com.ar/" target="_blank"> By Osole</a>

           </div>
           <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
             <h6 class="text-uppercase font-weight-bold">Secciones</h6>
             <p>
               <a  href="{{url('/')}}">Inicio</a>
             </p>
             <p>
               <a  href="{{url('/empresa')}}">Empresa</a>
             </p>
             <p>
                <a  href="{{url('/ingenieria')}}">Ingenieria</a>
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"><br>
                <p>
                  <a  href="{{url('/fabricacion')}}">Fabricación</a>
                </p>
                <p>
                  <a  href="{{url('/servicios')}}">Servicios</a>
                </p>
                <p>
                   <a  href="{{url('/insumos')}}">Insumos</a>
                 </p>
               </div>
               <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"><br>
                <p>
                  <a  href="{{url('/equipos')}}">Equipos</a>
                </p>
                <p>
                  <a  href="{{url('/presupuesto')}}">Solicitar presupuesto</a>
                </p>
                <p>
                   <a  href="{{url('/contacto')}}">Contacto</a>
                 </p>
               </div>
          
           <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
             <h6 class="text-uppercase font-weight-bold">INGAPS</h6>
             <p>
               <i class="fa fa-map-marker mr-3"></i>Direccion</p>
               <p>
                <i class="fa fa-phone mr-3"></i> Telefono</p>
              <p>
               <i class="fa fa-envelope mr-3"></i> Correo</p>
           </div>
         </div>
       </div>
     </footer>

    <script src="https://kit.fontawesome.com/d53b1d2d14.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     

  </body>
</html>
