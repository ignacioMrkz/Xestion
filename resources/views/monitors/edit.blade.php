@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Monitor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($monitor, ['route' => ['monitors.update', $monitor->id], 'method' => 'patch']) !!}

                        @include('monitors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection