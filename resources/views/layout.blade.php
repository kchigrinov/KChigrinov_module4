<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>News</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('js/closealert.js') }}"></script>
  	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

@include('layouts.navbar')

<div class="container">
	<div class="row">
		<div class="col-md-3 left-bar">
			@include('layouts.leftbar')
		</div>
		<div class="col-md-6">
			@yield('category')
			@yield('news')
			@yield('showbytag')
			@yield('search')
			@yield('topcoments')
		</div>
		<div class="col-md-3 right-bar">
			@include('layouts.rightbar')
		</div>
	</div>
</div>


@include('layouts.newsletter')

</body>
</html>