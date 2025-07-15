@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Resultado sorteo</h1>
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
                    <div class="form-group col-sm-12">
                        @foreach($resultados as $resultado)
                        <div class="small-box bg-aqua">
                            <div class="inner text-center">
                              <h3>{!!$resultado!!}</h3>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="number-center">

  </div>
</div>
@endsection

