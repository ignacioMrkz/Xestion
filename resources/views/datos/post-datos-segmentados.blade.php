@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left">Datos segementados por data de {{$inicio}} a {{$fin}}</h1>
</section>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-responsive" id="espazos-table">
                <thead>
                    <tr>
                        <th>Dato</th>
                        <th>Totales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mozas 12-16</td>
                        <td>{!! $avaliacionmonitors->sum('moza12') !!}</td>
                    </tr>
                    <tr>
                        <td>Mozas 17-25</td>
                        <td>{!! $avaliacionmonitors->sum('moza17') !!}</td>
                    </tr>
                    <tr>
                        <td>Mozas 26 e +</td>
                        <td>{!! $avaliacionmonitors->sum('moza26') !!}</td>
                    </tr>
                    <tr>
                        <td>Mozos 12-16</td>
                        <td>{!! $avaliacionmonitors->sum('mozo12') !!}</td>
                    </tr>
                    <tr>
                        <td>Mozos 17-25</td>
                        <td>{!! $avaliacionmonitors->sum('mozo17') !!}</td>
                    </tr>
                    <tr>
                        <td>Mozos 26 e +</td>
                        <td>{!! $avaliacionmonitors->sum('mozo26') !!}</td>
                    </tr>
                    <tr>
                        <td>Persoa non binaria 12-16</td>
                        <td>{!! $avaliacionmonitors->sum('no_binaria12') !!}</td>
                    </tr>
                    <tr>
                        <td>Persoa non binaria 17-25</td>
                        <td>{!! $avaliacionmonitors->sum('no_binaria17') !!}</td>
                    </tr>
                    <tr>
                        <td>Persoa non binaria 26 e +</td>
                        <td>{!! $avaliacionmonitors->sum('no_binaria26') !!}</td>
                    </tr>
                    <tr>
                        <td>Outras identidades 12-16</td>
                        <td>{!! $avaliacionmonitors->sum('outro12') !!}</td>
                    </tr>
                    <tr>
                        <td>Outras identidades 17-25</td>
                        <td>{!! $avaliacionmonitors->sum('outro17') !!}</td>
                    </tr>
                    <tr>
                        <td>Outras identidades 26 e +</td>
                        <td>{!! $avaliacionmonitors->sum('outro26') !!}</td>
                    </tr>
                    <tr>
                        <td>Prefiro non contestar 12-16</td>
                        <td>{!! $avaliacionmonitors->sum('no_contesta12') !!}</td>
                    </tr>
                    <tr>
                        <td>Prefiro non contestar 17-25</td>
                        <td>{!! $avaliacionmonitors->sum('no_contesta17') !!}</td>
                    </tr>
                    <tr>
                        <td>Prefiro non contestar 26 e +</td>
                        <td>{!! $avaliacionmonitors->sum('no_contesta26') !!}</td>
                    </tr>
                    <tr>
                        <td>Público</td>
                        <td>{!! $avaliacionmonitors->sum('publico') !!}</td>
                    </tr>
                    <tr>
                        <td>Xente fora</td>
                        <td>{!! $avaliacionmonitors->sum('fora') !!}</td>
                    </tr>
                    <tr>
                        <td>Participantes</td>
                        <td>{!! $avaliacionmonitors->sum('participantes') !!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            <table class="table table-responsive" id="espazos-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Participantes</th>
                        <th>Público</th>
                        <th>Xente fora</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($espazos as $espazo)
                    <tr>
                        <td>{!! $espazo->nome !!}</td>
                        <td>{!! $espazo->participantesFecha($inicio, $fin) !!}</td>
                        <td>{!! $espazo->publicoFecha($inicio, $fin) !!}</td>
                        <td>{!! $espazo->foraFecha($inicio, $fin) !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center">

    </div>
</div>
@endsection

