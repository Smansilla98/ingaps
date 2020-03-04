@extends('layouts.adm')
@section('content')


<form class=" border border-light p-5" action="{{route('datos-save')}}" method="post">
    @csrf
    <h2  class="text-center">Datos de la empresa</h2>


        <h4>Titulo</h4>
<input  value="{{@$empresas->empresa['titulo']}}"  type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Nombre de la empresa" name='titulo' >
<h4>Direccion</h4>
<input  value="{{@$empresas->empresa['direccion']}}"  type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Direccion" name='direccion'>
<h4>Dias y horarios de atención al público</h4>
<input  value="{{@$empresas->empresa['horario']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Horario de atención" name='horario'>
<h4>Ubicación Google</h4>
<input  value="{{@$empresas->empresa['ubicacion']}}" type="link" id="defaultContactForm" class="form-control mb-4" placeholder="URL maps" name='ubicacion'>
<h4>Telefono</h4>
<input  value="{{@$empresas->empresa['telefono']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Telefono" name='telefono'>
<h4>Correo Público</h4>
<input  value="{{@$empresas->empresa['email']}}" type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com" name='email'>
<h4>Correo de contacto</h4>
<input  value="{{@$empresas->empresa['emailContacto']}}" type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com" name='emailContacto'>
<h4>Correo de cotizaciones</h4>
<input  value="{{@$empresas->empresa['EmailCotizacion']}}" type="mail" id="defaultContactForm" class="form-control mb-4" placeholder="example@gmail.com" name='emailCotizacion'>
<h2  class="text-center">Redes Sociales</h2>
<h4>Facebook</h4>
<input  value="{{@$empresas->empresa['facebook']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Facebook.com/user">
<h4>Instagram</h4>
<input  value="{{@$empresas->empresa['instagram']}}" type="text" id="defaultContactForm" class="form-control mb-4" placeholder="Instagram.com/user">

<button class="btn btn-info btn-block" type="submit">Guardar Cambios</button>

</form>
@endsection

@section('javascript')

@endsection

