<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

	protected $fillable = ['descripcion','usuario_id'];

	public function comentario()
	{
		return $this->belongsTo(Usuario::class);
	
	}
}
