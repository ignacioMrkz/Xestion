@extends('layouts.front')

@section('content')
<div class="container">
    <h4>Incidencia</h4>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <div class="card-panel red white-text darken-2">
                @foreach ($errors->all() as $error)
                {{$error}}<br>
                @endforeach
            </div>
        </ul>
    </div>
    @endif
    {!!Form::open(['url'=>'coordinador/incidencias', 'files'=>true])!!}
    <div class="row">
        <h5>Espazo:</h5>
        <select name="espazo_id">
            <option value="" disabled selected="selected">Escolle un espazo</option>
            @foreach($espazos as $espazo)
            <option value="{!!$espazo->id!!}" {{ old('espazo_id') == $espazo->id ? ' selected' : '' }}>{!!$espazo->nome!!}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="incidencia" class="materialize-textarea" name="incidencia">{{old('incidencia')}}</textarea>
            <label for="incidencia">Anota aquí as incidencias:</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input id="data1" type="number" class="validate" name="aval_monitores">
            <label for="data1">Avaliación monitores</label>
        </div>
        <div class="input-field col s6">
            <input id="data2" type="number" class="validate" name="aval_usuarios">
            <label for="data2">Avaliación usuarios</label>
        </div>
        <div class="input-field col s6">
            <input id="data3" type="number" class="validate" name="suxestions">
            <label for="data3">Suxestións</label>
        </div>
        <div class="input-field col s6">
            <input id="data4" type="number" class="validate" name="cartel_suxestions">
            <label for="data4">Cartel suxestións</label>
        </div>
        <div class="input-field col s6">
            <input id="data5" type="number" class="validate" name="boligrafos">
            <label for="data5">Bolígrafos</label>
        </div>
        <div class="input-field col s6">
            <input id="data6" type="number" class="validate" name="celo">
            <label for="data6">Celo</label>
        </div>
        <div class="input-field col s6">
            <input id="data7" type="number" class="validate" name="carnes">
            <label for="data7">Carnés</label>
        </div>
        <div class="input-field col s6">
            <input id="data8" type="number" class="validate" name="cartel_fai_carne">
            <label for="data8">Cartel fai carné</label>
        </div>
        <div class="input-field col s6">
            <input id="data9" type="number" class="validate" name="carne_adultos">
            <label for="data9">Carné adultos</label>
        </div>
        <div class="input-field col s6">
            <input id="data10" type="number" class="validate" name="carne_menores">
            <label for="data10">Carné menores</label>
        </div>
        <div class="input-field col s6">
            <input id="data11" type="number" class="validate" name="numeros_sorteos">
            <label for="data11">Números sorteos</label>
        </div>
        <div class="input-field col s6">
            <input id="data12" type="number" class="validate" name="cartel_sorteos">
            <label for="data12">Cartel sorteos</label>
        </div>
        <div class="input-field col s6">
            <input id="data13" type="number" class="validate" name="completo">
            <label for="data13">"Completo"</label>
        </div>
        <div class="input-field col s6">
            <input id="data14" type="number" class="validate" name="programas">
            <label for="data14">Programas (publi)</label>
        </div>
        <div class="input-field col s6">
            <input id="data15" type="number" class="validate" name="papel_hixienico">
            <label for="data15">Papel hixiénico</label>
        </div>
        <div class="input-field col s6">
            <input id="data16" type="number" class="validate" name="bolsas_lixo">
            <label for="data16">Bolsas lixo (FR/CA)</label>
        </div>
        <div class="input-field col s6">
            <input id="data17" type="number" class="validate" name="panos_limpieza">
            <label for="data17">Panos limpieza (FR)</label>
        </div>
        <div class="input-field col s6">
            <input id="data18" type="number" class="validate" name="productos_limpieza">
            <label for="data18">Productos limpieza (FR)</label>
        </div>
        <div class="input-field col s6">
            <input id="data19" type="number" class="validate" name="cartel_premios">
            <label for="data19">Cartel premios</label>
        </div>
        <div class="input-field col s6">
            <input id="data20" type="number" class="validate" name="cartel_servizos">
            <label for="data20">Cartel servizos (FR/DE)</label>
        </div>
        <div class="input-field col s6">
            <input id="data21" type="number" class="validate" name="vestiarios_mozos">
            <label for="data21">Vestiarios mozos (DE)</label>
        </div>
        <div class="input-field col s6">
            <input id="data22" type="number" class="validate" name="vestiarios_mozas">
            <label for="data22">Vestiarios mozas (DE)</label>
        </div>
        <div class="input-field col s6">
            <input id="data23" type="number" class="validate" name="controla_pertenzas">
            <label for="data23">Controla pertenzas (DE)</label>
        </div>
        <div class="input-field col s6">
            <input id="data24" type="number" class="validate" name="cinta_non_pasar">
            <label for="data24">Cinta non pasar (DE)</label>
        </div>
        <div class="input-field col s6">
            <input id="data25" type="number" class="validate" name="cartel_non_pasar">
            <label for="data25">Cartel non pasar (DE)</label>
        </div>
        <div class="input-field col s6">
            <input id="data26" type="number" class="validate" name="cartel_tiro">
            <label for="data26">Cartel tiro con arco (DE)</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="outros" class="materialize-textarea" name="outros">{{old('outros')}}</textarea>
            <label for="outros">Anota aquí outras peticións:</label>
        </div>
    </div>
    <div class="row">
        <div class="file-field input-field">
            <div class="btn">
                <span>Imaxe</span>
                <input type="file" name="imaxe">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button class="btn waves-effect waves-light" type="submit">Gardar
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
    {!!Form::close()!!}
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
@endsection