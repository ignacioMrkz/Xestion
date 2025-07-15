<div class="navbar-fixed">
	<nav>
	<div class="nav-wrapper">
		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="{!!url('coordinador/home')!!}">Inicio</a></li>
			<li><a href="{!!url('coordinador/ver-enquisas')!!}">Ver todas as enquisas</a></li>
			<li><a href="{!!url('coordinador/ver-socios')!!}">Ver persoas socias</a></li>
			<li><a href="{{ url('/coordinador/logout') }}" class="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
				Pechar sesión
			</a></li>
			<form id="logout-form" action="{{ url('/coordinador/logout') }}" method="POST" style="display: none;">
				{{ csrf_field() }}
			</form>
		</ul>
	</div>
</nav>
</div>

<ul class="sidenav" id="mobile-demo">
	<li><a href="{!!url('coordinador/home')!!}">Inicio</a></li>
	<li><a href="{!!url('coordinador/ver-enquisas')!!}">Ver todas as enquisas</a></li>
	<li><a href="{!!url('coordinador/ver-socios')!!}">Ver persoas socias</a></li>
	<li><a href="{{ url('/coordinador/logout') }}" class="right" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
		Pechar sesión
	</a></li>
	<form id="logout-form" action="{{ url('/coordinador/logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
</ul>
