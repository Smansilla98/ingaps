@extends('layouts.adm')
@section('content')
<br><br><br>

<div class="container-fluid">
  <h1 class='text-center'>
Listado de Mensajes recibidos via Web
</h1>

<div class="table-responsive container-fluid">
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
      <tr>
        <th scope="row">1</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
    
      <tr>
        <th scope="row">3</th>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
        <td>Cell</td>
     
      </tr>
    </tbody>
  </table>
</div>
@endsection

@section('javascript')

@endsection

