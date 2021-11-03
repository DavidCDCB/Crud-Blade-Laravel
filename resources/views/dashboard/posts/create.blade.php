@extends('dashboard.master')
@section('content')
	<h6>Crear Usuario</h6>

	<form action="{{ route("usuario.store") }}" method="POST">
		@include('dashboard.posts._form')
	</form>
@endsection