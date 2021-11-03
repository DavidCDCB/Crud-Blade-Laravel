@extends('dashboard.master')

{{-- https://laravel.com/docs/8.x/blade#if-statements --}}

@section('content')
	<a href="{{ route('category.create') }}" class="btn btn-success mb-3">Crear</a>
	<h6>Listar publicacion</h6>


	<table class="table table-striped table-dark text-center">
		<thead>
		  <tr>
			<th scope="col">#</th>
			<th scope="col">Nombre</th>
			<th scope="col">Contenido</th>
			<th scope="col">Opciones</th>
		  </tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
				<tr>
					<th scope="row">{{ $category->id }}</th>
					<td>{{ $category->name }}</td>
					<td>{{ $category->content }}</td>
					<td>
						<a href="{{ route('category.edit',$category -> id) }}" class="btn btn-info">Editar</a>
						<button category="{{$category -> id}}" class="btnDel btn btn-danger">Eliminar</button>
					</td>
				</tr>
		  	@endforeach
		</tbody>
	</table>

@endsection

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="module">

	document.querySelectorAll(".btnDel").forEach(element => {
		element.addEventListener('click',(e)=>{
			swal({
				title: "¿Desea eliminar este registro?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			}).then((willDelete) => {
				if (willDelete) {
					axios.delete('http://127.0.0.1:8000/web/category/'+element.getAttribute("category")).then((r) =>{
						console.log(r.data);
					});
				}
			});
		});
	});

</script>


