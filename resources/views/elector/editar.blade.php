<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<h2>Actualizar Registro del Elector</h2>





<div class="container">
<form action="{{url('/electores/'.$elector->id)}}" method="post" class="fw-bold">

{{ csrf_field() }}
{{ method_field('PATCH') }}

<div class="form-group">

<label for="Nombres" class="control-label" >{{'Nombres'}}</label>
<input type="text" placeholder="Nombres" name="nombres" id="nombres" value="{{ isset($elector->nombres)?$elector->nombres:old('nombres') }}" class="text-primary">

{!! $errors->first('nombres','<div class="invalid-feedback">:message</div>') !!}

<br class="text-secondary">
<label for="Paterno" class="control-label" >{{'Paterno'}}</label>
<input type="text" placeholder="Apellido Paterno" name="appaterno" id="appaterno" value="{{ isset($elector->appaterno)?$elector->appaterno:old('appaterno') }}" class="text-primary" >

{!! $errors->first('appaterno','<div class="invalid-feedback">:message</div>') !!}

<br class="text-secondary">
<label for="Materno" class="control-label" >{{'Materno'}}</label>
<input type="text" placeholder="Apellido Materno" name="apmaterno" id="apmaterno" value="{{ isset($elector->apmaterno)?$elector->apmaterno:old('apmaterno') }}" class="text-primary">

{!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>') !!}


<br class="text-secondary">
<label for="DNI" class="control-label" >{{'DNI'}}</label>
<input type="Integer" placeholder="DNI" name="dni" id="dni" value="{{ isset($elector->dni)?$elector->dni:old('dni') }}" class="text-primary">

{!! $errors->first('dni','<div class="invalid-feedback">:message</div>') !!}


<br class="text-secondary">
<label for="Sexo" class="control-label" >{{'Sexo'}}</label>
<select class="text-primary" aria-label="Default select example"  name="sexo" id="sexo" value="{{ isset($elector->sexo)?$elector->sexo:old('sexo') }}" >
  <option selected>Seleccione</option>
  <option value="M">Masculino</option>
  <option value="F">Femenino</option>
</select>





{!! $errors->first('sexo','<div class="invalid-feedback">:message</div>') !!}


<br class="text-secondary">
<label for="Ubigeo" class="control-label" >{{'Ubigeo'}}</label>
<input type="Integer" placeholder="Ubigeo" name="ubigeo" id="ubigeo" value="{{ isset($elector->ubigeo)?$elector->ubigeo:old('ubigeo') }}" class="text-primary">

{!! $errors->first('dni','<div class="invalid-feedback">:message</div>') !!}


<br class="text-secondary"> 
<label for="Fecha Nacimiento" class="control-label" >{{'Fecha Nacimiento'}}</label>
<input type="date" placeholder="Fecha Nacimiento" name="fechanacimiento" id="fechanacimiento" value="{{ isset($elector->fechanacimiento)?$elector->fechanacimiento:old('fechanacimiento') }}" class="text-primary">

{!! $errors->first('fechanacimiento','<div class="invalid-feedback">:message</div>') !!}

<br>
<label for="Estado Civil" class="control-label" >{{'Estado Civil'}}</label>
<select class="text-primary" aria-label="Default select example" name="estadocivil" id="estadocivil" value="{{ isset($elector->estadocivil)?$elector->estadocivil:old('estadocivil') }}" >
  <option selected>Seleccione</option>
  <option value="S">Soltero(a)</option>
  <option value="C">Casado(a)</option>
  <option value="V">Viudo(a)</option>
</select>




{!! $errors->first('estadocivil','<div class="invalid-feedback">:message</div>') !!}

<br>
<input type="submit" class="btn btn-outline-success" value="Actualizar"></div></form>

</div>

<center>
<a href="{{ url('/electores/') }}" class="btn btn-outline-danger" > Cancelar </a>
</center>	



