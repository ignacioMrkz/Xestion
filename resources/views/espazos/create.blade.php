@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Espazo
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'espazos.store']) !!}

                        @include('espazos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
