@if(count($errors) > 0)
{{-- 		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-xs-12">
				<div class="alert alert-danger alert-dismissible alert-important" role="alert">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <ul>
					
				  		<li><strong>Danger!</strong> {{$error}}</li>
					
				  </ul>
				</div>
			</div>
		</div> --}}
	@foreach($errors->all() as $error)
			<script>
				Command: toastr["error"]("{{$error}}")

				toastr.options = {
				  "closeButton": false,
				  "debug": false,
				  "newestOnTop": false,
				  "progressBar": true,
				  "positionClass": "toast-top-right",
				  "preventDuplicates": true,
				  "onclick": null,
				  "showDuration": "1000",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
			</script>
	@endforeach
@endif