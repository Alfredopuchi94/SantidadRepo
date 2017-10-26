@extends('template.main')

@section('title', 'Lista de Nuevos Creyentes')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12  mr-auto ml-auto">
				<div class="card">

					<div class="card-header">
						<div class="row">
							<div class="col-md-6"><h4>NUEVOS CREYENTES</h4></div>
							<div class="col-md-6">
								<a href="{{ route('creyentes.create') }}" class="btn btn-info w-40 pull-right">Registrar nuevos creyentes</a>
							</div>
						</div>
					</div>

				<div class="card-body">
					<table class="table table-sm table-responsive table-bordered table1">
					  <thead class="">
					     	<th>Cedula</th>
							<th>Descripcion</th>
							<th>Año</th>
							<th>Fecha de Servicio</th>
							<th>Nombres y Apellidos</th>
							<th>Edad</th>
							<th>Direccion</th>
							<th>Telefono</th>
							<th>Correo</th>
							<th>Persona que lo invito</th>
							<th>Motivo de Oracion</th>
							<th>Nombre del Lider</th>
							<th>Afirmador Asignado</th>
							<th><i class="fa fa-pencil-square-o  fa-2x" aria-hidden="true"></i></th>	
							<th><i class="fa fa-trash-o  fa-2x" aria-hidden="true"></i></th>	
					  </thead>
					    <tbody>
						    @foreach($creyentes as $creyente)
								<tr class="upper">
							 	<td><em>{{ $creyente->cedula }}</em></td>
							 	<td>{{ $creyente->descripcion }}</td>
							 	<td>{{ $creyente->ano }}</td>
							 	<td>{{ $creyente->fechaServicio }}</td>
							 	<td>{{ $creyente->nombrePersona}}</td>
							 	<td>{{ $creyente->edad }}</td>
							 	<td>{{ $creyente->dire }}</td>
							 	<td>{{ $creyente->telf }}</td>
							 	<td>{{ $creyente->email }}</td>
							 	<td>{{ $creyente->invitacion }}</td>
							 	<td>{{ $creyente->oracion }}</td>
							 	<td>{{ $creyente->lider }}</td>
							 	<td>{{ $creyente->afirmador->nombreAfirmador }}</td>
							 	<td> <a href="{{ route('creyentes.edit', $creyente->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> </td>
							 	<td> <a href="{{ route('admin.creyentes.destroy', $creyente->id) }}" onclick="return confirm('¿esta seguro de elimar a esta persona?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o" aria-hidden="true"></a>
							    </td>
							  </tr>
							@endforeach
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection