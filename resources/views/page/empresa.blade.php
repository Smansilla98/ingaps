@extends('layouts.page')
@section('title','Empresa')
<style>
    .slider {
	width: 95%;
	margin: auto;
	overflow: hidden;}

    .slider ul {
	display: flex;
	padding: 0;
	width: 400%;
	
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
</style>
@section('content')

<div class="container slider">
    <ul>
        <li>
<img src="http://dominicushoeve.com/wp-content/uploads/ktz/latest-high-resolution-wallpaper-1920x1080-70558-pictures-high-resolution-wallpaper-30whtvl34j4r12m8b0c1sa.jpg" alt="">
</li>
        <li>
<img src="http://youghaltennisclub.ie/wp-content/uploads/2014/06/Tennis-Wallpaper-High-Definition-700x300.jpg" alt="">
</li>
        <li>
<img src="http://welltechnically.com/wp-content/uploads/2013/08/android-wallpapers-700x300.jpg" alt="">
</li>
        <li>
<img src="http://welltechnically.com/wp-content/uploads/2013/09/android-widescreen-wallpaper-14165-hd-wallpapers-700x300.jpg" alt="">
</li>
    </ul>
</div>

</div>


<div class="container">
<div class="row">
    <div class="col-6">
    <h1 >Gestión Integral de Proyectos </h1>  
      <p>Desde su fundación en 1999, Ingaps Ingeniería se caracteriza por<br>brincar las mejores Soluciones de Ingeniería en Gestión Intergal de Proyectos Industriales.<br> Ingaps Ingeniería se especializa en la fabricación de máquinas envasadoras y repuestos, y en la modificación, reparación y reingeniería de equipos de envasado, aportando la seguridad y garantía que significan más de 20 años de presencia en el mercado.<br> El conocimiento técnico especializado acerca de las prestaciones y exigencias de la industria del envasado, garantiza el rendimiento de máquinasy repuestos fabicados por Ingaps Ingeniería, como de<br> aquellos reparados y modificados bajo su supervisión técnica.</p>
    </div>
    <div class="col-6">
      
        <img src="images/soldadura.jpg" class="card-img" alt="Alquiler">
    </div>
</div>
</div>
@endsection