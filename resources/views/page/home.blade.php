@extends('layouts.page')
@section('title','Inicio')
<style>
    .slider {
	width: 100%;
	overflow: hidden;}

    .slider ul {
	display: flex;
	padding: 0;
	width: 100%;
	
	animation: cambio 20s infinite alternate linear;}

    .slider li {    
	width: 100%;
	list-style: none;}
    .slider img {
	width: 100%;
    }

    @keyframes cambio {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
    }

    .jumbotron {
  width: 60%;
  margin: 10px auto;
}


</style>
@section('content')
<main class="jumbotron">
<div class="container-fluid slider">
    <ul>        
        <li>
<img src="/images/image1.jpg" alt="">
</li>
    </ul>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-6"style="background-image:url(../../images/retro1.jpg);color:white;padding: 60px;
        border-radius: 40px;">
          <h2>Alquiler de Equipos</h2>
            <h4>En ingaps brindamos el servicio de alquiler de equipos de alta perfomance: retroexcavadoras, maquinaria de construcción, camiones, camiones pluma con caja y más</h4>
              <button class="btn btn-light"href=#!>Ingresar</button>
          </div>
        <div class="col-6"style="background-image:url(../../images/retro2.jpg);color:white;padding: 94px;
        border-radius: 40px;">
            <h2>Venta de Equipos</h2>
              <h4>En ingaps brindamos el servicio de alquiler de equipos de alta perfomance: retroexcavadoras, maquinaria de construcción, camiones, camiones pluma con caja y más</h4>
              <button  class="btn btn-light" href=#!>Ingresar</button>

            </div>
      </div>
      <br>
            
</div>
<div class="row">

  <div class="col-12">
   <h2 style="font-size:22px; bolder">Insumos Destacados</h2> 
  </div>
  
  <div class="col-3">
    <a href="familias/25/producto" >
      <div class="img-dest card">
        <img class="responsive-img" src="http://www.protfund.com.ar/imagenes/destacados/5_Carros de Bajada.jpg">
      </div><br>
       <h4 class="nom-dest" style="font-size:18px; bolder">Carros de Bajada</h4>
    </a>
  </div>
  <div class="col-3">
    <a href="familias/25/producto" >
      <div class="img-dest card">
        <img class="responsive-img" src="http://www.protfund.com.ar/imagenes/destacados/5_Carros de Bajada.jpg">
      </div><br>
       <h4 class="nom-dest" style="font-size:18px; bolder">Carros de Bajada</h4>
    </a>
  </div>
  <div class="col-3">
    <a href="familias/25/producto" >
      <div class="img-dest card">
        <img class="responsive-img" src="http://www.protfund.com.ar/imagenes/destacados/5_Carros de Bajada.jpg">
      </div><br>
       <h4 class="nom-dest" style="font-size:18px; bolder">Carros de Bajada</h4>
    </a>
  </div>
  <div class="col-3">
    <a href="familias/25/producto" >
      <div class="img-dest card">
        <img class="responsive-img" src="http://www.protfund.com.ar/imagenes/destacados/5_Carros de Bajada.jpg">
      </div><br>
       <h4 class="nom-dest" style="font-size:18px; bolder">Carros de Bajada</h4>
    </a>
  </div>
  <button class="btn"style="color:#2956b2;" href="{{url('/insumos')}}">Ingresar a Insumos</button>
</div>

</main>
<br><br><br>
<div class="container">
 <div class="row">
     <div class="col-6">
         <h1>Ofrecemos Soluciones en<br>Ingeniería de alta calidad</h1>
     </div>
     <div class="col-6">
        <h5>Ocupamos unlugar de preponderancia dentro del rubro, atentiendo un amplio espectro de industrias y sectores diversos como: Gas, Petróleo, Mineria, Construcción, Agroindustria, Metalúrgicas en general, Automotriz, Industria Naval, etc.</h5>
    </div>
 </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-8">
      <img src="images/grua.png">
    </div>
  <div>
      <div class="col-6">

        <i class="fas fa-lightbulb"></i><h2>Innovacion</h2>
      <h6>Servicios de alta calidad que<br> contribuyan al crecimiento del sector</h6>
      <i class="fas fa-chart-line"></i><h2>Trayectoria</h2>
      <h6>Servicios de alta calidad que<br> contribuyan al crecimiento del sector</h6>
      <i class="fas fa-medal"></i><h2>Calidad</h2>
      <h6>Servicios de alta calidad que<br> contribuyan al crecimiento del sector</h6>
      <i class="fas fa-shield-alt"></i><h2>Seguridad</h2>
      <h6>Servicios de alta calidad que<br> contribuyan al crecimiento del sector</h6>
    </div>
</div>
  </div>
</div>
@endsection