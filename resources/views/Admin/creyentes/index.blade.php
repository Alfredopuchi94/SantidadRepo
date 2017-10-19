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
								<button type="button" class="btn btn-info w-40 pull-right">Registrar nuevos creyentes</button>
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
							<th>Accion</th>	
					  </thead>
					    <tbody>
						    <tr>
						      <td>25043678</td>
						      <td>Nuevo creyente</td>
						      <td>2017</td>
						      <td>2017-05-05</td>
						      <td>Alfredo Puchi</td>
						      <td>22</td>
						      <td>km 18 via la concepcion</td>
						      <td>0412-6691727</td>
						      <td>alfredopuchi94@gmail.com</td>
						      <td>yaceni delgado</td>
						      <td>familia</td>
						      <td>yaceni delgado</td>
						      <td></td>
						      <td>asd</td>
						    </tr>
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
@endsection