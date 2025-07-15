@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Actividade: {!!$actividade->nome!!}. <small><b>Edición:</b> {!!$actividade->edicion!!}, ano {!!$actividade->ano!!}</small>
    </h1>
</section>
<div class="content">
    <div class="row">
        @include('actividades.show_fields')
        <a style="margin-left:20px;" href="{!! route('actividades.index') !!}" class="btn btn-default">Back</a>
    </div>
</div>
@endsection
