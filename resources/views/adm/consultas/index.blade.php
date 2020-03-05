@extends('layouts.adm')
@section('content')
<br><br><br>

<h1 class='text-center'>
Listado de consultas recibidas via Web
</h1>

<div class="table-responsive container-fluid">
  <table class="table container-fluid">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Empresa</th>
        <th scope="col">Actividad</th>
        <th scope="col">Mensaje</th>
        <th scope="col">Archivo adjunto</th>
      </tr>
    </thead>
    <tbody>
      @foreach($consultas as $consulta)
      <tr>
        <th scope="row">{{$consulta->id}}</th>
        <td>{{$consulta->data['nombre']}}</td>
        <td>{{$consulta->data['apellido']}}</td>
        <td>{{$consulta->data['telefono']}}</td>
        <td>{{$consulta->data['correo']}}</td>
        <td>{{$consulta->data['empresa']}}</td>
        <td>{{$consulta->data['actividad']}}</td>
        <td>{{$consulta->data['mensaje']}}</td>
        <td>{{$consulta->data['archivo']}}</td>
      @endforeach
    </tbody>
  </table>
</div>
@endsection