<?php
// php artisan make:model Usuario (-cm para crear el controlador y el modelo)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
	//protected $table = 'posts_datos';
	protected $fillable = ['nombre', 'apellido', 'email'];

	public function comentarios()
	{
		return $this->hasMany(Comentario::class);
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}
}
