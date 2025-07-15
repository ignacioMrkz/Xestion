@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actividade
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actividade, ['route' => ['actividades.update', $actividade->id], 'method' => 'patch']) !!}

                        @include('actividades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection