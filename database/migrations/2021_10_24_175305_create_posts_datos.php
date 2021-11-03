<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsDatos extends Migration
{

	// php artisan make:migration create_posts_datos
	// php artisan migrate;php artisan migrate:status
	// php artisan migrate:fresh (Migra todo desde 0)
	// artisan make:migration actualizacion --table=existente
	// php artisan migrate:rollback

    public function up()
    {
		// https://laravel.com/docs/8.x/migrations#columns
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
			$table->string('nombre');
			$table->string('apellido');
			$table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_datos');
    }
}
