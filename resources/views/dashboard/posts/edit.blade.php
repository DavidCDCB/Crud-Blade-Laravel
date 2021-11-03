@extends('dashboard.master')
@section('content')
	<h6>Actualizar Usuario</h6>
	{{$usuario->id}}
	<form action="{{ route('usuario.update',$usuario) }}" method="POST">
		@method('PUT')
		@include('dashboard.posts._form')
	</form>
@endsection