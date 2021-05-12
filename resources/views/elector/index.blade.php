<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<H2>Registro de Electores</h2>

<div class="container">

<center>
<a href="{{ url('/electores/create') }}" class="btn btn-success" >Agregar Elector</a>
</center>			


<table class="table table-hover">	
	<thead class="fw-bold">

		<tr>
			<th>#</th>			
			<th>Nombres</th>			
			<th>Apellido Paterno</th>
            <th>Apellido Materno</th>
			<th>DNI</th>
            <th>Sexo</th>
			<th>Ubigeo</th>
			<th>Fecha Nacimiento</th>
            <th>Estado Civil</th>
			<th>Opciones</th>
		</tr>

	</thead>
	<tbody class="text-secondary">
		@foreach ($electores as $elector)	
		<tr>
			<td>{{$loop->iteration}} </td>
			<td>{{ $elector->nombres}}</td>
            <td>{{ $elector->appaterno}}</td>
            <td>{{ $elector->apmaterno}}</td>
			<td>{{ $elector->dni}}</td>
            <td>{{ $elector->sexo}}</td>
			<td>{{ $elector->ubigeo}}</td>
			<td>{{ $elector->fechanacimiento}}</td>
            <td>{{ $elector->estadocivil}}</td>
			<td>

			<a href="{{ url('/electores/'.$elector->id.'/edit') }}" class="btn btn-outline-primary" onclick="return confirm('Desea actualizar?');">
			Actualizar
			</a>
			
			<form method="post" action="{{url('/electores/'.$elector->id)}}" style="display:inline">
			{{ csrf_field() }}{{ method_field('DELETE') }}
			<button class="btn btn-outline-danger" type="submit" onclick="return confirm('Desea borrar?');">
			Eliminar
			</button>
			</form>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $electores->links() }}

</div>