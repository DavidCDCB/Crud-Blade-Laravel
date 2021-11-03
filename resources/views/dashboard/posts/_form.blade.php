@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
	<input class="form-control" value="{{old('nombre',$usuario->nombre)}}" type="text" name="nombre" id="nombre" placeholder="Nombre">
	<input class="form-control" value="{{old('apellido',$usuario->apellido)}}" type="text" name="apellido" id="apellido" placeholder="Apellido">
	<input class="form-control" value="{{old('email',$usuario->email)}}" type="text" name="email" id="email" placeholder="Email">
</div>
<div class="form-group">
	
	<button type="submit" class="btn btn-success">Enviar</button>
</div>