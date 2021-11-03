<?php
// php artisan make:controller Controlador --api
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Usuario;
use App\Models\Comentario;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$listado = [];
		foreach (Usuario::all() as $usuario) {
			array_push($listado,$usuario);
		}
		return response()->json($listado, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		if($request->has('nombre') && $request->filled('nombre')){
			//dd($request->all());
			//dd($request->nombre);
			Usuario::create($request->all());
		}
		

		return response("Storing resource");
	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$usuario = Usuario::with("comentarios","tags")->where("id","=",$id)->first();

        return response()->json($usuario, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$usuario = Usuario::where("id","=",$id)->first();
		$usuario->update($request->all());

        return response()->json($usuario, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$usuario = Usuario::where("id","=",$id)->first();
		$usuario->delete();

		return response()->json($usuario, 200);
    }

	public function querys($querys)
	{
		// https://laravel.com/docs/8.x/queries#running-database-queries
		// https://laravel.com/docs/8.x/collections#method-push
		$tags = DB::table('tags')->get();
		return response()->json($tags, 200);
	}
}
