@extends('layouts.page')
@section('title','Inicio')
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
<div class="container" style="border-radius: 160%;">
    <div class="row" id="cards">
        <div class="col-6">
          <img src="https://picsum.photos/seed/picsum/100" class="card-img" alt="Alquiler">
            <div class="card-text">
            </div>
        </div>
        <div class="col-6">
            <img src="https://picsum.photos/seed/picsum/100" class="card-img" alt="Alquiler">
              <div class="card-text">
              </div>
          </div>
      </div>
      <br>
      
</div>
<div class="container">
<h4>Insumos destacados</h4>
<div class="row">

<div class="card" style="">
    <div class="card-body">
      <h6 class="card-title">Special title treatment</h6>
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="">
    <div class="card-body">
      <h6 class="card-title">Special title treatment</h6>
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="">
    <div class="card-body">
      <h6 class="card-title">Special title treatment</h6>
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <div class="card" style="">
    <div class="card-body">
      <h6 class="card-title">Special title treatment</h6>
      <img src="img_avatar.png" alt="Avatar" style="width:100%">
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>
<div class="container">
 <div class="row">
     <div class="col-6">
         <h1>Ofrecemos Soluciones en<br>Ingeniería de alta calidad</h1>
     </div>
     <div class="col-6">
        <h5>Ocupamos unlugar de preponderancia dentro dle rubro, atentiendo un amplio espectro de industrias y sectores diversos como: Gas, Petróleo, Mineria, Construcción, Agroindustria, Metalúrgicas en general, Automotriz, Industria Naval, etc.</h5>
    </div>
 </div>
</div>
<div class="container">
    <img src="https://picsum.photos/seed/picsum/900">
</div>


@endsection