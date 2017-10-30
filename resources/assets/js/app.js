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

	$('.ch').click(function() {
		setTimeout(function(){
			var cont=0;

			for (var i=1; i <= 8; i++) {
				var title = '#checkbox'+i
				var aux = $(title)
				if (aux.is(':checked')) {
				  	cont = cont + 1;
				}
			}
			$('#total').val(cont)
			if ($('#total').val() > 6) {
				$('#total').addClass('is-valid')
				$('#total').removeClass('is-invalid')
			}else{
				$('#total').addClass('is-invalid')
				$('#total').removeClass('is-valid')

			}
		}, 10);
	})
})