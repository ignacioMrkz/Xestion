@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Incidencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($incidencia, ['route' => ['incidencias.update', $incidencia->id], 'method' => 'patch']) !!}

                        @include('incidencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection