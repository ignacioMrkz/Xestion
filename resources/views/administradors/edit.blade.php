@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Administrador
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($administrador, ['route' => ['administradors.update', $administrador->id], 'method' => 'patch']) !!}

                        @include('administradors.fields')

                   {!! Form::close() !!}
               </div>
               <div class="row">
      @if(isset($administrador))
      <div class="form-group col-sm-12">
        <h4>Cambiar contrasinal</h4>
      </div>
      {!!Form::open(['url'=>'cambiar-contrasinal-administrador'])!!}
      {!!Form::hidden('administrador_id', $administrador->id)!!}
      <div class="form-group col-sm-6">
        {!! Form::label('password', 'Nova Contrasinal:') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
      </div>
      <div class="form-group col-sm-6">
        {!! Form::label('password-confirm', 'Confirma nova contrasinal:') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
      </div>
      <div class="form-group col-sm-12">
        {!! Form::submit('Cambiar contrasinal', ['class' => 'btn btn-danger']) !!}
        <a href="{!! route('espazos.index') !!}" class="btn btn-default">Cancel</a>
      </div>
      {!! Form::close() !!}
      @endif
    </div>
           </div>
       </div>
   </div>
@endsection