@extends('layouts.front')

@section('content')
@include('monitor.layout.nav')
<div class="container">
	<div class="row">
		@foreach($actividades as $actividade)
		<div class="col s12 m6">
			<div class="card">
				<div class="card-content">
					<h5>{{$actividade->nome}}</h5>
					<a class="btn waves-effect waves-light red" href="{!!'avaliacion/'.$actividade->id!!}">Avaliación</a>
					<hr>
					@foreach($actividade->espazos as $espazo)
					<div class="row">
						<div class="col s12">
							@if($espazo->mapa)
	  						<a class="btn-floating waves-effect waves-light red right" href="{!!$espazo->mapa!!}" target="_blank"><i class="material-icons">place</i></a>
	  						@endif
							<p>{!!$espazo->nome!!}</p>
						</div>
					</div>
  					@endforeach
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection