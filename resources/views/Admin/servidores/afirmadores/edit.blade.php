@extends('template.main')

@section('title', 'Registrar Afirmador')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 mr-auto ml-auto">
			<div class="card card-panel">
				<div class="card-header">
		   			 <h3 class="headertitle">Registrar Afirmador</h3>
		 		</div>
		  		<div class="card-body">
		    		{!! Form::open(['route' => 'afirmadores.update', 'method' => 'PUT', 'files' => true] ) !!}
					  <div class="form-group">
					    <label for="nombreAfirmador">Nombre del Afirmador</label>
					    <input 
					    	type="text" 
					    	class="form-control" 
					    	name="nombreAfirmador" 
					    	id="nombreAfirmador" 
					    	value="{{$afirmador->nombreAfirmador}}" 
					    	placeholder="Ej.: Jhon Doe">
					  </div>

					  <div class="form-group">
					  	<label for="nombreafir">Nombre del Enlace</label>
					  		<select name="id_afirmador" class="form-control" required>
					  			<option value="{{$afirmador->id_enlace}}" selected>{{$afirmador->enlace->nombreEnlace}}</option>
					  			@foreach ($enlaces as $enlace)
									<option value="{{$enlace->id}}">{{$enlace->nombreEnlace}}</option>
								@endforeach
											
							</select><br>
					  </div>

					  <div class="text-right">
					  	<button type="button" class="btn btn-alt w-50 ">Modificar afirmador</button>
					  </div>
					{!! Form::close() !!}
		  		</div>
			</div>	
		</div>
	</div>
</div>
@endsection