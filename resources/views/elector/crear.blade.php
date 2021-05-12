<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<h2 >Nuevo Elector</h2>



<div class="container">



<form action="{{url('/electores')}}" method="post" class="fw-bold">

{{ csrf_field() }} 
Nombres : : <input type="text" name="nombres" placeholder="Ingrese Nombres" id="nombres" value="" class="text-primary">
<br>

Ap. Paterno : : <input type="text" name="appaterno" placeholder="Ingrese Apellido Paterno" id="appaterno" value="" class="text-primary">
<br>

Ap. Materno : : <input type="text" name="apmaterno" placeholder="Ingrese Apellido Materno" id="apmaterno" value="" class="text-primary">
<br>

DNI        : : <input type="number" name="dni" placeholder="Ingrese DNI" id="dni" value="" class="text-primary">
<br>

Sexo       : :  
<select class="text-primary"  name="sexo" id="sexo" aria-label="Default select example" value="" class="text-primary">
  <option selected>Seleccione</option>
  <option value="M">Masculino</option>
  <option value="F">Femenino</option>
</select>
<br>

Ubigeo        : : <input type="number" name="ubigeo" placeholder="Ingrese Ubigeo" id="ubigeo" value="" class="text-primary">
<br>

Fecha Nacimiento: : <input type="date" name="fechanacimiento" placeholder="Ingrese Fecha" id="fechanacimiento" value="" class="text-primary">
<br>

Estado Civil : : 
<select class="text-primary"  name="estadocivil" id="estadocivil" aria-label="Default select example" value="" class="text-primary">
  <option selected>Seleccione</option>
  <option value="S">Soltero(a)</option>
  <option value="C">Casado(a)</option>
  <option value="V">Viudo(a)</option>
</select>
<br>


<input type="submit" class="btn btn-outline-success" value="Registrar">

</form>


</div>

<center>
<a href="{{ url('/electores/') }}" class="btn btn-outline-danger" > Volver </a>
</center>	
