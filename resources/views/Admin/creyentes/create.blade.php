@extends('template.main')

@section('title', 'crear usuario')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 mr-auto ml-auto">
			<div class="card card-panel">
				<div class="card-header">
		   			 <h3 class="headertitle">Nuevos Creyentes</h3>
		 		 </div>
		  		<div class="card-body">
		    		<form>
					  <div class="form-group">
					    <label for="cedula">Cedula</label>
					    <input type="text" class="form-control" id="cedula" placeholder="Cedula o Pasaporte">
					  </div>

					  <div class="form-group">
					    <label for="cedula">Nombre Completo</label>
					    <input type="text" class="form-control" id="cedula" placeholder="Nombres y Apellidos">
					  </div>

					  <div class="form-group">
					    <label for="direccion">Direccion</label>
					    <input type="text" class="form-control" id="direccion" placeholder="E.j: Av 80A, Calle 79D">
					  </div>

					  <div class="form-group">
					    <label for="edad">Edad</label>
					    <input type="number" class="form-control" id="edad">
					  </div>
					
					  <div class="form-group">
					    <label for="descripcion">Descripcion</label>
					    <input type="text" class="form-control" id="descripcion" aria-describedby="descHelp">
					    <small id="descHelp" class="form-text text-muted"> Nuevo Creyentes, Acompañante, Bautizos</small>
					  </div>
						
					  <div class="form-group">
					    <label for="año">Año</label>
					    <select class="form-control" name="ano">
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
					    <input type="text" class="form-control datepicker" name="fechaServicio" readonly>
					  </div>

					  <div class="form-group">
					    <label for="telefono">Telefono</label>
					    <input type="number" class="form-control" id="telefono" placeholder="E.j: 04245551234">
					  </div>

					  <div class="form-group">
					    <label for="correo">Correo</label>
					    <input type="text" class="form-control" id="correo" placeholder="E.j: Ejemplo@exam.com">
					  </div>

					  <div class="form-group">
					    <label for="invitacion">Persona que lo invito</label>
					    <input type="text" class="form-control" id="invitacion">
					  </div>

					  <div class="form-group">
					    <label for="motivo">Motivo de oracion</label>
					    <input type="text" class="form-control" id="motivo">
					  </div>

					  <div class="row">
						  <div class="form-group col-sm-4">
						  	 <label for="asiste">¿Asiste a una Celula?</label> <br>
						  	 Si
						  	 <input type="radio" value="si" name="lider" id="SI">
						  	 No
						  	 <input type="radio" value="no" name="lider" id="NO">
						  </div>

						  <div class="form-group col" id="lider">
						    <label for="nombrelider">Nombre del lider</label>
						    <input type="text" class="form-control" id="nombrelider">
						  </div> 
					  	
					  </div>


					  {{-- <div class="form-group">
					    <label for="nombrelider">Afirmador</label>
					    <input type="text" class="form-control" id="nombrelider">
					  </div> --}}

					  <div class="form-group">
					  	<label for="nombreafir">Nombre del Afirmador</label>
					  		<select name="id_afirmador" class="form-control" required>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>
											
							</select><br>
					  </div>

					  <div class="text-center">
					  	<button type="button" class="btn btn-info w-50">Registrar</button>
					  </div>
					</form>
		  		</div>
			</div>	
		</div>
	</div>


</div>
@endsection