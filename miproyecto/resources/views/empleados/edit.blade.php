FORMULARIO DE EDICION DE DATOS 

<a href="{{url('/empleados')}}"> mostrar datos actualizados <-- </a>


<form action="{{url('/empleados/'.$empleados->id)}}" method="post" enctype="multipart/form-data">
@csrf

{{method_field('PATCH')}}
@include('empleados.Form',['modo'=>'EDITAR']);


</form>