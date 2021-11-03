@extends('dashboard.master')

{{-- https://laravel.com/docs/8.x/blade#if-statements --}}

@section('content')
	<h6>Listar publicacion</h6>
	@foreach ($users as $user)
		@if ($loop->index == 1)
			<h1>{{ $user->id }}</h1>
			<p>{{ $user->nombre }}</p>
		@else
			<h3>{{ $user->id }}</h1>
			<p>{{ $user->nombre }}</p>
		@endif
	@endforeach

	<table class="table table-striped table-dark">
		<thead>
		  <tr>
			<th scope="col">#</th>
			<th scope="col">Nombre</th>
			<th scope="col">Apellido</th>
			<th scope="col">Email</th>
			<th scope="col">Opciones</th>
		  </tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
		  <tr>
			<th scope="row">{{ $user->id }}</th>
			<td>{{ $user->nombre }}</td>
			<td>{{ $user->apellido }}</td>
			<td>{{ $user->email }}</td>
			<td>
				<a href="{{ route('usuario.edit',$user -> id) }}" class="btn btn-info">Editar</a>
				<a href="{{ route('usuario.delete',$user -> id) }}" class="btn btn-danger">Eliminar</a>
			</td>
		  </tr>
		  	@endforeach
		</tbody>
	  </table>

	@php
		$dato = 'Hola mundo';
	@endphp

	<x-Componente :parametro='$dato'>
		<x-slot name="titulo">
			<h1>contenido</h1>
		</x-slot>
		<x-slot name="contenido">
			<h1>contenido2</h1>
		</x-slot>
	</x-Componente>
@endsection

