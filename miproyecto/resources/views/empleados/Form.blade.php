<H1> <center> INGRESO DE DATOS OBLIGATORIOS DE RENAP </center></H1>
<center>
<label for="Cedula">cedula</label>
<br>
<input type="text" value="{{ isset($empleados->Cedula)?$empleados->Cedula:'' }}"  name="Cedula">
<br>
<label for="Fecha_nacimiento"> fecha de nacimiento </label>
<br>
<input type="text" value="{{ isset($empleados->Fecha_nacimiento)?$empleados->Fecha_nacimiento:''}}" name="Fecha_nacimiento">
<br>
<label for="Nonbre">Nonbre</label>
<br>
<input type="text"  value="{{ isset($empleados->Nonbre)?$empleados->Nonbre:'' }}"  name="Nonbre">
<br>
<label for="apellido">apellido</label>
<br>
<input type="text" value="{{ isset($empleados->Apellido)?$empleados->Apellido:'' }}" name="Apellido">
<br>
<label for="Direccion">direccion</label>
<br>
<input type="text" value="{{ isset($empleados->Direccion)?$empleados->Direccion:'' }}" name="Direccion">
<br>
<label for="telefono">telefono</label>
<br>
<input type="text" value="{{ isset($empleados->telefono)?$empleados->telefono:'' }}" name="Telefono">
<br>
<label for="departamento">departamento</label>
<br>
<input type="text" value="{{ isset($empleados->Departamento)?$empleados->Departamento:'' }}" name="Departamento">
<br>
<label for="nunicipio">municipio</label>
<br>
<input type="text" value="{{ isset($empleados->Municipio)?$empleados->Municipio:'' }}"name="Municipio">
<br>
<label for="foto">foto</label> 
<br>
@if (isset($empleados->Foto)) 
<img src="{{ asset('storage').'/'.$empleados->Foto }}" width="100" alt="">
@endif

<input type="file" value="" name="Foto" value="" >
<br>
<label for="mail">correo</label>
<br>
<input type="text" value="{{ isset($empleados->Email)?$empleados->Email:'' }}"name="Email">
<br>
<input type="submit" value="{{ $modo }} datos ">

</center>
