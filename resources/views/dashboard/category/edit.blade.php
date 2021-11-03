@extends('dashboard.master')
@section('content')
	<h6>Actualizar Usuario</h6>
	{{$category->id}}
	<form action="{{ route('category.update',$category) }}" method="POST">
		@method('PUT')
		@include('dashboard.category._form')
	</form>
@endsection