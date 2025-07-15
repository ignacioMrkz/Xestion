@extends('layouts.app')

@section('content')
<div class="content">
	<section class="content-header">
		<h1>
			Noites abertas - Datos
		</h1>
		{{Form::open(['url'=>'datos-segmentados'])}}
		<h5>Data inicial: {{Form::date('inicio', null, ['class'=>'form-control'])}}</h5>
		<h5>Data final: {{Form::date('fin', null, ['class'=>'form-control'])}}</h5>
		{!! Form::submit('Ver', ['class' => 'btn btn-primary']) !!}
		{{Form::close()}}
	</section>
</div>
@endsection