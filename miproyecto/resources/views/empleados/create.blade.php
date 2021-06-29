
@if (Session::has('error'))
    {{ Session::get('error')}} 
@endif

FORMULARIO DE CREACION DE RENAP 
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
@csrf
<a href="{{url('/home')}}"> REGRESAR </a>

@include('empleados.Form',['modo'=>'INSERTAR']);

</form>