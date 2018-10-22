<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title>Blog Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	<!-- Custom styles for this template -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<link href="/css/app.css" rel="stylesheet">
</head>

<body>

	<div class="container">
		

		@include ('layouts.nav')

		@if ($flash = session('message'))

			<div class="alert alert-success" id="flash-message" role="alert">
				{{ $flash }}
			</div>
		@endif

		@yield ('header')

		<main role="main" class="container">
			<div class="row">
				@yield ('content')

				@include ('layouts.sidebar')

			</div><!-- /.row -->

		</main><!-- /.container -->

		@include ('layouts.footer')
	</body>
	</html>
