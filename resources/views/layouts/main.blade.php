<!DOCTYPE html>
<html>
<head>
	<title>Eletrônicos S/A </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('resources\css\app.css') }}">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<meta charset=utf-8>
	<meta name=csrf_token content="{{ csrf_token() }}">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<style type="text/css">
		body {
			padding: 20px;
		}

		.navbar {
			margin-bottom: 20px;
		}

		.btn {
			margin-left: 5px;
		}

		.form-check {
			margin-top: 10px;	
		}
	</style>
</head>
<body>

	<div class="container">
		@component('components.navbar', ["current" => $current])
		@endcomponent
		<main role="main">
			@hasSection('body')
				@yield('body')
			@endif
		</main>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script src="{{ asset('resources\js\app.js') }}" type="text/javascript"></script>
</body>
</html>