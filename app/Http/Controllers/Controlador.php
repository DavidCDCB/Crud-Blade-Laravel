<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UsuarioRequest;

class Controlador extends Controller
{
	public function __construct()
	{

	}

    public function index(){
		$users = DB::table('usuarios')->get();
		return view('dashboard.posts.index',compact('users'));
	}

	public function create(){
		return view('dashboard.posts.create',['usuario' => new Usuario]);
	}
	public function store(UsuarioRequest $request){
		Usuario::create($request->validated());
		return back()->with('status','Usuario creado correctamente');
	}

	public function edit(Usuario $usuario){
		//$usuario = Usuario::where("id","=",$id)->first();
		return view('dashboard.posts.edit', compact('usuario'));
	}
	public function update(UsuarioRequest $request, Usuario $usuario){
		$usuario->update($request->validated());
		return back()->with('status','Usuario actualizado correctamente');;
	}
	public function delete(Usuario $usuario){
		return $usuario;
	}
}
