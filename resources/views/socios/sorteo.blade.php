@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Sorteo persoas socias</h1>
        {{--
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('socios.create') !!}">Add New</a>
        </h1>
        --}}
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!!Form::open(['url'=>'sorteo'])!!}
                    <div class="form-group col-sm-12 col-md-6 col-lg-3">
                        {!! Form::label('azul', 'Nº inscritos Casa Azul:') !!}
                        {!! Form::number('azul', null, ['class' => 'form-control', 'step'=>1, 'min'=>0]) !!}
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-3">
                        {!! Form::label('multiusos', 'Nº inscritos Multiusos:') !!}
                        {!! Form::number('multiusos', null, ['class' => 'form-control', 'step'=>1, 'min'=>0]) !!}
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-3">
                        {!! Form::label('froebel', 'Nº inscritos Froebel:') !!}
                        {!! Form::number('froebel', null, ['class' => 'form-control', 'step'=>1, 'min'=>0]) !!}
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-3">
                        {!! Form::label('luz', 'Nº inscritos Casa da Luz:') !!}
                        {!! Form::number('luz', null, ['class' => 'form-control', 'step'=>1, 'min'=>0]) !!}
                    </div>
                    <div class="form-group col-sm-12 col-md-6 col-lg-3">
                        {!! Form::label('ganadores', 'Nº ganadores:') !!}
                        {!! Form::number('ganadores', null, ['class' => 'form-control', 'step'=>1, 'min'=>0]) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! route('socios.index') !!}" class="btn btn-default">Cancel</a>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    <div class="number-center">

    </div>
</div>
@endsection

