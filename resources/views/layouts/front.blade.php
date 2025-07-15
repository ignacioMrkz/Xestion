<!doctype html>
<html class="no-js" lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Noites Abertas</title>
	<link href="https://fonts.googleapis.com/css?family=Cutive+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	{!!Html::style('css/materialize.min.css')!!}
	{!!Html::style('css/front.css')!!}
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	@include('layouts.nav')
	@yield('content')
<a href="{{url()->previous()}}" class="hide-on-large-only btn-floating btn-large waves-effect waves-light blue lighten-2 btn-back"><i class="material-icons">arrow_back</i></a>
	@include('layouts.footer')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	{!!Html::script('js/materialize.min.js')!!}
	<script type="text/javascript">
		$(document).ready(function(){
			$('.sidenav').sidenav();
		});
	</script>
	@yield('scripts')
</body>
</html>
