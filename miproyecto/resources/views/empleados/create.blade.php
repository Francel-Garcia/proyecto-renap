FORMULARIO DE CREACION DE RENAP 
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data">
@csrf
<a href="{{url('/empleados')}}"> mostrar datos ingresados a renap <-- </a>

@include('empleados.Form',['modo'=>'INSERTAR']);


</form>