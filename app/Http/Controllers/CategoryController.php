<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
		$categories = DB::table('categories')->get();
		return view('dashboard.category.index',compact('categories'));
	}

	public function create(){
		return view('dashboard.category.create',['category' => new Category]);
	}
	public function store(CategoryRequest $request){
		Category::create($request->validated());
		return back()->with('status','Categoria creada correctamente');
	}

	public function edit(Category $category){
		return view('dashboard.category.edit', compact('category'));
	}
	public function update(CategoryRequest $request, Category $category){
		$category->update($request->validated());
		return back()->with('status','Usuario actualizado correctamente');;
	}
	public function destroy(Category $category){
		$category->delete();
		return response()->json($category, 200);
	}
}
