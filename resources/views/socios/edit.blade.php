@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Persoas socias
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($socio, ['route' => ['socios.update', $socio->id], 'method' => 'patch']) !!}

                        @include('socios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection