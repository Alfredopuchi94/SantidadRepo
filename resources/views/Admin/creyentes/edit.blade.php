@extends('template.main')

@section('title', 'Editar Nuevo Creyente')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 mr-auto ml-auto">
			<div class="card card-panel">
				<div class="card-header">
		   			 <h3 class="headertitle">Nuevos Creyentes</h3>
		 		</div>
		  		<div class="card-body">

		    		{!! Form::open(['route' => 'creyentes.update', 'method' => 'PUT']) !!}
		    		
					  <div class="form-group">
					    <label for="cedula">Cedula</label>
					    <input type="text" class="form-control"  value="{{$creyente->cedula}}" name="cedula" placeholder="Cedula o Pasaporte">
					  </div>

					  <div class="form-group">
					    <label for="cedula">Nombre Completo</label>
					    <input type="text" class="form-control"  value="{{$creyente->nombrePersona}}" name="nombrePersona" placeholder="Nombres y Apellidos">
					  </div>

					  <div class="form-group">
					    <label for="direccion">Direccion</label>
					    <input type="text" class="form-control"  value="{{$creyente->dire}}" name="dire" placeholder="E.j: Av 80A, Calle 79D">
					  </div>

					  <div class="form-group">
					    <label for="edad">Edad</label>
					    <input type="number" class="form-control"  value="{{$creyente->edad}}" name="edad">
					  </div>
					
					  <div class="form-group">
					    <label for="descripcion">Descripcion</label>
					    <input type="text" class="form-control"  value="{{$creyente->descripcion}}" name="descripcion" aria-describedby="descHelp">
					    <small name="descripcion" class="form-text text-muted"> Nuevo Creyentes, Acompañante, Bautizos</small>
					  </div>
						
					  <div class="form-group">
					    <label for="año">Año</label>
					    <select class="form-control" name="ano">
					    	<option value="{{$creyente->ano}}" selected>Selected: {{$creyente->ano}}</option>
							@php
								$current = date('Y');
									echo "<option selected value='".$current."'>Año actual: ".$current."</option>";
								for ($i= $current-3; $i < $current+4; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								}
							@endphp
					    </select>
					  </div>

					  <div class="form-group">
					  	<label for="fecha">Fecha</label>
					    <input type="text" class="form-control datepicker"  value="{{$creyente->fechaServicio}}" name="fechaServicio" readonly>
					  </div>

					  <div class="form-group">
					    <label for="telefono">Telefono</label>
					    <input type="number" class="form-control"  value="{{$creyente->telf}}" name="telf" placeholder="E.j: 04245551234">
					  </div>

					  <div class="form-group">
					    <label for="correo">Correo</label>
					    <input type="text" class="form-control"  value="{{$creyente->email}}" name="email" placeholder="E.j: Ejemplo@exam.com">
					  </div>

					  <div class="form-group">
					    <label for="invitacion">Persona que lo invito</label>
					    <input type="text" class="form-control"  value="{{$creyente->invitacion}}" name="invitacion">
					  </div>

					  <div class="form-group">
					    <label for="motivo">Motivo de oracion</label>
					    <input type="text" class="form-control"  value="{{$creyente->oracion}}" name="oracion">
					  </div>

					  <div class="row">

						  <div class="form-group col" value="{{$creyente->lider}}"  name="lider">
						    <label for="nombrelider">Nombre del lider</label>
						    <input type="text" class="form-control" name="lider">
						  </div> 
					  	
					  </div>

					  <div class="form-gorup">
						{{ Form::label('id_afirmador', 'Asignar un afirmador')}}
						<select name="id_afirmador" class="form-control" required>

							<option value="{{ $$creyente->id_afirmador}}" selected>{{ $$creyente->afirmador->id_afirmado }}</option>
							@foreach($afirmadores as $afirmador) 
								<option value="{{ $afirmador->id}}"> {{ $afirmador->nombreAfirmador }} </option>
							@endforeach
						</select><br>
					  </div>

					  <div class="text-center">
					  	{!! Form::submit('Editar', ['class' => 'btn btn-warning']) !!}
					  </div>
				
				{!! Form::close() !!}

		  		</div>
			</div>	
		</div>
	</div>


</div>
@endsection