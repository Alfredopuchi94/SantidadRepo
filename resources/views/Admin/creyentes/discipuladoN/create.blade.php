@extends('template.main')

@section('title', 'Discipulado de Nuevos Creyentes')

@section('content')
<div class="container">
	<div class="row">

		<div class="col-sm-6 mr-auto ml-auto">
			<div class="card card-panel">
				<div class="card-header">
		   			 <h3 class="headertitle">Discipulado de Nuevos Creyentes</h3>
		 		</div>
		  		<div class="card-body">

		    		{!! Form::open(['route' => 'discipulado.store', 'method' => 'POST']) !!}
		    			<div class="col-sm-12">
			    			<div class="form-group">
						  		<label for="cedulaCreyente">Cedula</label>
						    	<input type="text" class="form-control" name="cedulaCreyente" readonly value="{{$creyente->cedula}}">
						  	</div>
		    			</div>

		    			<div class="row">
			    			<div class="col-sm-6">
				    			<div class="form-group">
							  		<label for="fecha">Fecha</label>
							    	<input type="text" class="form-control datepicker" name="fechaServicio" readonly>
							  	</div>
			    			</div>

			    			<div class="col-sm-6">
			    				<div class="form-group">
						  			<label for="fecha">Fecha</label>
						    		<input type="text" class="form-control datepicker" name="fechaServicio" readonly>
						  		</div>
			    			</div>
			    		</div>

		    		<div class="form-group">
				    	<label for="cedula">Discipulador</label>
				    	<input type="text" class="form-control" name="discipulador" placeholder="Nombres y Apellido">
					</div>
					<hr>
		    		
					  <div class="form-group">
					    <select name="genero" class="form-control" required>
								<option value="masculino">Masculino</option>
								<option value="femenino">Femenino</option>
						</select><br>
					  </div>
				
					<div class="row text-center">
						<div class="col-sm-3">
							  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox1" value="si" name="c1"> Clase #1
							  </label>
						</div>
						<div class="col-sm-3">
							  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox2" value="si" name="c2"> Clase #2
							  </label>
						</div>
						<div class="col-sm-3">
							  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox3" value="si" name="c3"> Clase #3
							  </label>
						</div>
						<div class="col-sm-3">
							  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox4" value="si" name="c4"> Clase #4
							  </label>
						</div>
					  </div>
					  <div class="row text-center">
					  	<div class="col-sm-3">
							  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox5" value="si" name="c5"> Clase #5
							  </label>
						</div>
						<div class="col-sm-3">
						  	  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox6" value="si" name="c6"> Clase #6
							  </label>
						</div>
						<div class="col-sm-3">
							  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox7" value="si" name="c7"> Clase #7
							  </label>
						</div>
						<div class="col-sm-3">
							  <label class="checkbox">
								  <input type="checkbox" class="ch" id="checkbox8" value="si" name="c8"> Clase #8
							  </label>
						</div>
					  </div><br>

					  <div class="form-group">
					    <label for="total">Total de Clases</label>
					    <input type="text" class="form-control w-25" name="total" id="total">
					  </div>

					  <div class="text-center">
					  	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
					  </div>
				
				{!! Form::close() !!}

		  		</div>
			</div>	
		</div>

	</div>
</div>
@endsection