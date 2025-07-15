@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cargar Excel
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            @if(isset($mensaje))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Carga correcta</h4>
              </div>
              @endif
            @if(isset($errores))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Errores!</h4>
                @foreach($errores as $error)
                {!!$error!!}<br>
                @endforeach
              </div>
            @endif
            <div class="box-body">
                    {!! Form::open(['url' => 'importar-excel', 'files' => true]) !!}
                    <div class="form-group col-sm-12">
                        {!! Form::file('archivo', []) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('ano', 'Ano:') !!}
                        {!! Form::number('ano', null, ['class'=>'form-control', 'step'=>1]) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::label('edicion', 'Edición:') !!}
                        {!! Form::number('edicion', null, ['class'=>'form-control', 'step'=>1]) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{!! url()->previous() !!}" class="btn btn-default">Cancel</a>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
