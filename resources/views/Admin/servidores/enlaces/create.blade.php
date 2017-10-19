@extends('template.main')

@section('title', 'Registrar Enlace')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 mr-auto ml-auto">
			<div class="card card-panel">
				<div class="card-header">
		   			 <h3 class="headertitle">Registrar Enlace</h3>
		 		</div>
		  		<div class="card-body">
		    		{!! Form::open(['route' => 'enlaces.store', 'method' => 'POST', 'files' => true] ) !!}
					  <div class="form-group">
					    <label for="nombreEnlace">Nombre del Enlace</label>
					    <input type="text" class="form-control" name="nombreEnlace" id="nombreEnlace" placeholder="Ej.: Jhon Doe">
					  </div>

					  <div class="text-right">
					  	<button type="button" class="btn btn-alt w-50">Registrar Afirmador</button>
					  </div>
					{!! Form::close() !!}
		  		</div>
			</div>	
		</div>
	</div>
</div>
@endsection