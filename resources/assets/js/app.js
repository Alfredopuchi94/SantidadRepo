 // o-o-o-o-o-o- FECHA SERVICIO -o-o-o-o-o-o
 $(document).ready(function(){
	$( ".datepicker" ).datepicker(
	  {
	    dateFormat: 'yy-mm-dd',
	    showAnim: 'drop',
	    showOtherMonths: true,
	      selectOtherMonths: true,
	      changeMonth: true,
	      changeYear: true,
	  }
	);
	// o-o-o-o-o-o- ASISTE A CELULA -o-o-o-o-o-o
		$('#lider').hide();

			$("#SI").click(function(){

				if( $('#SI').prop('checked') ) {
				    $('#lider').show();
				}else { $('#lider').hide(); }
			});

			$("#NO").click(function(){

				if( $('#NO').prop('checked') ) {
				    $('#lider').hide();
				}else { $('#lider').show(); }
			});
		})
