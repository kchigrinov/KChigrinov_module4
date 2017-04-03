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
	<script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
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
@include('slider')

<div class="container">
	<div class="row">
		<div class="col-md-3 left-bar">
			@include('layouts.leftbar')
		</div>
		<div class="col-md-6">
			@include('layouts.topComents')
			@include('layouts.categories')
		</div>
		<div class="col-md-3 right-bar">
			@include('layouts.rightbar')
		</div>
	</div>
</div>

@include('layouts.newsletter')

</body>
</html>