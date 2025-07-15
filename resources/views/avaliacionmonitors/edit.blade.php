@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Avaliación monitors
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($avaliacionmonitors, ['route' => ['avaliacionmonitors.update', $avaliacionmonitors->id], 'method' => 'patch']) !!}

                        @include('avaliacionmonitors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection