@extends('template.main')

@section('title', 'Editar Enlace')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-md-6 mr-auto ml-auto">
			<div class="card card-panel">
				<div class="card-header">
		   			 <h3 class="headertitle">Registrar Enlace</h3>
		 		</div>
		  		<div class="card-body">
		    		{!! Form::open(['route' => ['enlaces.update', $enlace], 'method' => 'PUT']) !!}
					  <div class="form-group">
					    <label for="nombreEnlace">Nombre del Enlace</label>
					    <input 
					    	type="text" 
					    	class="form-control" 
					    	name="nombreEnlace" 
					    	id="nombreEnlace" 
					    	value="{{$enlace->nombreEnlace}}" 
					    	placeholder="Ej.: Jhon Doe">
					  </div>

					  <div class="text-center">
					  	<button type="submit" class="btn btn-warning w-50 pull-right">Modificar Enlace</button>
					  </div>
					{!! Form::close() !!}
		  		</div>
			</div>	
		</div>
	</div>
</div>
@endsection