<li class="header">USUARIOS</li>

<li class="{{ Request::is('administradors*') ? 'active' : '' }}">
    <a href="{!! route('administradors.index') !!}"><i class="fa fa-edit"></i><span>Administradors</span></a>
</li>

<li class="{{ Request::is('coordinadors*') ? 'active' : '' }}">
    <a href="{!! route('coordinadors.index') !!}"><i class="fa fa-edit"></i><span>Controladors</span></a>
</li>
{{--
<li class="{{ Request::is('monitors*') ? 'active' : '' }}">
    <a href="{!! route('monitors.index') !!}"><i class="fa fa-edit"></i><span>Monitors</span></a>
</li>
--}}
<li class="header">CONFIGURADOR</li>
<li class="{{ Request::is('espazos*') ? 'active' : '' }}">
    <a href="{!! route('espazos.index') !!}"><i class="fa fa-edit"></i><span>Espazos</span></a>
</li>

<li class="{{ Request::is('actividades*') ? 'active' : '' }}">
    <a href="{!! route('actividades.index') !!}"><i class="fa fa-edit"></i><span>Actividades</span></a>
</li>

<li class="{{ Request::is('eventos*') ? 'active' : '' }}">
    <a href="{!! route('eventos.index') !!}"><i class="fa fa-edit"></i><span>Eventos</span></a>
</li>

<li class="{{ Request::is('incidencias*') ? 'active' : '' }}">
    <a href="{!! route('incidencias.index') !!}"><i class="fa fa-edit"></i><span>Incidencias</span></a>
</li>
<li class="header">DATOS</li>
<li class="{{ Request::is('avaliacionmonitors*') ? 'active' : '' }}">
    <a href="{!! route('avaliacionmonitors.index') !!}"><i class="fa fa-edit"></i><span>Avaliacion monitors</span></a>
</li>

<li class="{{ Request::is('avaliacionsatisfacions*') ? 'active' : '' }}">
    <a href="{!! route('avaliacionsatisfacions.index') !!}"><i class="fa fa-edit"></i><span>Avaliacion satisfacion</span></a>
</li>
<li class="bg-success"><a href="{!!url('importar-excel')!!}" style="background-color: rgb(0, 166, 90);"><i class="fa fa-file-excel-o" aria-hidden="true"  style="color: rgb(255, 255, 255);"></i><span style="color: rgb(255, 255, 255);">Importar Excel</span></a></li>
<li class="header">PERSOA SOCIA</li>
<li class="{{ Request::is('sorteo*') ? 'active' : '' }}">
    <a href="{!!url('sorteo')!!}"><i class="fa fa-edit"></i><span>Sorteo</span></a>
</li>
{{--
<li class="{{ Request::is('socios*') ? 'active' : '' }}">
    <a href="{!! route('socios.index') !!}"><i class="fa fa-edit"></i><span>Socios</span></a>
</li>
--}}

<li class="{{ Request::is('socios*') ? 'active' : '' }}">
    <a href="{!! route('socios.index') !!}"><i class="fa fa-edit"></i><span>Persoas socias</span></a>
</li>

