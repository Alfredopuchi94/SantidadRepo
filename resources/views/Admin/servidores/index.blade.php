@extends('template.main')

@section('title', 'Lista de Nuevos Creyentes')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12  mr-auto ml-auto">
				<div class="card">

					<div class="card-header">
						<div class="row">
							<div class="col-md-6"><h4>Servidores</h4></div>
							<div class="col-md-6 text-right">
								<div class="btn-group" role="group" aria-label="Registrar Servidores">
									<a href="{{ route('enlaces.create') }}" class="btn btn-outline-info">Registrar Enlace</a>
									<a href="{{ route('afirmadores.create') }}" class="btn btn-outline-info">Registrar Afirmador</a>
								</div>
							</div>
						</div>
					</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h4 class=" text-center">Enlaces</h4>
							<table class="table">
							@foreach($enlaces as $enlace)
							  <tr class="text-center">
							    <td>{{ $enlace->nombreEnlace }}</td>
							    <td>
								    <a href="{{ route('enlaces.edit', $enlace->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
								    <a href="{{ route('admin.enlaces.destroy', $enlace->id) }}" onclick="return confirm('¿esta seguro de elimar a un usuario?')" class="btn btn-danger"><i class="fa fa-trash-o " aria-hidden="true"></i></a> 
							    </td>
							  </tr>
							@endforeach
							</table>
						</div>
						<div class="col-md-6">
							<h4 class=" text-center">Afirmadores</h4>
							<table class="table">
							@foreach($afirmadores as $afirmador)
							  <tr class="text-center">
							    <td>{{ $afirmador->nombreAfirmador }}</td>
							    <td>
								    <a href="{{ route('afirmadores.edit', $afirmador->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
								    <a href="{{ route('admin.aformadores.destroy', $afirmador->id) }}" onclick="return confirm('¿esta seguro de elimar a un usuario?')" class="btn btn-danger"><i class="fa fa-trash-o " aria-hidden="true"></i></a> 
							    </td>
							  </tr>
							@endforeach
							</table>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection