@extends('layouts.adm')
@section('content')
<br><br><br>

<div class="container">
  <h1 class='text-center'>
Listado de Mensajes recibidos via Web
</h1>


<div class="row mt-4">
  <table class="table container-fluid">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Fecha</th>
        <th scope="col">Mensaje</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mensajes as $mensaje)
      <tr>
        <th scope="row">{{$mensaje->id}}</th>
        <td>{{$mensaje->data['nombre']}}</td>
        <td>{{$mensaje->data['correo']}}</td>
        <td>{{$mensaje->data['fecha']}}</td>
        <td>{{$mensaje->data['mensaje']}}</td>
      @endforeach
    </tbody>
  </table>


</div>
@endsection

@section('javascript')

@endsection

