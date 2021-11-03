@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
	<input class="form-control" value="{{old('name',$category->name)}}" type="text" name="name" id="name" placeholder="Nombre">
	<input class="form-control" value="{{old('content',$category->content)}}" type="text" name="content" id="content" placeholder="Contenido">
	
</div>
<div class="form-group">
	
	<button type="submit" class="btn btn-success">Enviar</button>
	<a href="{{ URL::previous() }}" class="btn btn-danger">Atras</a>
</div>