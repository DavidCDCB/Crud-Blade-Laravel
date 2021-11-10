<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('publication')->nullable()->default('text');
            $table->enum('state_publication', ['publicado', 'rechazado','revisión'])->nullable()->default('revisión');
            $table->text('content_publication')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
