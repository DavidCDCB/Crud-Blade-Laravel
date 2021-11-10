<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

	protected $fillable = ['nombre', 'apellido', 'email'];

	public function comentarios(){
		return $this->hasMany(Comentario::class);
	}

	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}
}
