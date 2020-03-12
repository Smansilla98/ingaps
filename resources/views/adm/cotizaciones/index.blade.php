@extends('layouts.adm')
@section('content')
<br><br><br>
<div class="panel-body container">
<h1 class='text-center'>
Listado de Cotizaciones recibidas</h1>

<div class="table-responsive container-fluid">
  <table class="table container-fluid">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Producto</th>
        <th scope="col">Modelo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Mensaje</th>
        <th scope="col">Fecha realizada</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cotizaciones as $cotizacion)
      <tr>
        <th scope="row">{{$cotizacion->id}}</th>
        <td>{{$cotizacion->data['producto']}}</td>
        <td>{{$cotizacion->data['modelo']}}</td>
        <td>{{$cotizacion->data['descripcion']}}</td>
        <td>{{$cotizacion->data['cantidad']}}</td>
        <td>{{$cotizacion->data['nombre']}}</td>
        <td>{{$cotizacion->data['correo']}}</td>
        <td>{{$cotizacion->data['mensaje']}}</td>
        <td>{{$cotizacion->data['fechaRealizada']}}</td>
        @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
