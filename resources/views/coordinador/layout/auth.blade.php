@extends('layouts.front')

@section('content')
<a href="{{ url('/coordinador/logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Logout
</a>

<form id="logout-form" action="{{ url('/coordinador/logout') }}" method="POST" style="display: none;">
	{{ csrf_field() }}
</form>
@endsection
