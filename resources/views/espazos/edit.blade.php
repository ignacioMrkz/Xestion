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
                   {!! Form::model($espazo, ['route' => ['espazos.update', $espazo->id], 'method' => 'patch']) !!}

                        @include('espazos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection