<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	@include('template.partials.nav') 

	<section class="main">
		<div class="container">
			{{-- @include('flash::message') --}}
			@include('template.partials.errors')
		</div>
		@yield('content', '<h1>Template</h1>')
	</section>

	<footer>
		@yield('footer', '')
	</footer>

</body>
	<script src="{{ asset('js/app.js') }}"></script>
</html>
